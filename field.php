<?php

$attrs_string = ' ';
foreach( array( 'min', 'max', 'step', ) as $attr ){
	if( isset( $field[ 'config'][ $attr ] ) ){
		$attrs_string .= ' ' . $attr .'="' . esc_attr( $field[ 'config'][ $attr ] ) . '"';
	}
}

?>
<?php echo $wrapper_before; ?>
<?php echo $field_label; ?>
<?php echo $field_before; ?>
		<input <?php echo $field_placeholder; ?> type="number" data-field="<?php echo esc_attr( $field_base_id ); ?>" class="<?php echo esc_attr( $field_class ); ?>" id="<?php echo esc_attr( $field_id ); ?>" name="<?php echo esc_attr( $field_name ); ?>" value="<?php echo esc_attr( $field_value ); ?>" <?php echo $field_required; ?> <?php echo $field_structure['aria']; ?> <?php echo $attrs_string; ?> >
<?php echo $field_caption; ?>
<?php echo $field_after; ?>
<?php echo $wrapper_after; ?>