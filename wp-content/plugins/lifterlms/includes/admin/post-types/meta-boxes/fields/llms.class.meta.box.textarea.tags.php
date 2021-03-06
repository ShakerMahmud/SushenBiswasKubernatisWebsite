<?php
/**
 * Metabox Field: Textarea with Tags
 *
 * @since Unknown
 * @version Unknown
 */

defined( 'ABSPATH' ) || exit;

/**
 * LLMS_Metabox_Textarea_W_Tags_Field
 *
 * @since Unknown
 */
class LLMS_Metabox_Textarea_W_Tags_Field extends LLMS_Metabox_Field implements Meta_Box_Field_Interface {

	/**
	 * Class constructor
	 *
	 * @param array $_field Array containing information about field
	 */
	public function __construct( $_field ) {

		$this->field = $_field;
	}

	/**
	 * outputs the Html for the given field
	 *
	 * @return void
	 */
	public function output() {

		global $post;

		parent::output(); ?>

		<textarea name="<?php echo $this->field['id']; ?>" id="<?php echo $this->field['id']; ?>" cols="60" rows="4"><?php echo $this->meta; ?></textarea>
		<br /><span class="description"><?php echo $this->field['desc']; ?></span>
		<?php
		parent::close_output();
	}
}

