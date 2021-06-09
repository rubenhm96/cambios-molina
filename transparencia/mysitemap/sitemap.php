<?php
/*
Template Name: Sitemap
*/
get_header();
?>
<main id="primary" class="site-main row max-width-content">
<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '<p class="breadcrumbs">','</p>' );} ?>
    <h1 class="entry-title-sitemap"><i class="bi bi-diagram-3-fill"></i> Mapa Web</h1>
    <div class="row sitemap-parent">
    <?php 
    $mysites = get_sites( 
        [
            'public'  => 1,
            'number'  => 500,
        ]
    );
    
    foreach ($mysites as $site){
        switch_to_blog($site->blog_id);
    ?>
        <div class="sitemap-child">
            <h1 class="sitemap-title-site"><?php echo get_bloginfo() ?></h1>
            <h2 id="pages">Páginas</h2>
            <ul>
            <?php
            // exclude para excluir paginas
            wp_list_pages(
            array(
                'exclude' => '',
                'title_li' => '',
            )
            );
            ?>
            </ul>

            <h2 id="posts">Entradas</h2>
            <ul>
            <?php
            // exclude para excluir categorias
            $cats = get_categories('exclude=');
            foreach ($cats as $cat) {
            echo "<li><h3>".$cat->cat_name."</h3>";
            echo "<ul>";
            query_posts('posts_per_page=-1&cat='.$cat->cat_ID);
            while(have_posts()) {
                the_post();
                /*$category = get_the_category();*/
                // Mostrar el enlace solo una vez si se repite en otra categoria
                /*if ($category[0]->cat_ID == $cat->cat_ID) {
                */echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';/*
                }*/
            }
            echo "</ul>";
            echo "</li>";
            }
            ?>
            </ul>
            <?php
                    // EVENTOS DEL CALENDARIO
                    $args = array(
                        'public'   => true,
                        '_builtin' => false,
                    );
                    $post_types = get_post_types( $args, 'names');
                    if($post_types){
                    foreach ($post_types as $post_type){
                        $cpt = get_post_type_object($post_type);
                        $return='';
                        $list_pages='';
                        $args = array();
                        $args['post_type'] = $post_type;
                        $args['posts_per_page'] = 999999;
                        $args['suppress_filters'] = 0;
                        $posts_cpt = get_posts( $args );
                        if ( !empty($posts_cpt) ) {
                            foreach( $posts_cpt as $post_cpt ) {
                                $list_pages .= '<li><a href="'.get_permalink( $post_cpt->ID ).'"'.$attr_nofollow.'>'.$post_cpt->post_title.'</a></li>'."\n";
                            }
                        }
                        // Return the data (if it exists)
                        if (!empty($list_pages)) {
                            $return .= '<h2 class="wsp-'.$post_type.'s-title">' . $cpt->label . '</h2>'."\n";
                            $return .= '<ul class="wsp-'.$post_type.'s-list">'."\n";
                            $return .= $list_pages;
                            $return .= '</ul>'."\n";
                        }
                        echo $return;
                    }
                    }
                ?>
        </div>
    <?php 
    }
    ?>
    </div>
</main>
<?php 
get_footer();
