<?php get_header(); ?>

<main class="container">
  <div class="breadcrumb">
    <a href="<?php echo home_url(); ?>">Home</a> <span>›</span> <span>Blog</span>
  </div>

  <h2 class="section-title">Blog</h2>
  <p class="muted" style="margin-top:0">
    Archivio articoli (demo): ogni articolo ha <strong>immagine in evidenza</strong>, categoria e data.
  </p>

  <div class="grid" aria-label="Elenco articoli">
    <?php if (have_posts()): ?>

      <?php while (have_posts()) : the_post();
        get_template_part('partials/post');
      endwhile;
      ?>
      <?php else: ?>
        <p>Nessun articolo pubblicato.</p>
      <?php endif; ?>
  
  </div>
</main>

<?php get_footer(); ?>