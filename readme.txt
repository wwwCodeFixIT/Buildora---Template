=== Buildora ===
Contributors: codefixit
Requires at least: 6.6
Requires PHP: 8.1
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Performance-first WordPress block theme for construction, renovation and home-service businesses.

== Description ==

Buildora is a Full Site Editing block theme designed for contractors and home-service businesses. It includes a conversion-focused homepage, dedicated Services, Projects, About and Contact page templates, reusable patterns and a Project Case Study page template.

The production frontend uses compiled CSS with no required JavaScript, no jQuery dependency and no remote font request.

== Installation ==

1. Upload the Buildora ZIP from Appearance > Themes > Add New > Upload Theme.
2. Activate Buildora.
3. Create Pages named Services, Projects, About and Contact with slugs services, projects, about and contact.
4. Open Appearance > Editor to customize site identity, content and styles.
5. Create project case studies as child Pages of Projects and assign the Project Case Study template where needed.

See README.md in the theme package for detailed setup and developer information.

== Contact form ==

The Contact page includes a lightweight project enquiry form. Messages are sent to the WordPress Administration Email Address by default through wp_mail().

For reliable production email delivery, configure SMTP or a transactional mail service using a dedicated WordPress mail plugin/service.

== SEO ==

Buildora provides title-tag support, semantic templates, heading structure and lightweight responsive markup. Canonical URLs, Open Graph metadata and site-specific schema should be configured through a dedicated SEO plugin to avoid duplicate metadata and to keep business information outside the theme.

== Accessibility ==

Buildora includes a skip link, visible keyboard focus states, semantic landmarks, labelled form controls and reduced-motion handling. Site owners remain responsible for accessible content, alternative text, heading order and third-party plugin output.

== Changelog ==

= 1.0.0 =
* Initial public-ready release.
* Added complete homepage and inner-page design system.
* Added Services, Projects, About and Contact templates.
* Added Project Case Study template.
* Added secure project enquiry form.
* Added responsive sticky navigation and no-JS mobile menu.
* Added CI, packaging and WordPress Playground preview workflow.
