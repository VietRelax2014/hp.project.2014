		<!-- FOOTER
		================================================== -->
		<footer>
			<div class="hdv-footer">
				<div class="container clearfix">
					<div class="hdv-one-fourth hdv-widget hdv-company-widget">
						<div class="hdv-logo">
							<a href="#">
								<img src="/layouts/images/logo_footer.png" alt="UIM. Corporation Responsive Theme. Responsive and Clean layout" />
							</a>
						</div><!-- End Footer Logo -->
						<p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
						<ul>
							<li><a href="#">Team</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Perferendis Doloribus</a></li>
							<li><a href="#">Terms of Service</a></li>
							<li><a href="#">Help & Support</a></li>
						</ul>
					</div>
        
					<div class="hdv-one-fourth hdv-widget hdv-twitter-widget">
						<h3>Recent Tweets</h3>
						<ul>
							<li>
								<span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem <a href="#">http://twitter.com</a></span><span class="twit-date">Jan 7, 2013</span>
							</li>
							<li>
								<span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aliquid :) <a href="#">http://twitter.com</a></span><span class="twit-date">Jan 7, 2013</span>
							</li>
						</ul>
					</div>
        
					<div class="hdv-one-fourth hdv-widget hdv-flickr-widget">
						<h3>Flickr Photos</h3>
						<ul>
							<li>
								<a href="#" class="hdv-gallery"><img src="/layouts/images/flickrs/thumb.jpg" alt="Flickr Thumb"><span class="hdv-gallery-icon"><i class="icon-action-redo"></i></span></a>
							</li>
							<li>
								<a href="#" class="hdv-gallery"><img src="/layouts/images/flickrs/thumb.jpg" alt="Flickr Thumb"><span class="hdv-gallery-icon"><i class="icon-action-redo"></i></span></a>
							</li>
							<li>
								<a href="#" class="hdv-gallery"><img src="/layouts/images/flickrs/thumb.jpg" alt="Flickr Thumb"><span class="hdv-gallery-icon"><i class="icon-action-redo"></i></span></a>
							</li>
							<li>
								<a href="#" class="hdv-gallery"><img src="/layouts/images/flickrs/thumb.jpg" alt="Flickr Thumb"><span class="hdv-gallery-icon"><i class="icon-action-redo"></i></span></a>
							</li>
							<li>
								<a href="#" class="hdv-gallery"><img src="/layouts/images/flickrs/thumb.jpg" alt="Flickr Thumb"><span class="hdv-gallery-icon"><i class="icon-action-redo"></i></span></a>
							</li>
							<li>
								<a href="#" class="hdv-gallery"><img src="/layouts/images/flickrs/thumb.jpg" alt="Flickr Thumb"><span class="hdv-gallery-icon"><i class="icon-action-redo"></i></span></a>
							</li>
						</ul>
					</div>

					<div class="hdv-one-fourth hdv-last hdv-widget hdv-widget-subscribe">
						<h3>Email Newsletters</h3>
						<p>Subscribe to our email newsletter to receive our news, updates and awesome free files, tuts and sources.</p>
						<form action="#">
							<input type="text" onfocus="if(this.value == 'your@email.com') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'your@email.com'; }" value="your@email.com" class="hdv-email">
							<input type="submit" class="submit hdv-btn" value="Subscribe">
						</form>
					</div>
		      </div>
			</div><!-- End Main Footer -->
 
			<div class="hdv-bottom">
				<div class="container clearfix">
					<div class="eight columns">
						<span class="hdv-copyright">&copy Copyright 2014 <a href="#">FHD</a>. All Rights Reserved. by <a href="http://viet-relax.com/" target="_blank">Viet-Relax</a></span>
					</div><!-- End Copyright -->
        
					<div class="eight columns">
						<div class="hdv-socials">
							<a href="#"><i class="zocial-icon-facebook"></i></a>
							<a href="#"><i class="zocial-icon-twitter"></i></a>
							<a href="#"><i class="zocial-icon-google"></i></a>
							<a href="#"><i class="zocial-icon-youtube"></i></a>
							<a href="#"><i class="zocial-icon-vimeo"></i></a>
						</div>
					</div><!-- End Bottom Socials -->
				</div>
			</div><!-- End Bottom Footer -->
		</footer>
		<!-- FOOTER
		================================================== -->

	</div>
	<!-- END WRAP
	================================================== -->

	<!-- JAVASCRIPT
	================================================== -->
	<!-- Base JS -->
	<script src="/layouts/javascript/jquery-1.8.3.min.js"></script>

	<!-- jQuery Cookie -->
	<script src="/layouts/javascript/jquery.cookie.js"></script>

	<!-- jQuery Sticky -->
	<script src="/layouts/javascript/jquery.sticky.js"></script> 

	@if($page == 'home')
		<!-- jQuery Camera slider -->
		<script src="/layouts/javascript/jquery.easing.1.3.js"></script>
		<script src="/layouts/javascript/camera.min.js"></script>
		<script src="/layouts/javascript/jquery.mobile.customized.min.js"></script>
	@endif

	<script src="/layouts/javascript/jquery.mobile.customized.min.js"></script>
	<script type="text/javascript" src="/layouts/javascript/modernizr.2.5.3.min.js"></script>
	<!-- jQuery Switcher -->
	<script src="/layouts/javascript/styleswitcher.js"></script>
	<div class="switcher-container"></div>
	
	<!-- jQuery Main -->
	<script src="/layouts/javascript/main.js"></script>

	<!-- END JAVASCRIPT
	================================================== -->
	@yield('footer-script')

</body>
</html>