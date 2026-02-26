<?php get_header(); ?>

<section class="hero" aria-label="Hero">
  <div class="container hero-wrap">
    <div class="hero-copy">
      <div class="kicker"><span class="dot" aria-hidden="true"></span> Consulenze in studio e online</div>
      <h1>Una nutrizione che si adatta a te, non il contrario.</h1>
      <p class="lead">
        Lavoriamo su abitudini, organizzazione dei pasti e scelte consapevoli.
        Obiettivo: risultati sostenibili, senza estremismi.
      </p>
      <div class="hero-actions">
        <a class="btn primary" href="<?php echo home_url('/contattaci'); ?>">Prenota una consulenza</a>
        <a class="btn" href="<?php echo home_url('/blog'); ?>">Leggi il blog</a>
        <a class="btn" href="<?php echo home_url('/servizi'); ?>">Servizi</a>
      </div>
    </div>

    <aside class="hero-media" aria-label="Immagine e punti chiave">
      <div class="img">
        <?php the_post_thumbnail(); ?>
      </div>
      <div class="facts">
        <div class="pill">Approccio pratico</div>
        <div class="fact">✅ Educazione alimentare (strategie, porzioni, spesa)</div>
        <div class="fact">✅ Percorsi personalizzati e flessibili</div>
        <div class="fact">✅ Supporto nel tempo con follow-up</div>
      </div>
    </aside>
  </div>
</section>

<main class="container">
  <h2 class="section-title">In cosa posso aiutarti</h2>
  <p class="muted" style="margin-top:0">Sezioni pensate per diventare template WordPress (page, archive, single).</p>

  <div class="grid" aria-label="Servizi principali">
    <div class="card">
      <div class="pad">
        <h3>Prima visita</h3>
        <p>Analisi abitudini, obiettivi, preferenze e piano iniziale.</p>
        <div class="meta-line">
          <span class="chip">🧑‍⚕️ Valutazione</span>
          <span class="chip">🧾 Materiale</span>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="pad">
        <h3>Follow-up</h3>
        <p>Controlli periodici: aggiustamenti e supporto pratico.</p>
        <div class="meta-line">
          <span class="chip">🔁 Routine</span>
          <span class="chip">📈 Progressi</span>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="pad">
        <h3>Nutrizione sportiva</h3>
        <p>Timing dei pasti, energia, recupero e performance.</p>
        <div class="meta-line">
          <span class="chip">🏃‍♀️ Energia</span>
          <span class="chip">💪 Recupero</span>
        </div>
      </div>
    </div>
  </div>

  <h2 class="section-title">Ultimi articoli dal blog</h2>
  <div class="grid" aria-label="Ultimi articoli">
    <?php
      $query = new WP_Query(['posts_per_page' => 3]);
      ?>

      <?php if ($query->have_posts()) : ?>
        <?php  while ($query->have_posts()): $query->the_post();
          get_template_part('partials/post');
        endwhile; ?>
      <?php else: ?>
        <p>Nessun articolo pubblicato.</p>
      <?php endif; ?>
  </div>

  <div style="margin-top:16px">
    <a class="btn" href="<?php echo home_url('/blog'); ?>">Vai al blog →</a>
  </div>
</main>

<?php get_footer(); ?>