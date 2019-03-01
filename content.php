<main class="Main"> 
  <article class="c_contenedor">
    
    <div class="c_contenedor row justify-content-md-center">

      <?php if(have_posts()):while(have_posts()):the_post(); ?>
      <div>
        <div>
          <div class="c_malla-cajas">
            <div>
              <img class="c_imagen-caja" src="<?php echo get_the_post_thumbnail_url();?>" class="card-img-top" alt="<?php echo get_the_title(); ?>">
              <div class="card-body">
                <p>
                  <?php the_time(get_option('date_format')); ?>
                </p>
                <ul>
                  <a href="<?php the_permalink(); ?>">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                  </a>
                  <hr>
                </ul>
              
                <p class="card-text">
                  
                  <?php the_category(','); ?>
                </p>
              </div>  
            </div>
          </div>
          <!--<div class="the-content">
              <?php the_content(); ?>
              <?php the_excerpt(); ?>
              <p><?php the_tags(); ?></p>
          </div> -->
        </div>        
        <?php endwhile; else: ?>
        <p>En contenido no existe</p>
        <?php endif; ?>
      </div>
      <section class="Paginacion">
          <?php echo paginate_links(); ?>
      </section>
    </div>
  </article>
</main>