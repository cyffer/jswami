<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oneoheight
 */

?>

<!-- jQuery -->
<script src="<?php bloginfo('tempalte_directory')?>/assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('tempalte_directory')?>/assets/js/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>

<?php wp_footer(); ?>

</body>
</html>
