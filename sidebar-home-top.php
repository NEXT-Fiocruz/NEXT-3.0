<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit; 
 
 $options = get_option('responsive_theme_options');
 //print '<pre>'; print_r($options); print '</pre>';
 
?>
        <div id="widgets" class="grid col-940 ">
        <?php responsive_widgets(); // above widgets hook ?>
            
            <?php if (!dynamic_sidebar('Content home top')) : ?>

			<div class="grid col-220">
				<div class="widget-wrapper">
					<div class="mosaic-block cover">
						<div class="mosaic-overlay" id="facebook"></div>
						<a href="#" target="_blank" class="mosaic-backdrop">
							<div class="details">
								<h4>FACEBOOK</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet libero nisi. Aliquam pulvinar velit rutrum sem bibendum auctor. </p>
							</div>
						</a>
					</div>
				</div>
			</div>
			
			<div class="grid col-220">
				<div class="widget-wrapper">
					<div class="mosaic-block cover">
						<div class="mosaic-overlay" id="youtube"></div>
						<a href="#" target="_blank" class="mosaic-backdrop">
							<div class="details">
								<h4>CANAL DO NEXT</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet libero nisi. Aliquam pulvinar velit rutrum sem bibendum auctor. </p>
							</div>
						</a>
					</div>
				</div>
			</div>
			
			<div class="grid col-220">
				<div class="widget-wrapper">
					<div class="mosaic-block cover">
						<div class="mosaic-overlay" id="wikipedia"></div>
						<a href="#" target="_blank" class="mosaic-backdrop">
							<div class="details">
								<h4>WIKI DO NEXT</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet libero nisi. Aliquam pulvinar velit rutrum sem bibendum auctor. </p>
							</div>
						</a>
					</div>
				</div>
			</div>
			
			<div class="grid col-220 fit">
				<div class="widget-wrapper">
					<div class="mosaic-block cover">
						<div class="mosaic-overlay" id="moodle"></div>
						<a href="#" target="_blank" class="mosaic-backdrop">
							<div class="details">
								<h4>MOODLE</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet libero nisi. Aliquam pulvinar velit rutrum sem bibendum auctor. </p>
							</div>
						</a>
					</div>
				</div>
			</div>
			<?php endif; //end of main-sidebar ?>

        <?php responsive_widgets_end(); // after widgets hook ?>
        </div><!-- end of #widgets -->