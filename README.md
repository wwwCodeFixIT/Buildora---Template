# Lexora

Lexora is a premium Full Site Editing WordPress block theme for law firms, attorneys and legal practices. It combines an editorial legal aesthetic with native WordPress blocks, reusable patterns, dedicated practice/attorney/result pages and a confidential-consultation enquiry flow.

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
- midnight / ivory / antique-gold legal design system
- reusable native WordPress block patterns
- responsive sticky header and no-JS mobile navigation
- conversion-focused legal homepage
- dedicated Practice Areas, Attorneys, Results, About and Contact templates
- dedicated attorney profile template
- representative-matters / results presentation
- testimonials and trust-building sections
- built-in consultation form using `admin-post.php` and `wp_mail()`
- nonce verification, honeypot protection and basic submission throttling
- skip link, keyboard focus states and reduced-motion handling
- no page-builder dependency
- Vite + Sass source workflow for developers
- GitHub Actions CI and automated WordPress Playground PR previews

## Install the packaged theme

1. Build or download `lexora.zip`.
2. In WordPress open **Appearance → Themes → Add New → Upload Theme**.
3. Upload `lexora.zip` and activate **Lexora**.
4. Open **Appearance → Editor** to customize global styles, branding and content.

## Recommended page setup

Lexora does not silently insert demo content into a production WordPress database. Create the following Pages so the bundled slug-specific templates and navigation resolve correctly:

| Page | Slug |
| --- | --- |
| Practice Areas | `practice-areas` |
| Attorneys | `attorneys` |
| Results | `results` |
| About | `about` |
| Contact | `contact` |

For the bundled attorney-profile presentation, create a Page for an attorney and assign the **Attorney Profile** template in the Page settings. The Playground preview includes a fictional `Eleanor Mercer` profile only as demo content.

The repository's WordPress Playground preview seeds development/demo Pages only for review. A normal theme installation never writes demo Pages automatically.

## Consultation form

The Contact template contains a lightweight consultation enquiry form.

By default:

- submissions are sent to the WordPress **Administration Email Address**;
- the Administration Email Address is **not displayed publicly** on the Contact page;
- a valid nonce is required;
- a honeypot field filters simple bots;
- repeated submissions from the same browser/network fingerprint are throttled for one minute;
- submitted values are sanitized and validated server-side;
- the matter summary is limited to 5000 characters.

The form recipient can be customized in PHP:

```php
add_filter(
    'lexora_contact_recipient',
    static function (): string {
        return 'consultations@example.com';
    }
);
```

If the firm wants to display a public contact email beside the form, configure it separately. This avoids exposing the WordPress administration address by default:

```php
add_filter(
    'lexora_contact_public_email',
    static function (): string {
        return 'contact@example.com';
    }
);
```

`wp_mail()` depends on the hosting environment. For reliable production delivery, configure transactional SMTP or a mail provider through a dedicated WordPress mail plugin/service.

## Demo-content notice

Names, firms, representative matters, statistics, testimonials, addresses and legal-service copy included in the theme preview are sample content. Replace them with accurate client content before publishing a production website. Do not present fictional case results, credentials or testimonials as real claims.

## SEO baseline

Lexora provides the theme-side SEO foundation:

- WordPress-managed document titles via `title-tag` support;
- semantic landmarks and heading hierarchy;
- clean internal routes;
- responsive layouts and lightweight assets.

Lexora intentionally does **not** hardcode canonical tags, Open Graph metadata or organization/legal-service schema because those values are site-specific and can conflict with SEO plugins. Configure them with a dedicated SEO solution where required.

## Performance baseline

- no jQuery dependency
- no page-builder dependency
- no required third-party frontend library
- compiled production CSS
- responsive layout geometry designed to reduce layout shifts
- `prefers-reduced-motion` support

When replacing demo artwork with real photography, use responsive WordPress images (`srcset` / `sizes`), modern formats such as AVIF/WebP where appropriate and explicit dimensions/aspect ratios.

## Accessibility baseline

Lexora includes:

- semantic landmarks
- a keyboard-accessible skip link
- visible focus styles
- no-JS mobile navigation based on native HTML
- reduced-motion handling
- labelled form controls and server-side validation feedback

Accessibility still depends on site-owner content. Verify heading order, link purpose, alternative text, color choices and third-party plugin output after customization.

## Development

```bash
npm install
npm run dev
```

Build production assets:

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

The buyer-ready archive is generated as:

```text
build/lexora.zip
```

## Repository architecture

```text
lexora/
├── assets/
│   └── dist/               # compiled production assets
├── parts/                  # template parts
├── patterns/               # reusable WordPress patterns
├── templates/              # block templates
├── src/
│   └── scss/               # development styles
├── .github/
│   └── playground/         # development preview fixtures
├── scripts/                # build/cloud tooling
├── functions.php
├── style.css
├── theme.json
├── package.json
└── vite.config.js
```

## License

Lexora is licensed under **GPL-2.0-or-later**. See `LICENSE`.
