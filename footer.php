<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wazoku
 */

?>

	<footer id="colophon" class="bg-gray-900 text-white py-12">
		<div class="container mx-auto px-4">
			<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
				<!-- Footer Column 1 -->
				<div class="footer-col">
					<h3 class="text-xl font-bold mb-4">About Us</h3>
					<p class="text-gray-400">Your WordPress site description goes here. Add a brief introduction about your website or business.</p>
				</div>

				<!-- Footer Column 2 -->
				<div class="footer-col">
					<h3 class="text-xl font-bold mb-4">Quick Links</h3>
					<ul class="space-y-2">
						<li><a href="#" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
						<li><a href="#" class="text-gray-400 hover:text-white transition-colors">About</a></li>
						<li><a href="#" class="text-gray-400 hover:text-white transition-colors">Services</a></li>
						<li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
					</ul>
				</div>

				<!-- Footer Column 3 -->
				<div class="footer-col">
					<h3 class="text-xl font-bold mb-4">Connect With Us</h3>
					<div class="space-y-2">
						<p class="text-gray-400">Email: info@example.com</p>
						<p class="text-gray-400">Phone: (123) 456-7890</p>
						<div class="flex space-x-4 mt-4">
							<a href="#" class="text-gray-400 hover:text-white transition-colors">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a href="#" class="text-gray-400 hover:text-white transition-colors">
								<i class="fab fa-twitter"></i>
							</a>
							<a href="#" class="text-gray-400 hover:text-white transition-colors">
								<i class="fab fa-instagram"></i>
							</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Footer Bottom -->
			<div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
				<div class="mb-2">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wazoku' ) ); ?>" class="hover:text-white transition-colors">
						<?php printf( esc_html__( 'Proudly powered by %s', 'wazoku' ), 'WordPress' ); ?>
					</a>
				</div>
				<div>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'wazoku' ), 'wazoku', '<a href="http://underscores.me/" class="hover:text-white transition-colors">Underscores.me</a>' ); ?>
				</div>
			</div>
		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
