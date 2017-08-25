# TemplateTwig
Module Wordpress for dependancy

# Load config
```php
add_action('plugins_loaded', function() {
    global $loader, $TWIG;
    if (!$loader instanceof Twig_Loader_Filesystem) { return; }
    if (!defined('TWIG_ENGINE_PATH')) {
        define('TWIG_ENGINE_PATH', plugin_dir_path(__FILE__) . '/engine/Twig');
    }
    $loader->addPath(TWIG_ENGINE_PATH . '/templates/front', 'front');
    $loader->addPath(TWIG_ENGINE_PATH . '/templates/admin', 'admin');
    $TWIG = new Twig_Environment($loader, array(
        'debug' => true,
        'cache' => TWIG_ENGINE_PATH . '/template_cache'
    ));
});
```

# for use
```php
global $TWIG;

/* more... */

return $TWIG->render('@front/form.html', array(
  'nonce' => wp_nonce_field('thumbnail_upload', 'thumbnail_upload_nonce'),
  'post_id' => $post_id,
  'name' => $labelname
));
```
