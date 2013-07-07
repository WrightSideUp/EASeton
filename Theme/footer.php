			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">

					<nav role="navigation">

                        <?php bones_footer_links(); ?>

                    </nav>

                    <section id="bottomBanner">

                        <div class="address">
                            <p>700 N. 7th Street, Suite B</p>
                            <p>Springfield, IL  62702</p>
                            <p>(217)757-6025</p>
                            <p>info@elizabethannsetonprogram.org</p>
                        </div>

                        <div class="images">
                            <img class="unitedBadge" src="<?php echo get_template_directory_uri(); ?>/img/UnitedWayColorLogo.jpg" alt="United Way Affiliated Charity" />
                            <img class="bbbBadge" src="<?php echo get_template_directory_uri(); ?>/img/BBB%20Chairty.jpg" />
                            <img class="starBadge" src="<?php echo get_template_directory_uri(); ?>/img/4StarCharity.jpg" />
                        </div>

                    </section>

				</div> <!-- end #inner-footer -->

                <section id="legal">

                    <ul>
                        <li><p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.  All Rights Reserved</p></li>
                        <li><p>Privacy Policy"</p></li>
                        <li><p>Terms of Use</p></li>
                    </ul>

                </section>

			</footer> <!-- end footer -->

		</div> <!-- end #container -->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
