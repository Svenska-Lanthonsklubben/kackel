<?php

require_once( __DIR__ . '/includes/export-ads.php');

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


// Function used to register Ad form shortcode.
function submit_ad_form_shortcode() {
    // Initialize an output variable to store form HTML and messages
    ob_start();
    
    // Check if the form has been submitted and process the data
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_ad'])) {
        if (!isset($_POST['submit_ad_nonce']) || !wp_verify_nonce($_POST['submit_ad_nonce'], 'submit_ad_form')) {
            echo '<p>Något gick fel, var god försök igen.</p>';
            return; // Exit if nonce validation fails
        }

        // Sanitize form data
        $race = sanitize_text_field($_POST['ras']);
        $name = sanitize_text_field($_POST['namn']);
        $memberID = sanitize_text_field($_POST['medlemsnummer']);
        $email = sanitize_email($_POST['epost']);
        $phone = sanitize_text_field($_POST['telefon']);
        $location = sanitize_text_field($_POST['ort']);
        $text = sanitize_textarea_field($_POST['annonstext']);

        // Validate required fields
        if (!$race || !$name || !$memberID || !$email || !$text) {
            echo '<p>Var god fyll i alla nödvändiga fält.</p>';
        } else {
            // Prepare the post content
            $content = <<<EOD
            <!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"50.00%"} -->
            <div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph -->
            <p>$text</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column -->
    
            <!-- wp:column {"width":"50.00%"} -->
            <div class="wp-block-column" style="flex-basis:50%"><!-- wp:list -->
            <ul><li><strong>Namn:</strong> <a href="mailto:$email">$name</a></li><li><strong>Medlemsnr:</strong> $memberID</li><li><strong>Ort:</strong> $location</li><li><strong>Telefon:</strong> $phone</li></ul>
            <!-- /wp:list --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->
            EOD;

            // Create the post array
            $new_post = array(
                'post_title'    => wp_strip_all_tags($race),  // Use "Namn" as the title of the post
                'post_content'  => $content,             // Body of the post is all the submitted info
                'post_status'   => 'pending',                 // Set to 'pending' for admin review
                'post_category' => array(4)                     // Post type is 'post', can be customized
            );

            // Insert the post into the database
            $post_id = wp_insert_post($new_post);

            if ($post_id) {
                echo '<p>Din annons har nu skickats in! Den publiceras så fort någon har granskat den.</p>';

                $email_body = <<<EOD
                En ny annons har skickats in, 
                gå till <a href="https://www.kackel.se/wp-admin/edit.php?s&post_status=all&post_type=post&action=-1&m=0&cat=4&filter_action=Filtrera&paged=1&action2=-1">HIT</a>
                för att godkänna.
                EOD;
                
                $headers = array('Content-Type: text/html; charset=UTF-8');
                wp_mail("hemsida@kackel.se", "Ny annons", $email_body, $headers)
            } else {
                echo '<p>Något gick fel, var god försök igen.</p>';
            }           
        }
    }

    // Output the form HTML
    ?>
    <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post">
        <?php wp_nonce_field('submit_ad_form', 'submit_ad_nonce'); ?>
        <label for="ras">Ras *</label>
        <select name="ras" required>
            <option selected value="---">---</option>
            <option value="HÖNS">HÖNS</option>
            <option value="Bjurholmshöns">Bjurholmshöns</option>
            <option value="Bohuslän-Dals svarthöns">Bohuslän-Dals svarthöns</option>
            <option value="Gammalsvensk dvärghöns">Gammalsvensk dvärghöns</option>
            <option value="Gotlandshöns">Gotlandshöns</option>
            <option value="Hedemorahöns">Hedemorahöns</option>
            <option value="Kindahöns">Kindahöns</option>
            <option value="Orusthöns">Orusthöns</option>
            <option value="Skånska blommehöns">Skånska blommehöns</option>
            <option value="Åsbohöns">Åsbohöns</option>
            <option value="Ölandshöns">Ölandshöns</option>
            <option value="Öländska dvärghöns">Öländska dvärghöns</option>
            <option value="ANKOR">ANKOR</option>
            <option value="Blekingeanka">Blekingeanka</option>
            <option value="Svensk blå anka">Svensk blå anka</option>
            <option value="Svensk gul anka">Svensk gul anka</option>
            <option value="Svensk Myskanka">Svensk Myskanka</option>
            <option value="GÄSS">GÄSS</option>
            <option value="Skånegås">Skånegås</option>
            <option value="Ölandsgås">Ölandsgås</option>
        </select>

        <label for="namn">Namn *</label>
        <input type="text" name="namn" required>

        <label for="medlemsnummer">Medlemsnummer *</label>
        <input type="text" name="medlemsnummer" required>

        <label for="epost">E-post *</label>
        <input type="email" name="epost" required>

        <label for="telefon">Telefon</label>
        <input type="tel" name="telefon">

        <label for="ort">Ort</label>
        <input type="text" name="ort">

        <label for="annonstext">Annonstext *</label>
        <textarea name="annonstext" required></textarea>

        <input type="submit" name="submit_ad" value="Submit Ad">
    </form>
    <?php

    return ob_get_clean();
}

// Register the shortcode
add_shortcode('submit_ad_form', 'submit_ad_form_shortcode');



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
        <ul><li><strong>Namn:</strong> <a href="mailto:$email">$name</a></li><li><strong>Medlemsnr:</strong> $memberID</li><li><strong>Ort:</strong> $location</li><li><strong>Telefon:</strong> $phone</li></ul>
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