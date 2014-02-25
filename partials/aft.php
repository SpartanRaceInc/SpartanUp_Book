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

            // Remove the "/"
            var pageName = currentUrl.substring(1,currentUrl.length);

            // Get the span you want with a combination class and attribute and child jQuery selector
            var currentMenuItem = $(".nav a[href='" + pageName + "']");

            // Then add your class
            currentMenuItem.parent().addClass("active");
            
            // Initialize audioPlayer
			$( function() { $( 'audio' ).audioPlayer(); } );
			  
		
		</script>
		<!-- AddThis Smart Layers BEGIN -->
		<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-530ca84d328277ea"></script>
		<script type="text/javascript">
		  addthis.layers({
		    'theme' : 'dark',
		    'share' : {
		      'position' : 'left',
		      'numPreferredServices' : 5
		    }   
		  });
		</script>
		<!-- AddThis Smart Layers END -->

	</body>
</html>