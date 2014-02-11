
		<!-- ==============================================
		Footer
		=============================================== -->
		<section class="footer dark-gray-background">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<p class="no-margin-bottom">Spartan Race<br>
						109 Kingston Street, 4th Floor <br>Boston, MA 02111<br>
						(432) 555-9876<br></p>			
					</div>
					<!-- ==============================================
					Social
					=============================================== -->
					<div class="col-sm-6">
						<ul class="social float-right">	
							<li><a href="#" class="social-button-google-plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="social-button-twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="social-button-facebook"><i class="fa fa-facebook"></i></a></li>
						</ul>
						<p class="no-margin-bottom float-right copyright">Copyright &copy; 2014 <a href="#">Spartan Race, Inc.</a> All rights reserved</p>
					</div>
					<!-- End Social
					============================================== -->
				</div>
			</div>
		</section>
		<!-- End Footer
		============================================== -->

		<!-- ==============================================
		JS
		=============================================== -->
		<script type="text/javascript" src="js/modernizr.js"></script>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.flexslider.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.pack.js"></script>
		<script type="text/javascript" src="js/jquery.mousewheel.pack.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
		<script type="text/javascript" src="js/smoothscroll.js"></script>
		<script type="text/javascript" src="js/attraction.js"></script>
		<script type="text/javascript">
		     // Get the current URL
            var currentUrl = window.location.pathname;

            // Get the span you want with a combination class and attribute and child jQuery selector
            var currentMenuItem = $(".nav a[href='" + currentUrl + "']");

            // Then add your class
            currentMenuItem.parent().addClass("active");
		
		</script>

	</body>
</html>