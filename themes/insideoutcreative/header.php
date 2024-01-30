<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 

if(get_field('header', 'options')) { the_field('header', 'options'); }
if(get_field('header_code')) { the_field('header_code'); }

if(get_field('custom_css')) { 
?> 
<style>
<?php the_field('custom_css'); ?>
</style>
<?php 
}
wp_head(); 
?>
</head>
<body <?php body_class(); ?>>
<?php
if(get_field('body','options')) { the_field('body','options'); }
if(get_field('body_code')) { the_field('body_code'); }
echo '<div class="blank-space"></div>';

echo '<nav class="position-relative w-100 box-shadow" style="top:0;left:0;z-index:3;background: rgba(255,255,255);padding:15px 0px 25px;">';
echo '<div class="container">';
echo '<div class="row align-items-center justify-content-end">';

echo '<div class="col-lg-4 col-6 text-center">';
echo '<a href="' . home_url() . '/">';

$logo = get_field('logo','options'); 
if($logo){
    echo wp_get_attachment_image($logo['id'],'full','',[
        'class'=>'w-100 h-auto',
        'style'=>'transition:all 1s ease-in-out;',
        'id'=>'logo-main'
    ]); 
}

echo '</a>';
echo '</div>';

echo '<div class="col-lg-4 col-6 text-right">';

echo '<p style="font-style:italic;margin-bottom:0px;font-size:1.25rem;letter-spacing:0.05em;" class="text-accent">Call or Text Today!</p>';
	
echo '<span style="text-decoration:none;font-size:1.25rem;color:black;letter-spacing:.2em;" class="bold">' . get_field('phone','options') . '</span>';

// echo '<a id="navToggle" class="nav-toggle">';
// echo '<div>';
// echo '<div class="line-1 bg-accent"></div>';
// echo '<div class="line-2 bg-accent"></div>';
// echo '<div class="line-3 bg-accent"></div>';
// echo '</div>';
// echo '</a>';
echo '</div>';

// echo '<div id="navMenuOverlay" class="position-fixed z-2"></div>';
// echo '<div class="col-lg-4 col-md-8 col-11 nav-items bg-white desktop-hidden" id="navItems">';

// echo '<div class="pt-5 pb-5">';
// echo '<div class="close-menu">';
// echo '<div>';
// echo '<span id="navMenuClose" class="close h2 text-gray" style="float:right;">X</span>';
// echo '</div>';
// echo '</div>';
// echo '<a href="' . home_url() . '">';

// $logo = get_field('logo','options'); 
// if($logo){
// echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:250px;']);
// }

// echo '</a>';
// echo '</div>';
// wp_nav_menu(array(
// 'menu' => 'primary',
// 'menu_class'=>'menu list-unstyled mb-0'
// )); 
// echo '</div>'; // end of col for navigation



echo '</div>';
echo '</div>';
echo '</nav>';

echo '<header class="">';



echo '</header>';




if(is_front_page()) {

echo '<section class="hero position-relative d-flex align-items-end justify-content-center" style="">';
	
echo wp_get_attachment_image(280,'full','',[
    'class' => 'w-100 h-100 position-absolute',
    'style' => 'object-fit:cover;top:0;left:0'
]);

// echo '<div class="header-carousel owl-carousel owl-theme position-absolute overflow-h h-100" style="top:0;left:0;object-fit:cover;">';

// echo '<div class="h-100">';
// echo wp_get_attachment_image(280,'full','',[
//     'class' => 'w-100 h-100',
//     'style' => 'object-fit:cover;'
// ]);
// echo '</div>';

// echo '<div class="h-100">';
// echo wp_get_attachment_image(281,'full','',[
//     'class' => 'w-100 h-100',
//     'style' => 'object-fit:cover;'
// ]);
// echo '</div>';
	
// 	echo '<div class="h-100">';
// echo wp_get_attachment_image(282,'full','',[
//     'class' => 'w-100 h-100',
//     'style' => 'object-fit:cover;'
// ]);
// echo '</div>';

// echo '</div>';


echo '<div class="w-100 text-white text-center hero-content text-shadow" style="z-index:1;padding-bottom:75px;">';

echo '<h1 class="w-100 thin" style="text-transform:uppercase;letter-spacing:.2em;font-size:6vw;margin-bottom:0;">' . get_the_title() . '</h1>';
	
echo '<div class="m-auto bg-accent" style="height:2px;width:985px;max-width:100%;margin:auto;"></div>';

// echo '<div class="d-flex justify-content-center align-items-center" style="padding-top:15px;">';
// echo '<div class="m-auto bg-accent" style="margin-right:15px;height:2px;width:75px;"></div>';
echo '<h2 class="thin text-shadow" style="letter-spacing:.2em;margin:0;font-size:3vw;">PREMIUM DISCOUNT PRICES</h2>';
// echo '<div class="m-auto bg-accent" style="margin-left:15px;height:2px;width:75px;"></div>';
// echo '</div>';

echo '</div>';

echo '</section>';
}

?>