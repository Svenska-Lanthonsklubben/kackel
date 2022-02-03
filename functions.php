<?php

$theme = wp_get_theme();
define('THEME_VERSION', $theme->Version);

function kackel_enqueue_style()
{
    wp_enqueue_style('kackel-style', get_stylesheet_uri(), array(), THEME_VERSION);
    wp_enqueue_style('kackel-style-print', get_template_directory_uri() . '/css/print.css', array(), THEME_VERSION, 'print');
}

add_action('wp_enqueue_scripts', 'kackel_enqueue_style');
add_theme_support('title-tag');
register_nav_menu('sidebar', __('Sidomeny'));

add_filter('gutenberg_forms_integrations', function( $integrations ) {

    $available_categories = get_categories(
        array(
            'hide_empty' => false
        )
    );
    $options = [];

    foreach($available_categories as $category) {
        $options[] = array(
            'name' => $category->name,
            'value' => $category->cat_ID
        );
    }
    do_action( 'qm/debug', $options);

    $configurations = array(
        'title' => 'Create Posts',
        'is_pro'  => false,
        'type'  => 'autoResponder',
        'guide' => "",
        'description' => 'Automatically convert form submission to regular post.',
        'banner'    => 'https://p111.p2.n0.cdn.getcloudapp.com/items/kpuL2R0w/mailpoet-banner.png',
        'fields' => array(),
        'query_fields' => array(
            'category' => array(
                'label' => 'Välj kategori',
                'value' => $options,
                'type'  => 'select',
                'required'  => false
            )
        ), // Fields that are used in settings
        'api_fields' => array(
            'title' => array(
                'label' => 'Rubrik'
            ), 
            'name' => array(
                'label' => 'Namn'
            ),
            'memberID' => array(
                'label' => 'Medlemsnummer'
            ),
            'email' => array(
                'label' => 'Epost'
            ),
            'phone' => array(
                'label' => 'Telefon'
            ),
            'location' => array(
                'label' => 'Ort'
            ),
            'content' => array(
                'label' => 'Annonstext'
            )
        ), 
    ); 

    $integrations['annonser'] = $configurations;
    return $integrations;
});

function template_ad($entry) {
    $name = $entry['name'];
    $text = $entry['content'];
    $location = $entry['location'];
    $memberID = $entry['memberID'];
    $phone = $entry['phone'];
    $email = $entry['email'];
    $content = <<<EOD
    <!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"width":"50.00%"} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph -->
        <p>$text</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"50.00%"} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:list -->
        <ul>
            <li><strong>Namn:</strong> <a href="mailto:$email">$name</a></li>
            <li><strong>Medlemsnr:</strong> $memberID</li>
            <li><strong>Ort:</strong> $location</li>
            <li><strong>Telefon:</strong> $phone</li>
        </ul>
        <!-- /wp:list --></div>
        <!-- /wp:column --></div>
    <!-- /wp:columns -->
    EOD;
    return $content;
}


add_action('gutenberg_forms_submission__annonser', function($entry) {
    $new_post = array(
        'post_title' => $entry['title'],
        'post_content' => template_ad($entry),
        'post_category' => array($entry['category'])
    );
    wp_insert_post($new_post);
});