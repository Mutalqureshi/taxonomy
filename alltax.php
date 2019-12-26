
<?php 
    function custom_taxonomy() {
        $labels = array(
        'name'              => _x( 'cars Category', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'cars Category', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search cars', 'textdomain' ),
        'all_items'         => __( 'All cars', 'textdomain' ),
        'parent_item'       => __( 'Parent Client', 'textdomain' ),


        'parent_item_colon' => __( 'Parent cars:', 'textdomain' ),
        'edit_item'         => __( 'Edit cars', 'textdomain' ),
        'update_item'       => __( 'Update cars', 'textdomain' ),
        'add_new_item'      => __( 'Add New cars Category', 'textdomain' ),
        'new_item_name'     => __( 'New cars Name', 'textdomain' ),
        'menu_name'         => __( 'cars Category', 'textdomain' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
    );

    register_taxonomy( 'cars_tax', array( 'cars' ), $args );
    
    }
    add_action('init','custom_taxonomy');
 ?>
