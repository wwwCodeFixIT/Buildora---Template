# Changelog

All notable changes to Lexora are documented in this file.

## 1.0.0 — 2026-09-01

### Added

- Premium legal-practice Full Site Editing design system.
- Responsive sticky header with no-JS mobile navigation.
- Conversion-focused homepage with legal trust signals and consultation CTAs.
- Practice Areas sections and dedicated Practice Areas page template.
- Attorneys section, Attorneys page and dedicated Attorney Profile template.
- Representative Matters / Results section and Results page template.
- Legal testimonials and trust-building content sections.
- Dedicated About and Contact page templates.
- Secure consultation enquiry form using WordPress `admin-post.php` and `wp_mail()`.
- Nonce verification, honeypot protection, server-side validation and basic submission throttling.
- System-wide responsive styles and `prefers-reduced-motion` handling.
- Vite/Sass development workflow and compiled production CSS.
- GitHub Actions CI, installable theme packaging and WordPress Playground PR previews.
- Buyer documentation and demo-content guidance for legal claims, credentials and results.

### Packaging

- Buyer-ready archive is generated as `lexora.zip` with a top-level `lexora/` theme directory.
- Development-only source, CI files and repository tooling are excluded from the buyer package.
- Package verification checks required files, compiled CSS and matching `1.0.0` version metadata.

### Notes

- Demo attorney names, matters, testimonials, statistics, addresses and credentials are fictional sample content and must be replaced before production use.
