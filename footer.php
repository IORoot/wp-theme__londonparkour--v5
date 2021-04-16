
		<footer>
			
			<?php 
				include( __DIR__.'/src/assets/svgs/footer_svgs.php' );
				do_action('get_footer_code'); 
			?>

			<div class="js">
				<?php 
					do_action('page_builder_footer_code'); 
					wp_footer(); 
					include( __DIR__.'/src/components/tagmanager/tagmanager.php' );
				?>

			</div>
			
		</footer>

	</body>
</html>
