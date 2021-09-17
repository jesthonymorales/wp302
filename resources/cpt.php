<?php
function create_posttype() {
    
    $aPostTypes = array(
                            'recipes' => array('name' => "Recipes", "singular" => "Recipe"),
                            'ingredients' => array('name' => "Ingredients", "singular" => "Ingredient"),
                            'reviews' => array('name' => "Reviews", "singular" => "Review"),
                        );

    foreach ($aPostTypes as $key => $aValues) {
        register_post_type( $aValues['name'],
        array(
                'labels' => array(
                    'name' => __( $aValues['name'] ),
                    'singular_name' => __( $aValues['singular'] )
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => $key),
                'show_in_rest' => true,
     
            )
        );
    }
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );