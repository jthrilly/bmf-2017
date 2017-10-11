<div class="side-nav" id="sidebar" role="navigation">
  <?php include('logo.php'); ?>
	<h1>Our Pages</h1>
        <?php
        wp_nav_menu( array(
            'menu'              => 'primary',
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'ul',
            'container_class'   => 'nav',
            'container_id'      => '',
            'menu_class'        => 'nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
        );
        ?>
</div>
