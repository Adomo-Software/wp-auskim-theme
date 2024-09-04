<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>


	<footer id="colophon" class="site-footer">
		<div class="site-info">
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- <script type="text/javascript">
	// script.js

console.log('hello');
document.addEventListener('mousemove', (event) => {
    const mask = document.querySelector('.mask');
    
    // Get mouse position
    const x = event.clientX;
    const y = event.clientY;
    
    // Update CSS variables
    mask.style.setProperty('--cursor-x', `${x}px`);
    mask.style.setProperty('--cursor-y', `${y}px`);
    mask.style.clipPath = `circle(100px at ${x}px ${y}px)`;
});

</script>
 -->
</body>
</html>
