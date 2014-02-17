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
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-8299720-49', 'spartanupthebook.com');
		  ga('send', 'pageview');
		
		</script>

	</body>
</html>