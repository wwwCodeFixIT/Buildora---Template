=== Lexora ===
Contributors: codefixit
Requires at least: 6.6
Requires PHP: 8.1
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Premium Full Site Editing WordPress block theme for law firms, attorneys and legal practices.

== Description ==

Lexora is a native WordPress block theme designed for legal practices. It includes a conversion-focused homepage, dedicated Practice Areas, Attorneys, Results, About and Contact page templates, reusable patterns, an attorney-profile template and a consultation enquiry flow.

The production frontend uses compiled CSS with no page-builder dependency and no jQuery requirement.

== Installation ==

1. Upload lexora.zip from Appearance > Themes > Add New > Upload Theme.
2. Activate Lexora.
3. Create Pages named Practice Areas, Attorneys, Results, About and Contact with slugs practice-areas, attorneys, results, about and contact.
4. Open Appearance > Editor to customize branding, content and global styles.
5. Create attorney Pages and assign the Attorney Profile template where required.

See README.md in the theme package for detailed setup and developer information.

== Consultation form ==

The Contact page includes a lightweight consultation form. Messages are sent to the WordPress Administration Email Address by default through wp_mail().

The form includes nonce verification, a honeypot, server-side sanitization/validation and basic submission throttling. For reliable production email delivery, configure SMTP or a transactional mail service using a dedicated WordPress mail plugin/service.

== Demo content ==

Names, legal matters, statistics, testimonials, addresses and credentials shown in previews are sample content. Replace all demo claims with accurate client content before publishing a production website.

== SEO ==

Lexora provides title-tag support, semantic templates, heading structure and lightweight responsive markup. Canonical URLs, Open Graph metadata and site-specific legal-business schema should be configured through a dedicated SEO plugin when required.

== Accessibility ==

Lexora includes a skip link, visible keyboard focus states, semantic landmarks, labelled form controls and reduced-motion handling. Site owners remain responsible for accessible content, alternative text, heading order and third-party plugin output.

== Changelog ==

= 1.0.0 =
* Initial Lexora release.
* Added legal homepage and native Full Site Editing design system.
* Added Practice Areas, Attorneys, Results, About and Contact templates.
* Added dedicated Attorney Profile template.
* Added representative matters, testimonials and consultation CTA sections.
* Added secure consultation enquiry form.
* Added responsive sticky navigation and no-JS mobile menu.
* Added CI, buyer-ready packaging and WordPress Playground preview workflow.
