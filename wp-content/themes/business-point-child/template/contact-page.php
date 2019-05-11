<?php
/**
 * Template Name: Contact Page
 *
 * This is the most main template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Business_Point
 */

get_header();
?>
	<div class="row">
		<div class="col-md-9">
			<h3>Contact Us:</h3>
			<?php echo do_shortcode('[contact-form-7 id="73" title="Contact Form"]'); ?>
		</div>
		<div class="col-md-3">
			<h3>Address:</h3>
			<p>172-Madhavpark Society,<br/>
			Utran,Surat<br/>
			Gujarat,India-394105</p>

			<h3>Find Us:</h3>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.1294644442723!2d72.82089881467769!3d21.22671418589146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04ebe966d31c5%3A0x69ddfd0f3d434bfd!2sMadhav+Park%2C+Madhav+Park+Society%2C+Katargam%2C+Surat%2C+Gujarat+395004!5e0!3m2!1sen!2sin!4v1557576725669!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>

<?php
get_footer();