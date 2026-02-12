<?php
/**
* Template per la sidebar
*/
?>

      <aside class="hero-media" aria-label="Immagine e punti chiave">
        <div class="img">
          <img src="<?php echo bloginfo("template_url"); ?>/assets/img/hero-photo.svg" alt="Illustrazione: nutrizione e piatto bilanciato" />
        </div>
        <div class="facts">
          <div class="pill">Approccio pratico</div>
          <div class="fact">✅ Educazione alimentare (strategie, porzioni, spesa)</div>
          <div class="fact">✅ Percorsi personalizzati e flessibili</div>
          <div class="fact">✅ Supporto nel tempo con follow-up</div>
        </div>
      </aside>

<?php /**
 * <aside class="sidebar">
* <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
* <?php else : ?>
 * <?php dynamic_sidebar( 'sidebar-1' ); ?>


  * <section class="sidebar-section">
   *  <h3>Chi siamo</h3>
    * <p>Un blog di prova usato per esercitarsi con i temi WordPress.</p>
 *  </section>

  * <section class="sidebar-section">
   *  <h3>Categorie</h3>
    * <ul>
     *  <?php wp_list_categories( array(
      *   'title_li' => '',
  *     ) ); ?>
 *    </ul>
 *  </section>


*   <section class="sidebar-section">
*     <h3>Articoli recenti</h3>
*     <ul>
 *      <?php
*       $recent = new WP_Query( array(
*         'posts_per_page' => 5,
*       ) );
*       if ( $recent->have_posts() ) :
*         while ( $recent->have_posts() ) : $recent->the_post(); ?>
 *          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
*         <?php endwhile;
*         wp_reset_postdata();
*       endif;
*       ?>
*     </ul>
*   </section>


*   <section class="sidebar-section">
*     <h3>Cerca</h3>
*     <?php get_search_form(); ?>
*   </section>


* <?php endif; ?>

*</aside>

 */
?>