import { readFile, writeFile } from 'node:fs/promises';
import path from 'node:path';

const repository = process.argv[2];

if (!repository || !/^[A-Za-z0-9_.-]+\/[A-Za-z0-9_.-]+$/.test(repository)) {
  console.error('Usage: npm run configure:cloud -- OWNER/REPOSITORY');
  process.exit(1);
}

const blueprintFiles = [
  path.resolve('playground/demo.blueprint.json'),
  path.resolve('playground/dev.blueprint.json')
];

for (const file of blueprintFiles) {
  const blueprint = JSON.parse(await readFile(file, 'utf8'));

  for (const step of blueprint.steps ?? []) {
    if (step.step === 'installTheme' && step.themeData?.resource === 'git:directory') {
      step.themeData.url = `https://github.com/${repository}`;
    }
  }

  await writeFile(file, `${JSON.stringify(blueprint, null, 2)}\n`);
}

const rawBase = `https://raw.githubusercontent.com/${repository}/main/playground`;
const demoBlueprint = `${rawBase}/demo.blueprint.json`;
const devBlueprint = `${rawBase}/dev.blueprint.json`;

// Always use a temporary Playground for review links. This prevents an autosaved
// browser instance from reusing an older Buildora installation/template-part.
const playgroundBase = 'https://playground.wordpress.net/?storage=temp';
const demoUrl = `${playgroundBase}&blueprint-url=${encodeURIComponent(demoBlueprint)}`;
const devUrl = `${playgroundBase}&blueprint-url=${encodeURIComponent(devBlueprint)}`;

const output = `# Buildora Playground links\n\nRepository: https://github.com/${repository}\n\n## Demo\n${demoUrl}\n\n## Development\n${devUrl}\n`;
await writeFile(path.resolve('playground/LINKS.md'), output);

console.log(`Configured Playground for ${repository}`);
console.log(`Demo: ${demoUrl}`);
console.log(`Dev:  ${devUrl}`);
