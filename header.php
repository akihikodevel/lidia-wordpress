<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="c_encabezado-sitio">
        <div class="c_contenedor">
            <div>
                
                <div class="c_logo">
                    <!--<?php
                        if(has_custom_logo()):
                            the_custom_logo();
                        else:
                            echo '<a href="'.esc_url(home_url('/')).'">'.get_bloginfo('name').'</a>';
                        endif;
                    ?> -->
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="c_logotipo">
                    </a>
                </div> <!-- LOGO -->
                <div class="c_informacion-encabezado">
                    <div class="c_redes-sociales">
                        <?php 
                            wp_nav_menu(array(
                                'theme_location' => 'social_menu',
                                'container' => 'nav',
                                'container_class' => 'Sociales',
                                'container_id' => 'Sociales',
                                'link_before' => '<span class="sr-text">',
                                'link_after' => '</span>'
                            ));
                        ?>
                    </div>
                </div>
                <div class="c_informacion_menu">
                    <i class="fa fa-bars"></i>
                </div>
                <nav>
                    <?php 
                    if(has_nav_menu('main_menu')):
                        wp_nav_menu(array(
                            'theme_location' => 'main_menu',
                            'container' => 'nav',
                            'container_class' => 'Menu'
                        ));
                    else: ?>

                    
                </nav>
                
                <nav class="Menu">
                    <ul>
                        <li><a href=""></a>Seccion1</li>
                        <li><a href=""></a>Seccion2</li>
                        <li><a href=""></a>Seccion3</li>
                        <li><a href=""></a>Seccion4</li>
                        <li><a href=""></a>Seccion5</li>
                        <li><a href=""></a>Seccion6</li>
                    </ul>
                </nav>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <div class="c_contenedor-menu">
        <div class="c_redes-menu">
            
        </div>
    </div>
    <main class="Main">
    