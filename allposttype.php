<?php 
function my_post(){
	register_post_type( 'cars',
        array(
            'labels' => array(
                'name' => __( 'carpost' ),
                'singular_name' => __( 'carpost' )
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt')

        )
    );

    register_post_type( 'slider',
        array(
            'labels' => array(
                'name' => __( 'Slider' ),
                'singular_name' => __( 'Slider' )
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt')

        )
    );
}		
add_action( 'init', 'my_post' );
 ?>