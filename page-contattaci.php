<?php get_header(); ?>

  <main class="container">
    <div class="breadcrumb">
      <a href="<?php echo home_url(); ?>">Home</a> <span>›</span> <span>Contatti</span>
    </div>

    <h2 class="section-title">Contatti</h2>

    <div class="split">
      <section class="panel">
        <h3 style="margin:0 0 8px; color:var(--primary)">Scrivimi</h3>
        <p class="muted" style="margin-top:0">
          Sito statico: per inviare un messaggio usa i contatti o il form <em>mailto</em> (dipende dal client email).
        </p>

        <div class="meta-line" style="margin-top:14px">
          <span class="chip">☎️ +39 06 9876 5432</span>
          <a class="chip" href="mailto:info@studionutrizione.it?subject=Richiesta%20dal%20sito">✉️ info@studionutrizione.it</a>
          <span class="chip">📍 Via della Salute 10, Roma</span>
        </div>

        <hr class="sep" />

        <form class="form" action="mailto:info@studionutrizione.it" method="post" enctype="text/plain">
          <div>
            <label for="nome">Nome</label>
            <input id="nome" name="Nome" placeholder="Es. Anna" />
          </div>
          <div>
            <label for="email">Email</label>
            <input id="email" name="Email" type="email" placeholder="Es. anna@email.it" />
          </div>
          <div>
            <label for="messaggio">Messaggio</label>
            <textarea id="messaggio" name="Messaggio" placeholder="Scrivi qui..."></textarea>
          </div>
          <button class="btn primary" type="submit">Apri email →</button>
        </form>
      </section>

      <aside class="panel">
        <h3 style="margin:0 0 10px; color:var(--primary)">Dove trovarmi</h3>
        <div style="border-radius:16px; overflow:hidden; border:1px solid rgba(15,23,42,.10)">
          <iframe
            title="Mappa Studio di Nutrizione"
            width="100%"
            height="320"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            src="https://www.openstreetmap.org/export/embed.html?bbox=12.483%2C41.893%2C12.503%2C41.903&layer=mapnik">
          </iframe>
        </div>
        <p class="small muted" style="margin-top:10px">
          (Coordinate demo: sostituisci il link con la posizione reale.)
        </p>
        <hr class="sep" />
        <div class="pill">Orari</div>
        <p class="muted" style="margin:10px 0 0">Lun–Ven 09:00–19:00 (su appuntamento)</p>
        <p class="muted" style="margin:6px 0 0">Online: orari flessibili</p>
      </aside>
    </div>
  </main>

<?php get_footer(); ?>