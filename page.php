<?php get_header(); ?>
<body>
  <main class="container">
    <div class="breadcrumb">
      <a href="<?php echo home_url(); ?>">Home</a> <span>›</span> <span>Servizi</span>
    </div>

    <h2 class="section-title">Servizi</h2>
    <p class="muted" style="margin-top:0">
      Esempi (demo). Qui i tuoi studenti possono creare un custom post type “servizi” oppure restare su pagine standard.
    </p>

    <div class="grid" aria-label="Elenco servizi">
      <div class="card">
        <div class="pad">
          <h3>Prima visita</h3>
          <p>Valutazione completa + impostazione piano iniziale.</p>
          <div class="meta-line">
            <span class="chip">🧾 Anamnesi</span>
            <span class="chip">📌 Obiettivi</span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="pad">
          <h3>Controllo</h3>
          <p>Aggiustamenti pratici: porzioni, spesa, gestione fuori casa.</p>
          <div class="meta-line">
            <span class="chip">🔁 Follow-up</span>
            <span class="chip">🧠 Strategie</span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="pad">
          <h3>Sport</h3>
          <p>Timing dei nutrienti, recupero, gare, allenamenti.</p>
          <div class="meta-line">
            <span class="chip">🏃‍♀️ Performance</span>
            <span class="chip">💧 Idratazione</span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="pad">
          <h3>Educazione alimentare</h3>
          <p>Strumenti pratici: plate method, etichette, menù settimanale.</p>
          <div class="meta-line">
            <span class="chip">🥗 Pasti</span>
            <span class="chip">🛒 Spesa</span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="pad">
          <h3>Online</h3>
          <p>Consulenze in videochiamata con materiale condiviso.</p>
          <div class="meta-line">
            <span class="chip">💻 Video</span>
            <span class="chip">📄 Documenti</span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="pad">
          <h3>Abitudini</h3>
          <p>Routine, ambiente, fame/sazietà e sostenibilità nel tempo.</p>
          <div class="meta-line">
            <span class="chip">🧩 Routine</span>
            <span class="chip">✨ Sostenibile</span>
          </div>
        </div>
      </div>
    </div>

    <div style="margin-top:16px">
      <a class="btn primary" href="<?php echo home_url('/contattaci'); ?>">Prenota →</a>
    </div>
  </main>
</body>

<?php get_footer(); ?>