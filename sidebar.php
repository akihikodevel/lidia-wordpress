<aside class="Sidebar">
    <h5>Sidebar</h5>
    <?php
        if(is_active_sidebar('main_sidebar')):
            dynamic_sidebar('main_sidebar');
        else:
    ?>
    <article class="Widget">
        <h5><?php _e('Buscar','cctw'); ?></h5>
        <?php get_search_form(); ?>
    </article>
    <?php endif; ?>
</aside>