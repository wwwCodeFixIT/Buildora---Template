<?php
/**
 * Title: Contact Page Form
 * Slug: lexora/contact-page-form
 * Categories: lexora, contact
 * Keywords: contact, consultation, legal, enquiry
 * Description: Accessible legal consultation enquiry form with practical contact guidance.
 */

$lexora_contact_status = isset( $_GET['contact_status'] )
	? sanitize_key( wp_unslash( $_GET['contact_status'] ) )
	: '';

$lexora_contact_messages = array(
	'success' => array(
		'type' => 'success',
		'text' => __( 'Thanks — your consultation request has been sent. We will review it and come back with the next step.', 'lexora' ),
	),
	'invalid' => array(
		'type' => 'error',
		'text' => __( 'Please check the required fields and try again.', 'lexora' ),
	),
	'rate_limited' => array(
		'type' => 'error',
		'text' => __( 'That form was submitted very recently. Please wait a moment before trying again.', 'lexora' ),
	),
	'error' => array(
		'type' => 'error',
		'text' => __( 'We could not send your enquiry right now. Please try again later or use another published contact method.', 'lexora' ),
	),
);

$lexora_contact_message = $lexora_contact_messages[ $lexora_contact_status ] ?? null;
$lexora_public_email    = sanitize_email(
	apply_filters( 'lexora_contact_public_email', '' )
);
$lexora_privacy_url     = get_privacy_policy_url();
?>
<!-- wp:group {"align":"full","anchor":"consultation","className":"buildora-contact-form-section","layout":{"type":"constrained"}} -->
<div id="consultation" class="wp-block-group alignfull buildora-contact-form-section">
	<!-- wp:group {"align":"wide","className":"buildora-contact-form-section__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide buildora-contact-form-section__inner">
		<!-- wp:group {"className":"buildora-contact-form-section__intro","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-contact-form-section__intro">
			<!-- wp:paragraph {"className":"buildora-contact-form-section__eyebrow"} --><p class="buildora-contact-form-section__eyebrow"><?php esc_html_e( 'Consultation request', 'lexora' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"className":"buildora-contact-form-section__title"} --><h2 class="wp-block-heading buildora-contact-form-section__title"><?php esc_html_e( 'Start with the essentials.', 'lexora' ); ?></h2><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"buildora-contact-form-section__lead"} --><p class="buildora-contact-form-section__lead"><?php esc_html_e( 'A useful first enquiry does not need every document or detail. Give us enough context to understand the legal issue, the jurisdiction and whether there is an urgent deadline.', 'lexora' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:html -->
		<div class="buildora-contact-layout">
			<aside class="buildora-contact-details" aria-label="<?php echo esc_attr_x( 'Contact details', 'contact page section label', 'lexora' ); ?>">
				<div class="buildora-contact-details__item">
					<span><?php esc_html_e( 'Response time', 'lexora' ); ?></span>
					<strong><?php esc_html_e( 'Usually within one business day', 'lexora' ); ?></strong>
				</div>
				<div class="buildora-contact-details__item">
					<span><?php esc_html_e( 'Best for', 'lexora' ); ?></span>
					<strong><?php esc_html_e( 'Business, disputes, family and property matters', 'lexora' ); ?></strong>
				</div>
				<?php if ( is_email( $lexora_public_email ) ) : ?>
					<div class="buildora-contact-details__item">
						<span><?php esc_html_e( 'Prefer email?', 'lexora' ); ?></span>
						<a href="mailto:<?php echo esc_attr( antispambot( $lexora_public_email ) ); ?>"><?php echo esc_html( antispambot( $lexora_public_email ) ); ?></a>
					</div>
				<?php endif; ?>
				<div class="buildora-contact-details__note">
					<strong><?php esc_html_e( 'Before sending documents', 'lexora' ); ?></strong>
					<p><?php esc_html_e( 'Please wait until the firm confirms that it can consider your matter before sharing confidential or sensitive files.', 'lexora' ); ?></p>
				</div>
			</aside>

			<div class="buildora-contact-form-card">
				<?php if ( is_array( $lexora_contact_message ) ) : ?>
					<div class="buildora-contact-form__notice buildora-contact-form__notice--<?php echo esc_attr( $lexora_contact_message['type'] ); ?>" role="<?php echo 'error' === $lexora_contact_message['type'] ? 'alert' : 'status'; ?>">
						<?php echo esc_html( $lexora_contact_message['text'] ); ?>
					</div>
				<?php endif; ?>

				<form class="buildora-contact-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
					<input type="hidden" name="action" value="lexora_contact">
					<?php echo wp_nonce_field( 'lexora_contact', 'lexora_contact_nonce', false, false ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

					<div class="buildora-contact-form__honeypot" aria-hidden="true">
						<label for="lexora-company-website"><?php esc_html_e( 'Company website', 'lexora' ); ?></label>
						<input id="lexora-company-website" type="text" name="company_website" tabindex="-1" autocomplete="off">
					</div>

					<div class="buildora-contact-form__row">
						<div class="buildora-contact-form__field">
							<label for="lexora-contact-name"><?php esc_html_e( 'Your name', 'lexora' ); ?> <span aria-hidden="true">*</span></label>
							<input id="lexora-contact-name" type="text" name="name" autocomplete="name" maxlength="120" required>
						</div>
						<div class="buildora-contact-form__field">
							<label for="lexora-contact-email"><?php esc_html_e( 'Email', 'lexora' ); ?> <span aria-hidden="true">*</span></label>
							<input id="lexora-contact-email" type="email" name="email" autocomplete="email" maxlength="190" required>
						</div>
					</div>

					<div class="buildora-contact-form__row">
						<div class="buildora-contact-form__field">
							<label for="lexora-contact-phone"><?php esc_html_e( 'Phone', 'lexora' ); ?> <span class="buildora-contact-form__optional"><?php esc_html_e( 'Optional', 'lexora' ); ?></span></label>
							<input id="lexora-contact-phone" type="tel" name="phone" autocomplete="tel" maxlength="80">
						</div>
						<div class="buildora-contact-form__field">
							<label for="lexora-contact-location"><?php esc_html_e( 'Jurisdiction / location', 'lexora' ); ?> <span aria-hidden="true">*</span></label>
							<input id="lexora-contact-location" type="text" name="location" maxlength="160" required>
						</div>
					</div>

					<div class="buildora-contact-form__field">
						<label for="lexora-contact-matter-type"><?php esc_html_e( 'Type of legal matter', 'lexora' ); ?> <span aria-hidden="true">*</span></label>
						<select id="lexora-contact-matter-type" name="matter_type" required>
							<option value=""><?php esc_html_e( 'Choose one', 'lexora' ); ?></option>
							<option value="business"><?php esc_html_e( 'Business / commercial law', 'lexora' ); ?></option>
							<option value="dispute"><?php esc_html_e( 'Dispute / litigation', 'lexora' ); ?></option>
							<option value="private"><?php esc_html_e( 'Family / property / private client', 'lexora' ); ?></option>
							<option value="other"><?php esc_html_e( 'Something else', 'lexora' ); ?></option>
						</select>
					</div>

					<div class="buildora-contact-form__field">
						<label for="lexora-contact-message"><?php esc_html_e( 'Tell us about the matter', 'lexora' ); ?> <span aria-hidden="true">*</span></label>
						<textarea id="lexora-contact-message" name="message" rows="7" maxlength="5000" placeholder="<?php echo esc_attr__( 'What has happened, what outcome you need and whether there is an urgent deadline.', 'lexora' ); ?>" required></textarea>
					</div>

					<div class="buildora-contact-form__footer">
						<p class="buildora-contact-form__privacy">
							<?php
							if ( $lexora_privacy_url ) {
								printf(
									wp_kses(
										__( 'We only use these details to review and respond to your enquiry. See our <a href="%s">privacy policy</a>.', 'lexora' ),
										array( 'a' => array( 'href' => array() ) )
									),
									esc_url( $lexora_privacy_url )
								);
							} else {
								esc_html_e( 'We only use these details to review and respond to your enquiry.', 'lexora' );
							}
							?>
						</p>
						<button class="buildora-contact-form__submit" type="submit"><?php esc_html_e( 'Request consultation', 'lexora' ); ?><span aria-hidden="true">→</span></button>
					</div>
				</form>
			</div>
		</div>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
