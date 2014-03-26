		<!-- ==============================================
		JS
		=============================================== -->
		<script type="text/javascript" src="js/modernizr.js"></script>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
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
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52fd2db377ed9923"></script>
		<script type="text/javascript">
		  addthis.layers({
		    'theme' : 'transparent',
		    'share' : {
		      'position' : 'left',
		      'numPreferredServices' : 5
		    }   
		  });
		</script>
		<!-- AddThis Smart Layers END -->

		
		<!-- Amazon Tracking Pixel: -->
		<img src="http://ir-na.amazon-adsystem.com/e/ir?t=spartanraceco-20&amp;l=as2&amp;o=1&amp;a=0544286170" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important; height:1px !important; width:1px !important;" />
	</body>
</html>