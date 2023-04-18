<?php wp_footer(); ?> <!-- wp function that loads scripts at the bottom of the HTML document -->

<footer id="footer">
			<div class="container">
				<div class="row top">

				<?php dynamic_sidebar('footer') ?> <!-- adds footer widget -->

				</div>
				<div class="row bottom">
					<div class="col-xs-12">

					<?php dynamic_sidebar('copyright') ?> <!-- adds footer widget -->
					
					</div>
				</div>
			</div>
</footer>