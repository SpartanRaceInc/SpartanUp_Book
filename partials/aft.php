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
		<script type="text/javascript" src="js/audioplayer.min.js"></script>
		<script type="text/javascript">
		     // Get the current URL
            var currentUrl = window.location.pathname;

            // Get the span you want with a combination class and attribute and child jQuery selector
            var currentMenuItem = $(".nav a[href='" + currentUrl + "']");

            // Then add your class
            currentMenuItem.parent().addClass("active");
            
            // Initialize audioPlayer
			$( function() { $( 'audio' ).audioPlayer(); } );
			  
		
		</script>

	</body>
</html>