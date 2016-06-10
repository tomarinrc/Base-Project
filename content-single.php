<article>
  <section class="post-top-angle"></section>
  <section class="post-content">
    <h1 class="post-title"><?php the_title(); ?></h1>
    <span class="post-date"><?php the_date(); ?></span>
    <?php if ( has_post_thumbnail() ) { ?>
      <figure class="post-featured">
        <?php the_post_thumbnail(); ?>
        <figcaption>
        </figcaption>
      </figure>
    <?php } ?>
    <?php if ( get_post_custom_values('TLDR') ) { ?>
      <a href="#TLDR" class="post-tldr-link">View TL:DR</a>
    <?php } ?>
    <div class="post-copy">
      <?php the_content(' '); ?>
    </div>
    <?php if ( get_post_custom_values('TLDR') ) { ?>
      <div id="TLDR" class="post-tldr">
        <h2>TL:DR</h2>
        <span><?php echo get_post_meta($post->ID, 'TLDR', true) ?></span>
      </div>
    <?php } ?>
  </section>
  <section class="post-bottom-angle  post-bottom-angle-call"></section>
</article>
