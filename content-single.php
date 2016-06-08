<article>
  <section class="post-top-angle"></section>
  <section class="post-content">
    <h2 class="post-title"><?php the_title(); ?></h2>
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
  <section class="post-bottom-angle  post-bottom-angle-call"></section>
</article>
