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
    <a class="card" href="<?php echo home_url('/plate-method'); ?>" aria-label="Apri articolo: Il Plate Method: comporre un pasto equilibrato">
      <div class="feature">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/posts/plate-method.svg" alt="Immagine in evidenza: Il Plate Method: comporre un pasto equilibrato" />
        <div class="tag">🏷️ Educazione alimentare</div>
        <div class="date">08/01/2026</div>
      </div>
      <div class="pad">
        <h3>Il Plate Method: comporre un pasto equilibrato</h3>
        <p>Un metodo semplice per bilanciare carboidrati, proteine e verdure senza contare calorie.</p>
        <div class="meta-line">
          <span class="chip">🕒 Lettura: 5 min</span>
          <span class="chip">📌 Articolo</span>
        </div>
        <hr class="sep" />
        <span class="btn primary">Leggi →</span>
      </div>
    </a>
    
    <a class="card" href="<?php echo home_url('/spuntini-intelligenti'); ?>" aria-label="Apri articolo: Spuntini intelligenti: 10 idee pratiche">
      <div class="feature">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/posts/spuntini-intelligenti.svg" alt="Immagine in evidenza: Spuntini intelligenti: 10 idee pratiche" />
        <div class="tag">🏷️ Stile di vita</div>
        <div class="date">04/01/2026</div>
      </div>
      <div class="pad">
        <h3>Spuntini intelligenti: 10 idee pratiche</h3>
        <p>Quando serve uno spuntino? Ecco idee veloci che aiutano fame e energia.</p>
        <div class="meta-line">
          <span class="chip">🕒 Lettura: 4 min</span>
          <span class="chip">📌 Articolo</span>
        </div>
        <hr class="sep" />
        <span class="btn primary">Leggi →</span>
      </div>
    </a>
    
    <a class="card" href="<?php echo home_url('/idratazione'); ?>" aria-label="Apri articolo: Idratazione: quanta acqua serve davvero?">
      <div class="feature">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/posts/idratazione.svg" alt="Immagine in evidenza: Idratazione: quanta acqua serve davvero?" />
        <div class="tag">🏷️ Benessere</div>
        <div class="date">28/12/2025</div>
      </div>
      <div class="pad">
        <h3>Idratazione: quanta acqua serve davvero?</h3>
        <p>Sete, colore delle urine e falsi miti: una guida semplice all'acqua quotidiana.</p>
        <div class="meta-line">
          <span class="chip">🕒 Lettura: 6 min</span>
          <span class="chip">📌 Articolo</span>
        </div>
        <hr class="sep" />
        <span class="btn primary">Leggi →</span>
      </div>
    </a>
    
    <a class="card" href="<?php echo home_url('/fibre'); ?>" aria-label="Apri articolo: Fibre: perché sono importanti e come aumentarle senza stress">
      <div class="feature">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/posts/fibre.svg" alt="Immagine in evidenza: Fibre: perché sono importanti e come aumentarle senza stress" />
        <div class="tag">🏷️ Educazione alimentare</div>
        <div class="date">20/12/2025</div>
      </div>
      <div class="pad">
        <h3>Fibre: perché sono importanti e come aumentarle senza stress</h3>
        <p>Le fibre aiutano intestino, sazietà e glicemia: piccoli passi per mangiarne di più.</p>
        <div class="meta-line">
          <span class="chip">🕒 Lettura: 5 min</span>
          <span class="chip">📌 Articolo</span>
        </div>
        <hr class="sep" />
        <span class="btn primary">Leggi →</span>
      </div>
    </a>
  </div>
</main>

<?php get_footer(); ?>