//REGISTER WIDGET AREAS
 if ( function_exists('register_sidebars') ) {
 register_sidebar(array(
 'name' => 'Footer Widget 1',
 'id' => 'footer1',
 'before_widget' => '',
 'after_widget' => '',
 'before_title' => <h2 class="upper2 title3"><span>',
 'after_title' => '</span></h2>',
 ));
 }