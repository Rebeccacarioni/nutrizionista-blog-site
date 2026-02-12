<?php get_header(); ?>

<main class="container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="breadcrumb">
    <a href="<?php echo home_url(); ?>">Home</a> <span>›</span> 
    <a href="<?php echo home_url('/blog'); ?>">Blog</a> <span>›</span> 
    <span>Articolo</span>
  </div>

  <article class="article" aria-label="Articolo del blog">
    <div class="head">
      <div class="feature">
        <?php if (has_post_thumbnail()) : ?>
          <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" />
        <?php endif; ?>
        <?php $cats = get_the_category(); ?>
        <?php if ($cats) : ?>
          <div class="tag">🏷️ <?php echo esc_html($cats[0]->name); ?></div>
        <?php endif; ?>
        <div class="date"><?php echo get_the_date('d/m/Y'); ?></div>
      </div>
    </div>

    <div class="content">
      <h1><?php the_title(); ?></h1>
      <div class="meta-line">
        <span class="chip">📅 <?php echo get_the_date('l j F Y'); ?></span>
        <span class="chip">🕐 Lettura: 5 min</span>
      </div>

      <hr class="sep" />

      <?php the_content(); ?>

      <hr class="sep" />

      <div style="display:flex; gap:10px; flex-wrap:wrap">
        <a class="btn" href="<?php echo home_url('/blog'); ?>">← Torna al blog</a>
        <a class="btn primary" href="<?php echo home_url('/contatti'); ?>">Contattami</a>
      </div>
    </div>
  </article>

  <?php endwhile; endif; ?>

  <h2 class="section-title">Altri articoli</h2>
  <div class="grid" aria-label="Altri articoli">
    <?php
    // Mostra 3 post recenti escludendo quello corrente
    $related = new WP_Query(array(
      'posts_per_page' => 3,
      'post__not_in' => array(get_the_ID())
    ));
    
    if ($related->have_posts()) :
      while ($related->have_posts()) : $related->the_post();
        $cats = get_the_category();
    ?>
    
    <a class="card" href="<?php the_permalink(); ?>" aria-label="Apri articolo: <?php the_title(); ?>">
      <div class="feature">
        <?php if (has_post_thumbnail()) : ?>
          <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" />
        <?php endif; ?>
        <?php if ($cats) : ?>
          <div class="tag">🏷️ <?php echo esc_html($cats[0]->name); ?></div>
        <?php endif; ?>
        <div class="date"><?php echo get_the_date('d/m/Y'); ?></div>
      </div>
      <div class="pad">
        <h3><?php the_title(); ?></h3>
        <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
        <div class="meta-line">
          <span class="chip">🕐 Lettura: 5 min</span>
          <span class="chip">📌 Articolo</span>
        </div>
        <hr class="sep" />
        <span class="btn primary">Leggi →</span>
      </div>
    </a>
    
    <?php 
      endwhile;
      wp_reset_postdata();
    endif;
    ?>
  </div>
</main>

<?php get_footer(); ?>