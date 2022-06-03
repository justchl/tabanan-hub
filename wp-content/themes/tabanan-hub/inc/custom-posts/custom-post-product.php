<?php
/********************************************************************************
 * Register Post type articles
 *********************************************************************************/

function product(){
    $labels = [
        'name'               => _x('Product', 'post type general name'),
        'singular_name'      => _x('Product', 'post type singular name'),
        'add_new'            => _x('Add New', 'Product'),
        'add_new_item'       => __('Add New Product'),
        'edit_item'          => __('Edit Product'),
        'new_item'           => __('Add New Product'),
        'all_items'          => __('List'),
        'view_item'          => __('View'),
        'search_items'       => __('search'),
        'not_found'          => __('Number product Found'),
        'not_found_in_trash' => __('Number product Found in the trash'),
        'parent_item_colon'  => '',
        'menu_name'          => 'Product'
    ];
    $args = [
        'labels'                => $labels,
        'description'           => 'product specific data',
        'public'                => true,
        'menu_position'         => 10,
        "publicly_queryable"    => true,
        "show_ui"               => true,
        "delete_with_user"      => false,
        "rest_base"             => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive"           => true,
        "show_in_menu"          => true,
        "show_in_nav_menus"     => true,
        "exclude_from_search"   => false,
        "capability_type"       => "post",
        "map_meta_cap"          => true,
        "hierarchical"          => false,
        "rewrite"               => [
            "slug"       => "produk",
            "with_front" => true
        ],
        "query_var"             => true,
        'show_in_rest'          => true,
        "supports"              => [
            "title",
            "editor",
            "thumbnail"
        ],
        "taxonomies"            => [
            "post_tag",
            "category"
        ],
    ];
    register_post_type('product', $args);
}

add_action('init', 'product');
?>