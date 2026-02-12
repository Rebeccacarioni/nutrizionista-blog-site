<?php get_header(); ?>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Chi sono — Dott.ssa Sofia Rinaldi</title>
  <meta name="description" content="Chi sono e metodo di lavoro (demo)." />
  <link rel="icon" href="assets/favicon.svg" type="image/svg+xml" />
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <main class="container">
    <div class="breadcrumb">
      <a href="<?php echo home_url(); ?>">Home</a> <span>›</span> <span>Chi sono</span>
    </div>

    <h2 class="section-title">Chi sono</h2>

    <div class="split">
      <section class="panel">
        <div class="kicker"><span class="dot" aria-hidden="true"></span> (Sito demo per esercitazione)</div>
        <h1 style="margin-top:14px">Dott.ssa Sofia Rinaldi</h1>
        <p class="muted">
          Mi occupo di educazione alimentare e percorsi personalizzati. L’idea è lavorare su <strong>abitudini</strong>,
          contesto e strategie che restano anche quando la motivazione cala.
        </p>
        <p class="muted">
          Niente “tutto o niente”: si parte da ciò che è realistico e si costruisce progressivamente.
        </p>
        <div class="hero-actions" style="margin-top:12px">
          <a class="btn primary" href="<?php echo home_url('/contattaci'); ?>">Contattami</a>
          <a class="btn" href="<?php echo home_url('/servizi'); ?>">Vedi servizi</a>
        </div>
      </section>

      <aside class="panel">
        <h3 style="margin:0 0 10px; color:var(--primary)">Metodo in 4 passi</h3>
        <ol class="muted" style="margin:0; padding-left:18px; display:grid; gap:10px">
          <li>Obiettivi chiari (e misurabili)</li>
          <li>Routine e pianificazione</li>
          <li>Pasto bilanciato “tipo”</li>
          <li>Follow-up e aggiustamenti</li>
        </ol>

        <hr class="sep" />

        <div class="pill">Nota per WordPress</div>
        <p class="muted" style="margin-top:10px">
          Questa pagina è un ottimo esempio di <em>page.php</em> con layout a due colonne.
        </p>
      </aside>
    </div>
  </main>

</body>

<?php get_footer(); ?>