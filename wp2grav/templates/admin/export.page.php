<div class="wrap" id="wp2grav-export">
  <h2>WP2Grav export</h2>
  <img src="<?php echo WP_PLUGIN_URL; ?>/wp2grav/grav.png" style="float: right">
  
  <?php 
  
  $nonce = wp_nonce_field('wp2grav', '_wpnonce', true, false);
  
  if ($vars['export_directory_exists']) {
  
  ?>
  
  <form action="" method="post">
    <p>A directory containing an export already exists. Running export again will not overwrite existing files.<br />In order to generate a new export you need to delete this directory.</p>
    <input type="hidden" name="wp2grav-action" value="remove" />
    <?php echo $nonce; ?>

    <input type="submit" value="Remove" class="button action" />
  </form>
  
  <?php 
  
  }
  
  ?>

  <form action="" method="post">
    <input type="hidden" name="wp2grav-action" value="export" />
    <?php echo $nonce; ?>

    <p>Start exporting?</p>
    <input type="submit" value="Export" class="button action" />
  </form>
</div>