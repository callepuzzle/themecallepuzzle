<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);
get_header(); ?>


<?php 
	 if(stristr($_SERVER['HTTP_HOST'],"dev")==FALSE)
	 {
	 	include_once("index-index.php");
	 }
	 else
	 {
	 	include_once("index-dev.php");
	 }

 ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>