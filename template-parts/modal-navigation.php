<div class="modal fade" id="nav-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
         <div class="modal-header">
        <a class="fa fa-close fa-5x" data-dismiss="modal"></a>
        </div>
        <div class="menu-primary">
           <?php
            wp_nav_menu( array(
                'menu'              => '',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => '',
                'container_class'   => 'nvbar',
                'container_id'      => 'full-screen',
                'menu_class'        => 'nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
            ?>
             </div>
    </div>
  </div>
</div><!-- End Modal -->
