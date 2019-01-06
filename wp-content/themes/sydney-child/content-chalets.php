<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php do_action('sydney_inside_top_post'); ?>

  <?php if ( has_post_thumbnail() && ( get_theme_mod( 'post_feat_image' ) != 1 ) ) : ?>
    <div class="entry-thumb">
      <?php the_post_thumbnail('sydney-medium-thumb'); ?>
    </div>
  <?php endif; ?>

  <header class="entry-header">
    <?php the_title( '<h1 class="title-post entry-title">', '</h1>' ); ?>

    <?php /*if (get_theme_mod('hide_meta_single') != 1 ) : ?>
    <div class="meta-post">
      <?php sydney_posted_on(); ?>
    </div><!-- .entry-meta -->
    <?php endif;*/ ?>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php the_content(); ?>
    <?php
      wp_link_pages( array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'sydney' ),
        'after'  => '</div>',
      ) );
    ?>
  </div><!-- .entry-content -->

  <!-- champs supplémentaires -->
  <div class="acf-fields">
    <div><hr></div>

    <div class="chalets-infos" id="capacite">
      <h6><strong>Capacité</strong></h6>
      <?php the_field( 'capacite' ); ?>
    </div>

    <div class="chalets-infos" id="equipements">
      <h6><strong>Equipements</strong></h6>
      <?php the_field( 'equipements' ); ?>
    </div>

    <div class="chalets-infos" id="plus_dinfos">
      <h6><strong>Plus d'informations</strong></h6>
      <?php the_field( 'plus_dinformations' ); ?>
    </div>
  </div>

  <footer class="entry-footer">
    <?php sydney_entry_footer(); ?>
  </footer><!-- .entry-footer -->

  <?php do_action('sydney_inside_bottom_post'); ?>

</article><!-- #post-## -->