# Wordpress Template - Twig
Module Wordpress.
Twig version 1.27

# Load config
```php
$twig = null;

add_action('plugins_loaded', function() {
  global $loader, $twig;
  if (!$loader instanceof \Twig_Loader_Filesystem) { return; }
  if (!defined('ADVERT_TWIG_ENGINE_PATH')) {
    define('ADVERT_TWIG_ENGINE_PATH', \plugin_dir_path(__FILE__) . '/engine/Twig');
  }
  
  /* @var $loader is instance of Twig_Loader_Filesystem
  ** $loader = new Twig_Loader_Filesystem();
  */
  /* $loader->addPath(TWIG_ENGINE_PATH . '/templates/front', 'front'); 
     $loader->addPath(TWIG_ENGINE_PATH . '/templates/admin', 'admin'); */
  $loader->addPath(TWIG_ENGINE_PATH . '/templates/partials', 'partials');
  if (!is_null( $twig )) exit( 'Twig template not install or inactivate' );
  $twig = new \Twig_Environment($loader, array(
    'debug' => true,
    'cache' => ADVERT_TWIG_ENGINE_PATH . '/template_cache'
  ));
});
```

# for use
```php
function render_shortcode() {
    global $twig;

    /* more... */
    
    return $twig->render('@front/form.html', array(
      'nonce' => wp_nonce_field('thumbnail_upload', 'thumbnail_upload_nonce'),
      'post_id' => $post_id,
      'name' => $labelname
    ));
}
```
