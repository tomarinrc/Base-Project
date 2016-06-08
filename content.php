<article>
  <section class="post-top-angle"></section>
  <section class="post-content">
    <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
      <div class="post-read-more">
        READ MORE
      </div>
    </a>
    <section class="post-bottom-angle"></section>
  <?php } else { ?>
  <section class="post-bottom-angle  post-bottom-angle-call"></section>
  <?php } ?>
</article>
