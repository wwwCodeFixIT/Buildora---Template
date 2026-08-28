# Buildora release checklist

Use this checklist before publishing a Buildora release ZIP to a marketplace or customer.

## Automated gates

- [x] ESLint passes.
- [x] Prettier check passes.
- [x] Vite production build passes.
- [x] `theme.json` parses as valid JSON.
- [x] All PHP files pass `php -l`.
- [x] Installable ZIP builds successfully.
- [x] ZIP contains required runtime files and buyer documentation.
- [x] ZIP excludes source tooling, GitHub workflows, Playground fixtures, `node_modules` and build scripts.
- [x] `style.css` theme version matches `BUILDORA_VERSION`.

## WordPress functional QA

- [ ] Fresh WordPress install: upload and activate the generated `buildora.zip`.
- [ ] Confirm no PHP notices/warnings with `WP_DEBUG` enabled.
- [ ] Confirm Appearance → Editor opens successfully.
- [ ] Confirm compiled Buildora component styles are visible inside the Site Editor.
- [ ] Create `services`, `projects`, `about` and `contact` Pages and confirm their slug templates resolve.
- [ ] Confirm Project Case Study can be selected as a Page template.
- [ ] Confirm desktop navigation works from every primary page.
- [ ] Confirm mobile menu works without JavaScript.
- [ ] Confirm sticky header does not hide anchored sections.
- [ ] Confirm 404, generic Page, archive/index and single-post templates render correctly.

## Contact form QA

- [ ] Required-field browser validation works.
- [ ] Invalid/tampered server submission returns the error state.
- [ ] Valid nonce submission reaches the configured recipient.
- [ ] Honeypot submissions do not send email.
- [ ] Immediate repeated submission is throttled.
- [ ] Failed `wp_mail()` does not lock the user out for a minute.
- [ ] Reply-To uses the visitor's validated email.
- [ ] Production SMTP / transactional email delivery is configured and tested.
- [ ] Privacy Policy Page is configured in WordPress if the site requires it.

## Responsive/browser QA

Test at minimum:

- [ ] 360 × 800 mobile
- [ ] 390 × 844 mobile
- [ ] 768 × 1024 tablet
- [ ] 1280 × 800 desktop
- [ ] 1440 × 900 desktop
- [ ] Chrome current
- [ ] Firefox current
- [ ] Safari/WebKit current

## Accessibility QA

- [ ] Complete the site using keyboard only.
- [ ] Skip link reaches `#main` on all supplied templates.
- [ ] Focus indication remains visible on links, buttons and form controls.
- [ ] Mobile menu is keyboard-operable.
- [ ] Heading order is logical after customer content is inserted.
- [ ] Decorative visuals do not receive misleading alternative text.
- [ ] Real project images receive meaningful alt text where appropriate.
- [ ] Run axe, WAVE or an equivalent automated accessibility scan.
- [ ] Check contrast after changing the default palette.
- [ ] Verify the experience with reduced motion enabled.

## Performance / Core Web Vitals QA

- [ ] Run Lighthouse mobile and desktop on a production-like host.
- [ ] Verify no unexpected frontend JavaScript is loaded by the theme.
- [ ] Verify no remote font request is introduced during customization.
- [ ] Optimize all real project photographs to AVIF/WebP where appropriate.
- [ ] Set responsive image `sizes` appropriately.
- [ ] Do not lazy-load the above-the-fold LCP image.
- [ ] Check for CLS after replacing demo geometry with real images.
- [ ] Check INP after installing third-party plugins.

## SEO QA

- [ ] Exactly one meaningful H1 is present on each marketing template.
- [ ] Site title and page titles are configured.
- [ ] Permalink structure is configured before launch.
- [ ] Install/configure an SEO plugin if canonical, Open Graph, XML sitemap or schema controls are required.
- [ ] Configure Organization/LocalBusiness schema with the customer's real company data — never demo data.
- [ ] Add unique meta descriptions for public landing pages.
- [ ] Confirm internal links do not point to demo-only URLs.

## Marketplace package QA

- [ ] Add/update `screenshot.png` for the theme card/marketplace listing.
- [ ] Verify `README.md`, `readme.txt`, `CHANGELOG.md` and `LICENSE` are present in the release ZIP.
- [ ] Verify no API keys, secrets, private URLs or customer data are included.
- [ ] Verify all third-party assets, if later introduced, have redistribution-compatible licenses documented.
- [ ] Test the exact ZIP intended for sale, not only the source repository.
- [ ] Tag the final commit as `v1.0.0` only after all manual gates above pass.

## WordPress.org note

Buildora currently includes contact-form processing as a theme feature. If submitting specifically to the WordPress.org Theme Directory, review the current Theme Review requirements for plugin-territory functionality before submission and move the form handling to a companion plugin if required.
