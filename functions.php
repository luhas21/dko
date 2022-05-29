<?php 

//wp_enqueue_style('moje_hlavni_styly', get_theme_file_uri('/bundled-assets/styles.742d60257b6329c43b6a.css'));


function get_cat_ico_class($categoryName){
  switch ($categoryName) {
    case 'Výstavy':
      return '<span class="ico-vystavy"></span>';
      break;
    case 'Kino':
      return '<span class="ico-kino"></span>';
      break;
    case 'Koncerty':
      return '<span class="ico-koncerty"></span>';
      break;
    case 'Divadlo':
      return '<span class="ico-divadlo"></span>';
      break;
    case 'Pro děti':
      return '<span class="ico-deti"></span>';
      break;
    case 'Osobní rozvoj':
      return '<span class="ico-rozvoj"></span>';
      break;
    case 'Akce':
      return '<span class="ico-akce"></span>';
      break;
    case 'Inzerce':
      return '<span class="ico-inzerce"></span>';
      break;
    case 'Reklama':
      return '<span class="ico-reklama"></span>';
      break;
    case 'Pronájem':
      return '<span class="ico-pronajem"></span>';
      break;
    case 'Služby':
      return '<span class="ico-sluzby"></span>';
      break;
    case 'Svatby':
      return '<span class="ico-svatby"></span>';
      break;
    case 'Foto':
      return '<span class="ico-foto"></span>';
      break;
    default:
      return 0;
  }
}


/*
require get_theme_file_path('/inc/private-site.php');
require get_theme_file_path('/inc/asp-acf-custom-types.php');
require get_theme_file_path('/inc/aps-typ-events.php');
require get_theme_file_path('/inc/aps-typ-komponenty.php');
require get_theme_file_path('/inc/aps-typ-typy-komponent.php');
require get_theme_file_path('/inc/aps-typ-cinnosti.php');
require get_theme_file_path('/inc/aps-typ-typy-cinnosti.php');
require get_theme_file_path('/inc/aps-typ-vyr-postupy.php');
require get_theme_file_path('/inc/aps-typ-vyr-doc.php');
require get_theme_file_path('/inc/aps-typ-zavady.php');
require get_theme_file_path('/inc/aps-typ-zaznamy.php');
require get_theme_file_path('/inc/aps-typ-varky.php');
require get_theme_file_path('/inc/svatek.php');
require get_theme_file_path('/inc/widget-pocasi.php');
require get_theme_file_path('/inc/widget-next-events.php');
require get_theme_file_path('/inc/vypis-kalendare.php');
require get_theme_file_path('/inc/aps-doch-vypis-dochazky.php');
require get_theme_file_path('/inc/aps-doch-customize.php');
require get_theme_file_path('/inc/aps-doch-options.php');
require get_theme_file_path('/inc/aps-doch-widget-zapis-absence.php');
require get_theme_file_path('/inc/aps-doch-widget-archiv.php');
require get_theme_file_path('/inc/aps-doch-widget-prihlaseni.php');

function moje_soubory() {
wp_enqueue_style('font-awsome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

if(strstr($_SERVER['SERVER_NAME'],'wpdev.local')) {
  wp_enqueue_script('main-speelnet-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
  } else {
    wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.a49f8a5276ae08111a08.js'), NULL, '1.0', true);
    wp_enqueue_script('main-speelnet-js', get_theme_file_uri('/bundled-assets/scripts.742d60257b6329c43b6a.js'), NULL, '1.0', true);
    wp_enqueue_style('moje_hlavni_styly', get_theme_file_uri('/bundled-assets/styles.742d60257b6329c43b6a.css'));
  }
}
add_action('wp_enqueue_scripts', 'moje_soubory');

function speelnet_features() {
  // Register the menus.
  add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus( array( 
      'headerMenuLocation' => 'Header Menu Location', 
      'footerMenuLocation' => 'Footer Menu Location' 
    ));
}
add_action('after_setup_theme', 'speelnet_features');

function my_register_sidebars() {
  // Register the 'primary' sidebar.
  register_sidebar(
    array(
      'id'            => 'primary',
      'name'          => __( 'Primary Sidebar' ),
      'description'   => __( 'Standardní sidebar pro běžné stránky.' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );
  register_sidebar(
    array(
      'id'            => 'dochazka',
      'name'          => __( 'Sidebar Docházka' ),
      'description'   => __( 'Sidebar pro stránky Docházka a Přítomnost.' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );
  register_sidebar(
    array(
      'id'            => 'vyroba',
      'name'          => __( 'Sidebar Výroba' ),
      'description'   => __( 'Sidebar pro stránky Výroby.' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

// Repeat register_sidebar() code for additional sidebars. 

}
add_action( 'widgets_init', 'my_register_sidebars' );

?>
<script>
function rozbalit(itemID) {
  if (document.getElementById(itemID).style.display === "block") {
    document.getElementById(itemID).style.display = "none";
    event.preventDefault()
  } else {
    document.getElementById(itemID).style.display = "block";
    event.preventDefault()
  }
}
</script>

*/