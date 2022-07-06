<?php
/**
 * The main template file
 * 
 * 
 *Template Name: Главная страница (Шаблонизатор)
 *Template Post Type: post, page, product
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package food
 */

get_header();
?>

<div class="wrapper contaner">
    <div class="cards">
      <div class="card">
        <img class="card-img" src=" <?= get_template_directory_uri() . './assets/img/1.png' ?>" alt="">
        <h1 class="card-title">Single Room</h1>
        <p class="card-desc">Best for a brave lone wolf who need comfort and quiet quality time, but you still have a chance to meet others.</p>
        <a href="#"> Learn more <i class="fa-solid fa-arrow-right-long"></i></a>
      </div>
      <div class="card">
        <img class="card-img" src="<?= get_template_directory_uri() . './assets/img/2.png';?>" alt="">
        <h1 class="card-title">Double Room</h1>
        <p class="card-desc">Best for couple, seek happiness in intimacy without worry of being disturbed. Feel the whole world just for you two</p>
        <a href="#"> Learn more <i class="fa-solid fa-arrow-right-long"></i></a>
      </div>
      <div class="card">
        <img class="card-img" src="<?= get_template_directory_uri() . './assets/img/3.png' ?>" alt="">
        <h1 class="card-title">Cootage</h1>
        <p class="card-desc">Best for family or group. One cootage can fit up to 5 people. Made stronger bond with your family or friends</p>
        <a href="#"> Learn more <i class="fa-solid fa-arrow-right-long"></i></a>
      </div>
    </div>
  </div>

<?php
get_sidebar();
get_footer();
