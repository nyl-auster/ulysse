<?php

$settings = [

  'database' => [
    'host' => '127.0.0.1',
    'name' => 'framework',
    'user' => 'root',
    'password' => '',
  ],

  // set content of 404 not found page. Use the same keys
  // than a page array in pages.php file.
  'page_not_found' => [
    'template' => 'page.php',
    'content' => function() {
        addHttpResponseHeader(404);
        return "Oooops page not found" . e(40, 'euros');
      }
  ],

  // theme to use to fetch requested templates.
  'theme_path' => '../../themes/example',

  // language used by default by the framework if no language are specified
  // in the http request.
  'language_default' => 'fr',

  // enabled languages on the site
  'languages' =>   [
    'fr' => [
      // using ?language='fr' in
      'query' => 'fr',
    ],
    'en' => [
      'query' => 'en',
    ],
  ]

];

// example merge setting from another file :
$settings = mergeConfigFromFile($settings, 'okc/content/config/settings.php');

return $settings;