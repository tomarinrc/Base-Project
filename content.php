<article>
  <section class="post-top-angle"></section>
  <section class="post-content">
    <div class="post-title"><?php if ( get_post_custom_values('post-number') ) { ?><?php echo get_post_meta($post->ID, 'post-number', true); ?>&nbsp;|&nbsp;<?php } ?><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
    <span class="post-date"><?php the_date(); ?> <span class="post-author">by <?php the_author(); ?></span></span>
    <?php if ( has_post_thumbnail() ) { ?>
      <figure class="post-featured">
        <?php the_post_thumbnail(); ?>
        <figcaption>
        </figcaption>
      </figure>
    <?php } ?>
    <div class="post-copy">
      <?php the_content(' '); ?>
    </div>
  </section>
  <?php if ($pos=strpos($post->post_content, '<!--more-->')) { ?>
    <section class="post-top-angle post-top-angle-call"></section>
    <a href="<?php the_permalink() ?>" class="post-read-more-link">
      <div class="post-read-more post-read-more-effect" data-letters="Let's Go!">
        READ MORE
      </div>
    </a>
    <section class="post-bottom-angle"></section>
  <?php } else { ?>
    <section class="post-top-angle midblue"></section>
    <a href="<?php the_permalink() ?>" class="post-read-more-link">
      <div class="post-read-more post-read-more-effect midblue" data-letters="Woo Let's Talk!">
        Discuss
      </div>
    </a>
    <section class="post-bottom-angle midblue"></section>
  <?php } ?>
</article>
