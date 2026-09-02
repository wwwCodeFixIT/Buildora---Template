import { mkdirSync, readFileSync, writeFileSync } from 'node:fs';

const demoPagesPhp = readFileSync('.github/playground/demo-seed.php', 'utf8');

const blueprint = {
  $schema: 'https://playground.wordpress.net/blueprint-schema.json',
  landingPage: '/',
  login: true,
  preferredVersions: {
    php: '8.3',
    wp: '7.1',
  },
  siteOptions: {
    blogname: 'Lexora',
    blogdescription: 'Law Firm & Legal Practice',
  },
  steps: [
    {
      step: 'installTheme',
      themeData: {
        resource: 'url',
        url: '__BUILDORA_THEME_URL__',
      },
      options: {
        activate: true,
      },
    },
    {
      step: 'runPHP',
      code: demoPagesPhp,
    },
  ],
};

mkdirSync('build', { recursive: true });
writeFileSync('build/blueprint.json', `${JSON.stringify(blueprint)}\n`, 'utf8');
