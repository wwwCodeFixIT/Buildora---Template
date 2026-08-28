# Changelog

All notable changes to Buildora are documented in this file.

## 1.0.0 — 2026-08-28

### Added

- Complete conversion-focused homepage.
- Responsive sticky header with no-JS mobile navigation.
- Trust bar, Services, Why Us, Projects, Process, Testimonials and final CTA sections.
- Dedicated Services, Projects, About and Contact page templates.
- Reusable Project Case Study template for project child Pages.
- Secure project enquiry form using WordPress `admin-post.php` and `wp_mail()`.
- Nonce verification, honeypot protection, server-side validation and basic submission throttling.
- System-wide responsive styles and `prefers-reduced-motion` handling.
- Vite/Sass development workflow with CSS-only production frontend.
- GitHub Actions CI, installable theme packaging and WordPress Playground PR previews.
- Buyer/developer documentation and release packaging guidance.

### Changed

- Global Contact and quote links now route to `/contact/` and `/contact/#project-brief`.
- Playground preview now uses externally published Blueprint files instead of oversized data URLs.
- Release packaging includes buyer documentation while excluding development-only source/tooling directories.

### Performance

- Removed unnecessary frontend JavaScript from the production build.
- Uses a system font stack and no remote font request.
- Keeps layouts dependency-free and page-builder-free.
