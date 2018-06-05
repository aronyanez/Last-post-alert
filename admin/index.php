<?php

add_action( 'admin_menu', 'LPA_create_admin_menu');
add_action('admin_init','LPA_settings');
add_action( 'admin_enqueue_scripts', 'LPA_styles_admin' );


function LPA_styles_admin() {
	wp_enqueue_style( 'wp-color-picker');
	wp_enqueue_style( 'wp-color-picker' ); 
	wp_enqueue_script( 'custom-script-admin', plugins_url( 'last-post-alert/admin/js/script.js' ), array( 'wp-color-picker' ), false, true );
  wp_enqueue_style( 'style-custom', plugins_url( 'last-post-alert/admin/css/style.css' ) );
  wp_enqueue_style( 'wp-color-picker'); 

}




function LPA_create_admin_menu() {

	add_menu_page (
		'LPA Plugin', 'LPA Plugin', 'administrator', 'LPA_opciones', 'LPA_create_admin_menu_function', '
		dashicons-align-center' );

}

function LPA_create_admin_menu_function() {
	?>
	<div class='wrap'>
		<h2>  <?= _e('Alert settings','last-post-alert'); ?></h2>
		<form action="options.php" method="POST">
			<?php
			settings_fields('LPA_group');
			do_settings_sections('LPA_group');
			?>
      <label><?= _e('Background color','last-post-alert');  ?></label>
      <input type="text"
      name="LPA_color" class="color" 
      id="LPA_color"
      value="<?= get_option('LPA_color'); ?>">
      <label><?= _e('Font color','last-post-alert');  ?></label>
      <input type="text"
      name="LPA_Fontcolor" class="color" 
      id="LPA_Fontcolor"
      value="<?= get_option('LPA_Fontcolor'); ?>">
      <br>
      <label><?= _e('Animation','last-post-alert');  ?></label>
      <select name="LPA_animationin" >
        <optgroup label="Attention Seekers">

          <option <?php if ( get_option('LPA_animationin') == 'bounce' ) echo 'selected="selected"'; ?> value="bounce">bounce</option>
          <option <?php if ( get_option('LPA_animationin') == 'flash' ) echo 'selected="selected"'; ?> value="flash">flash</option>
          <option <?php if ( get_option('LPA_animationin') == 'pulse' ) echo 'selected="selected"'; ?> value="pulse">pulse</option>
          <option <?php if ( get_option('LPA_animationin') == 'rubberBand' ) echo 'selected="selected"'; ?> value="rubberBand">rubberBand</option>
          <option <?php if ( get_option('LPA_animationin') == 'shake' ) echo 'selected="selected"'; ?> value="shake">shake</option>
          <option <?php if ( get_option('LPA_animationin') == 'swing' ) echo 'selected="selected"'; ?> value="swing">swing</option>
          <option <?php if ( get_option('LPA_animationin') == 'tada' ) echo 'selected="selected"'; ?> value="tada">tada</option>
          <option <?php if ( get_option('LPA_animationin') == 'wooble' ) echo 'selected="selected"'; ?> value="wobble">wobble</option>
          <option <?php if ( get_option('LPA_animationin') == 'jello' ) echo 'selected="selected"'; ?> value="jello">jello</option>

        </optgroup>

        <optgroup label="Bouncing Entrances">
          <option <?php if ( get_option('LPA_animationin') == 'bounceIn' ) echo 'selected="selected"'; ?> value="bounceIn">bounceIn</option>
          <option <?php if ( get_option('LPA_animationin') == 'bounceInDown' ) echo 'selected="selected"'; ?> value="bounceInDown">bounceInDown</option>
          <option <?php if ( get_option('LPA_animationin') == 'bounceInLeft' ) echo 'selected="selected"'; ?> value="bounceInLeft">bounceInLeft</option>
          <option <?php if ( get_option('LPA_animationin') == 'bounceInRight' ) echo 'selected="selected"'; ?> value="bounceInRight">bounceInRight</option>
          <option <?php if ( get_option('LPA_animationin') == 'bounceInUp' ) echo 'selected="selected"'; ?> value="bounceInUp">bounceInUp</option>
        </optgroup>


        <optgroup label="Fading Entrances">
          <option <?php if ( get_option('LPA_animationin') == 'fadeIn' ) echo 'selected="selected"'; ?> value="fadeIn">fadeIn</option>
          <option <?php if ( get_option('LPA_animationin') == 'fadeInDown' ) echo 'selected="selected"'; ?> value="fadeInDown">fadeInDown</option>
          <option <?php if ( get_option('LPA_animationin') == 'fadeInDownBig' ) echo 'selected="selected"'; ?> value="fadeInDownBig">fadeInDownBig</option>
          <option <?php if ( get_option('LPA_animationin') == 'fadeInLeft' ) echo 'selected="selected"'; ?> value="fadeInLeft">fadeInLeft</option>
          <option <?php if ( get_option('LPA_animationin') == 'fadeInLeftBig' ) echo 'selected="selected"'; ?> value="fadeInLeftBig">fadeInLeftBig</option>
          <option <?php if ( get_option('LPA_animationin') == 'fadeInRight' ) echo 'selected="selected"'; ?> value="fadeInRight">fadeInRight</option>
          <option <?php if ( get_option('LPA_animationin') == 'fadeInRightBig' ) echo 'selected="selected"'; ?> value="fadeInRightBig">fadeInRightBig</option>
          <option <?php if ( get_option('LPA_animationin') == 'fadeInUp' ) echo 'selected="selected"'; ?> value="fadeInUp">fadeInUp</option>
          <option <?php if ( get_option('LPA_animationin') == 'fadeInUpBig' ) echo 'selected="selected"'; ?> value="fadeInUpBig">fadeInUpBig</option>
        </optgroup>



        <optgroup label="Lightspeed">
          <option <?php if ( get_option('LPA_animationin') == 'lightSpeedIn' ) echo 'selected="selected"'; ?> value="lightSpeedIn">lightSpeedIn</option>
          <option <?php if ( get_option('LPA_animationin') == 'lightSpeedOut' ) echo 'selected="selected"'; ?> value="lightSpeedOut">lightSpeedOut</option>
        </optgroup>



        
        
        <optgroup label="Zoom Entrances">
          <option <?php if ( get_option('LPA_animationin') == 'zoomIn' ) echo 'selected="selected"'; ?> value="zoomIn">zoomIn</option>
          <option <?php if ( get_option('LPA_animationin') == 'zoomInDown' ) echo 'selected="selected"'; ?> value="zoomInDown">zoomInDown</option>
          <option <?php if ( get_option('LPA_animationin') == 'zoomInLeft' ) echo 'selected="selected"'; ?> value="zoomInLeft">zoomInLeft</option>
          <option <?php if ( get_option('LPA_animationin') == 'zoomInRight' ) echo 'selected="selected"'; ?> value="zoomInRight">zoomInRight</option>
          <option <?php if ( get_option('LPA_animationin') == 'zoomInUp' ) echo 'selected="selected"'; ?> value="zoomInUp">zoomInUp</option>
        </optgroup>
        
        
      </select>
        
      <label><?= _e('Exit animation','last-post-alert');  ?></label>
      <select name="LPA_animationout" >
       <optgroup label="Bouncing Exits">
        <option  <?php if ( get_option('LPA_animationout') == 'bounceOut' ) echo 'selected="selected"'; ?> value="bounceOut">bounceOut</option>
        <option <?php if ( get_option('LPA_animationout') == 'bounceOutDown' ) echo 'selected="selected"'; ?>   value="bounceOutDown">bounceOutDown</option>
        <option <?php if ( get_option('LPA_animationout') == 'bounceOutLeft' ) echo 'selected="selected"'; ?>  value="bounceOutLeft">bounceOutLeft</option>
        <option <?php if ( get_option('LPA_animationout') == 'bounceOutRight' ) echo 'selected="selected"'; ?>  value="bounceOutRight">bounceOutRight</option>
        <option <?php if ( get_option('LPA_animationout') == 'bounceOutUp' ) echo 'selected="selected"'; ?>  value="bounceOutUp">bounceOutUp</option>
      </optgroup>

    </select>


    <?= submit_button(); ?>
  </form>

   <h3 class="credits"><?= _e('Plugin by','last-post-alert');  ?>
     <a href="https://markdevs.com">Arón Yáñez</a>
   </h3>
</div>

<?php

}

function LPA_settings(){
  $args = array(
    'type' => 'string', 
    'sanitize_callback' => 'sanitize_text_field',
    'default' => NULL,
  );

  register_setting('LPA_group','LPA_color',$args);
  register_setting('LPA_group','LPA_Fontcolor',$args);
  register_setting('LPA_group','LPA_text',$args);
  register_setting('LPA_group','LPA_animationin',$args);
  register_setting('LPA_group','LPA_animationout',$args);
}

