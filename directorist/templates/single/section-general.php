<?php
/**
 * @author  wpWax
 * @since   6.7
 * @version 6.7
 */

if ( ! defined( 'ABSPATH' ) ) exit;
?>

<div class="directorist-card directorist-card-general-section <?php echo esc_attr( $class );?>" <?php $listing->section_id( $id ); ?>>

	<div class="directorist-card__header">

		<?php switch($label){
			case "Location":
				?><h4 class="directorist-card__header--title"><?php directorist_icon( $icon );?><?php echo esc_html( "Localización" );?></h4>
				<?php break;
			case "Contact Information":
				?><h4 class="directorist-card__header--title"><?php directorist_icon( $icon );?><?php echo esc_html( "Información de Contacto" );?></h4>
				<?php break;
		}?>
	</div>

	<div class="directorist-card__body">

		<div class="directorist-details-info-wrap">
			<?php
			foreach ( $section_data['fields'] as $field ) {
				$listing->field_template( $field );
			}
			?>
		</div>

	</div>

</div>