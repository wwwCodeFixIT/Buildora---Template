# Buildora

Buildora is a performance-first WordPress block theme for construction, renovation and home-service businesses. It ships with a complete homepage, Services, Projects, About and Contact page designs, reusable block patterns and a project case-study template.

## Version

**1.0.0**

## Requirements

- WordPress 6.6+
- PHP 8.1+
- modern browser with CSS Grid support

Node.js is required only when developing the source repository. The installable ZIP already contains compiled production assets.

## Theme features

- Full Site Editing / block-theme architecture
- `theme.json` v3 design tokens
- reusable native WordPress patterns
- responsive sticky header and no-JS mobile navigation
- homepage conversion sections
- dedicated Services, Projects, About and Contact templates
- reusable **Project Case Study** page template
- built-in project enquiry form using `admin-post.php` and `wp_mail()`
- nonce verification, honeypot protection and basic submission throttling
- skip link, keyboard focus states and reduced-motion handling
- system font stack; no third-party font request
- no jQuery and no required frontend JavaScript
- Vite + Sass source workflow for developers
- GitHub Actions CI and automated WordPress Playground PR previews

## Install the packaged theme

1. Build or download `buildora.zip`.
2. In WordPress open **Appearance → Themes → Add New → Upload Theme**.
3. Upload `buildora.zip` and activate **Buildora**.
4. Open **Appearance → Editor** to change the global styles, site title and content.

## Recommended page setup

Buildora does not silently insert demo content into a production WordPress database. Create the following Pages so the bundled slug-specific templates and global navigation resolve correctly:

| Page | Slug |
| --- | --- |
| Services | `services` |
| Projects | `projects` |
| About | `about` |
| Contact | `contact` |

For project case studies, create child Pages beneath **Projects** and assign the **Project Case Study** template in the Page settings.

Example:

```text
Projects
├── Riverside House
├── Northline Studio
└── Oakfield Extension
```

The repository's WordPress Playground preview seeds demo Pages only for development and review. Normal theme installation never writes demo Pages automatically.

## Contact form

The Contact template contains a lightweight enquiry form.

By default:

- submissions are sent to the WordPress **Administration Email Address**;
- the public contact email also uses the WordPress administration email;
- a valid nonce is required;
- a honeypot field filters simple bots;
- repeated submissions from the same browser/network fingerprint are throttled for one minute;
- all submitted values are sanitized and validated server-side.

The recipient can be customized in PHP:

```php
add_filter(
    'buildora_contact_recipient',
    static function (): string {
        return 'projects@example.com';
    }
);
```

The public email shown on the Contact page can be changed independently:

```php
add_filter(
    'buildora_contact_public_email',
    static function (): string {
        return 'hello@example.com';
    }
);
```

`wp_mail()` depends on the hosting environment. For reliable production delivery, configure transactional SMTP or a mail provider through a dedicated WordPress mail plugin/service.

## SEO baseline

Buildora provides the theme-side SEO foundation:

- WordPress-managed document titles via `title-tag` support;
- one primary H1 in the supplied marketing templates;
- semantic landmarks and heading hierarchy;
- clean internal URLs;
- responsive layouts and lightweight assets.

Buildora intentionally does **not** hardcode canonical tags, Open Graph metadata or organization/local-business schema because those values are site-specific and would conflict with SEO plugins. Configure them with a dedicated SEO solution such as Yoast SEO, Rank Math or another standards-compliant plugin.

## Performance baseline

- CSS-only production frontend today
- no jQuery dependency
- no remote font request
- no page-builder dependency
- no required third-party frontend library
- fixed visual geometry to reduce layout shifts
- `prefers-reduced-motion` support

If real project photographs are added, use responsive WordPress images (`srcset` / `sizes`), modern formats such as AVIF/WebP where appropriate, explicit dimensions/aspect ratios and avoid lazy-loading the above-the-fold LCP image.

## Accessibility baseline

Buildora includes:

- semantic landmarks
- a keyboard-accessible skip link
- visible focus styles
- no-JS mobile navigation based on native HTML
- reduced-motion handling
- form labels and server-side validation feedback

Accessibility still depends on the content entered by the site owner. Verify heading order, link purpose, alternative text, color choices and any third-party plugins after customization.

## Development

```bash
npm install
npm run dev
```

Build production CSS:

```bash
npm run build
```

Run repository checks:

```bash
npm run lint
npm run format:check
npm run build
```

Create the installable theme ZIP:

```bash
npm run package
```

## Repository architecture

```text
buildora/
├── assets/
│   └── dist/               # compiled production assets
├── parts/                  # template parts
├── patterns/               # reusable WordPress patterns
├── templates/              # block templates
├── src/
│   └── scss/               # development styles
├── playground/             # development preview fixtures
├── scripts/                # build/cloud tooling
├── functions.php
├── style.css
├── theme.json
├── package.json
└── vite.config.js
```

## Cloud development

The repository supports a browser-only workflow:

- GitHub is the source of truth;
- GitHub Codespaces provides the development environment;
- WordPress Playground provides temporary WordPress instances;
- pull requests receive automated Playground previews;
- CI validates JavaScript tooling, asset builds, `theme.json`, PHP syntax and the installable ZIP.

See `CLOUD-WORKFLOW.md` for repository-maintainer details.

## License

Buildora is licensed under **GPL-2.0-or-later**. See `LICENSE`.
