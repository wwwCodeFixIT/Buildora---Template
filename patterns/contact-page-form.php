<?php
/**
 * Title: Contact Page Form
 * Slug: buildora/contact-page-form
 * Categories: buildora, contact
 * Keywords: contact, form, quote, enquiry
 * Description: Accessible project enquiry form with practical contact guidance.
 */

$buildora_contact_status = isset( $_GET['contact_status'] )
	? sanitize_key( wp_unslash( $_GET['contact_status'] ) )
	: '';

$buildora_contact_messages = array(
	'success' => array(
		'type' => 'success',
		'text' => __( 'Thanks — your project brief has been sent. We will review it and come back with the next step.', 'buildora' ),
	),
	'invalid' => array(
		'type' => 'error',
		'text' => __( 'Please check the required fields and try again.', 'buildora' ),
	),
	'rate_limited' => array(
		'type' => 'error',
		'text' => __( 'That form was submitted very recently. Please wait a moment before trying again.', 'buildora' ),
	),
	'error' => array(
		'type' => 'error',
		'text' => __( 'We could not send your enquiry right now. Please try again or use the email address shown here.', 'buildora' ),
	),
);

$buildora_contact_message = $buildora_contact_messages[ $buildora_contact_status ] ?? null;
$buildora_public_email    = sanitize_email(
	apply_filters( 'buildora_contact_public_email', get_option( 'admin_email' ) )
);
$buildora_privacy_url     = get_privacy_policy_url();
?>
<!-- wp:group {"align":"full","anchor":"project-brief","className":"buildora-contact-form-section","layout":{"type":"constrained"}} -->
<div id="project-brief" class="wp-block-group alignfull buildora-contact-form-section">
	<!-- wp:group {"align":"wide","className":"buildora-contact-form-section__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide buildora-contact-form-section__inner">
		<!-- wp:group {"className":"buildora-contact-form-section__intro","layout":{"type":"default"}} -->
		<div class="wp-block-group buildora-contact-form-section__intro">
			<!-- wp:paragraph {"className":"buildora-contact-form-section__eyebrow"} -->
			<p class="buildora-contact-form-section__eyebrow"><?php esc_html_e( 'Project brief', 'buildora' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"className":"buildora-contact-form-section__title"} -->
			<h2 class="wp-block-heading buildora-contact-form-section__title"><?php esc_html_e( 'Start with the essentials.', 'buildora' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"buildora-contact-form-section__lead"} -->
			<p class="buildora-contact-form-section__lead"><?php esc_html_e( 'A useful first enquiry does not need to be a full specification. Give us enough context to understand the job, where it is and what you are trying to achieve.', 'buildora' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:html -->
		<div class="buildora-contact-layout">
			<aside class="buildora-contact-details" aria-label="<?php echo esc_attr_x( 'Contact details', 'contact page section label', 'buildora' ); ?>">
				<div class="buildora-contact-details__item">
					<span><?php esc_html_e( 'Response time', 'buildora' ); ?></span>
					<strong><?php esc_html_e( 'Usually within one business day', 'buildora' ); ?></strong>
				</div>
				<div class="buildora-contact-details__item">
					<span><?php esc_html_e( 'Best for', 'buildora' ); ?></span>
					<strong><?php esc_html_e( 'Renovation, construction and maintenance', 'buildora' ); ?></strong>
				</div>
				<?php if ( is_email( $buildora_public_email ) ) : ?>
					<div class="buildora-contact-details__item">
						<span><?php esc_html_e( 'Prefer email?', 'buildora' ); ?></span>
						<a href="mailto:<?php echo esc_attr( antispambot( $buildora_public_email ) ); ?>"><?php echo esc_html( antispambot( $buildora_public_email ) ); ?></a>
					</div>
				<?php endif; ?>
				<div class="buildora-contact-details__note">
					<strong><?php esc_html_e( 'Have drawings already?', 'buildora' ); ?></strong>
					<p><?php esc_html_e( 'Mention them in the brief. We can arrange the best way to review files after the first response.', 'buildora' ); ?></p>
				</div>
			</aside>

			<div class="buildora-contact-form-card">
				<?php if ( is_array( $buildora_contact_message ) ) : ?>
					<div
						class="buildora-contact-form__notice buildora-contact-form__notice--<?php echo esc_attr( $buildora_contact_message['type'] ); ?>"
						role="<?php echo 'error' === $buildora_contact_message['type'] ? 'alert' : 'status'; ?>"
					>
						<?php echo esc_html( $buildora_contact_message['text'] ); ?>
					</div>
				<?php endif; ?>

				<form class="buildora-contact-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
					<input type="hidden" name="action" value="buildora_contact">
					<?php echo wp_nonce_field( 'buildora_contact', 'buildora_contact_nonce', false, false ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

					<div class="buildora-contact-form__honeypot" aria-hidden="true">
						<label for="buildora-company-website"><?php esc_html_e( 'Company website', 'buildora' ); ?></label>
						<input id="buildora-company-website" type="text" name="company_website" tabindex="-1" autocomplete="off">
					</div>

					<div class="buildora-contact-form__row">
						<div class="buildora-contact-form__field">
							<label for="buildora-contact-name"><?php esc_html_e( 'Your name', 'buildora' ); ?> <span aria-hidden="true">*</span></label>
							<input id="buildora-contact-name" type="text" name="name" autocomplete="name" maxlength="120" required>
						</div>
						<div class="buildora-contact-form__field">
							<label for="buildora-contact-email"><?php esc_html_e( 'Email', 'buildora' ); ?> <span aria-hidden="true">*</span></label>
							<input id="buildora-contact-email" type="email" name="email" autocomplete="email" maxlength="190" required>
						</div>
					</div>

					<div class="buildora-contact-form__row">
						<div class="buildora-contact-form__field">
							<label for="buildora-contact-phone"><?php esc_html_e( 'Phone', 'buildora' ); ?> <span class="buildora-contact-form__optional"><?php esc_html_e( 'Optional', 'buildora' ); ?></span></label>
							<input id="buildora-contact-phone" type="tel" name="phone" autocomplete="tel" maxlength="80">
						</div>
						<div class="buildora-contact-form__field">
							<label for="buildora-contact-location"><?php esc_html_e( 'Location / postcode', 'buildora' ); ?> <span aria-hidden="true">*</span></label>
							<input id="buildora-contact-location" type="text" name="location" autocomplete="postal-code" maxlength="160" required>
						</div>
					</div>

					<div class="buildora-contact-form__field">
						<label for="buildora-contact-project-type"><?php esc_html_e( 'Type of work', 'buildora' ); ?> <span aria-hidden="true">*</span></label>
						<select id="buildora-contact-project-type" name="project_type" required>
							<option value=""><?php esc_html_e( 'Choose one', 'buildora' ); ?></option>
							<option value="renovation"><?php esc_html_e( 'Renovation', 'buildora' ); ?></option>
							<option value="construction"><?php esc_html_e( 'Construction', 'buildora' ); ?></option>
							<option value="maintenance"><?php esc_html_e( 'Repairs & maintenance', 'buildora' ); ?></option>
							<option value="other"><?php esc_html_e( 'Something else', 'buildora' ); ?></option>
						</select>
					</div>

					<div class="buildora-contact-form__field">
						<label for="buildora-contact-message"><?php esc_html_e( 'Tell us about the project', 'buildora' ); ?> <span aria-hidden="true">*</span></label>
						<textarea id="buildora-contact-message" name="message" rows="7" maxlength="5000" placeholder="<?php echo esc_attr__( 'What needs doing, your target timing and anything we should know at this stage.', 'buildora' ); ?>" required></textarea>
					</div>

					<div class="buildora-contact-form__footer">
						<p class="buildora-contact-form__privacy">
							<?php
							if ( $buildora_privacy_url ) {
								printf(
									wp_kses(
										__( 'We only use these details to respond to your enquiry. See our <a href="%s">privacy policy</a>.', 'buildora' ),
										array( 'a' => array( 'href' => array() ) )
									),
									esc_url( $buildora_privacy_url )
								);
							} else {
								esc_html_e( 'We only use these details to respond to your enquiry.', 'buildora' );
							}
							?>
						</p>
						<button class="buildora-contact-form__submit" type="submit"><?php esc_html_e( 'Send project brief', 'buildora' ); ?><span aria-hidden="true">→</span></button>
					</div>
				</form>
			</div>
		</div>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
