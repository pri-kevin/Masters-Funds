<?php

// add jquery.pngFix.js file
drupal_add_js(drupal_get_path('theme', 'salamanderskins') . '/js/jquery.pngFix.js', 'theme');
drupal_add_js(drupal_get_path('theme', 'salamanderskins') . '/js/suckerfish.js', 'theme');


function salamanderskins_regions() {
	return array(
		'sidebar_left' => t('Left sidebar'),
		'sidebar_right' => t('Right sidebar'),
			'above' => t('Above'),
			'header' => t('Header'),
			'suckerfish' => t('Suckerfish Menu'),
		'user1' => t('User 1'),
		'user2' => t('User 2'),
		'user3' => t('User 3'),
			'content_top' => t('Top content'),
			'content_bottom' => t('Bottom content'),
		'user4' => t('User 4'),
		'user5' => t('User 5'),
		'user6' => t('User 6'),
			'below' => t('Below'),
			'footer' => t('Footer')
	);
} 

/*  Modify theme variables  
function xmll() {
	return '<em>by</em> <a href="http://www.radut.net/"> Dr. Radut</a>';
}*/
 
/*  Breadcrumb override  */
function salamanderskins_breadcrumb($breadcrumb) {
	if (!empty($breadcrumb)) {
		$breadcrumb[] = drupal_get_title();  // RADUT's full breadcrumb ( › = â€º , » = &#187; &raquo;)
		return '<div class="breadcrumb">'. implode(' &raquo; ', $breadcrumb) .'</div>';
	}
}

// Popup Function
function salamanderskins_menu_item_link($link) {
  if (empty($link['localized_options'])) {
    $link['localized_options'] = array();
  }
  if($link['href']) {
    $href_array = explode('/', $link['href']);
    if($href_array[1]) {
      $link_href_popup = array_pop($href_array);
      if($link_href_popup == 'Stay Informed') {
        if(!empty($link['description'])) {
          $link['localized_options'] = array('attributes' => array('target' => '_blank', 'title' => $link['description']));
        }
        else {
          $link['localized_options'] = array('attributes' => array('target' => '_blank'));
        }
        return l($link['title'], $link['href'], $link['localized_options']);
      }
    }
  }    
return l($link['title'], $link['href'], $link['localized_options']);
}

