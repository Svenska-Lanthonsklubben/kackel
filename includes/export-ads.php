<?php

/**
 * Export ads
 * @return csv as text
 */
function export_ads() {
    header('Content-Type: text/csv');

    $posts = get_posts( array(
        'category_name' => 'Annonser',
        'numberposts' => -1
    ));
    
    echo "Namn; Art; Email; Telefon; Ort; Medlemsnummer; Anonstext \n";

    foreach($posts as $post) {
        
        // Name
        preg_match('/<a href="mailto:.+">(.+)<\/a>/', $post->post_content, $m);
        echo $m[1];
        unset($m);
        echo '; ';

        // Art
        echo $post->post_title;
        echo '; ';

        // Email
        preg_match('/mailto:(.*)"/', $post->post_content, $m);     
        echo $m[1];
        unset($m);
        echo '; ';

        // Phonenumber
        preg_match('/<li><strong>Telefon:<\/strong> (.+?)<\/li>/', $post->post_content, $m); 
        echo $m[1];
        unset($m);
        echo '; ';

        // Ort
        preg_match('/<li><strong>Ort:<\/strong> (.+?)<\/li>/', $post->post_content, $m); 
        echo $m[1];
        unset($m);
        echo '; ';

        // MEdlemsnummer
        preg_match('/<li><strong>Medlemsnr:<\/strong> (.+?)<\/li>/', $post->post_content, $m); 
        echo $m[1];
        unset($m);
        echo '; ';

        // Annonstext
        preg_match('/<p>(.+?)<\/p>/s', $post->post_content, $m);
        $trimmed = trim(preg_replace('/\s\s+/', ' ', $m[1]));
        echo $trimmed;
        unset($m);
        unset($trimmed);
        echo '; ';

        echo "\n";
    }

    exit();
  }

add_action( 'rest_api_init', function () {
    register_rest_route( '/kackel/v1/', 'exportera_annonser', array(
      'methods' => 'GET',
      'callback' => 'export_ads',
    ) );
  } );