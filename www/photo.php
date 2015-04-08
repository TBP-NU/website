<?php
	include "head.php";
	include "header.php"; ?>
 <div class="photo">
	<div class="row" align="center">
    	<div class="large-12 columns">
			<br>
			<h1>Photo Gallery</h1>
			<br>
			
   		 <!-- FB Photo Gallery -->
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
		    <script src="js/galleria/galleria-1.4.2.min.js"></script>
		    <style>
		        .galleria{ width: 700px; height: 400px; background: #000 }
		    </style>

			<script src="js/galleria/facebook/galleria.facebook.js"></script>
			<div class="galleria">
				<img src="img/slideshow/alumeventWI15.jpg">
			    <img src="img/slideshow/pidayrun.jpg">
				<script>
				    Galleria.loadTheme('js/galleria/themes/classic/galleria.classic.min.js');
				    Galleria.run('.galleria', {
				    	// I can't figure out why this doesn't work...maybe need public album??
				    	// facebook: 'album:528186577284692',
				    	width: 745,
				    	height: 550,
				    	lightbox: true,
				    	facebookOptions: {
				    		max: 30
				    	}
				    });
				</script>
			</div>

			<!-- link to Picasa Web Albums -->
			<div>
			<table style="width:194px;display: inline-block;"><tr><td align="center" style="height:194px;background:url(https://www.gstatic.com/pwa/s/v/lighthousefe_20150223.00_p0/transparent_album_background.gif) no-repeat left"><a href="https://picasaweb.google.com/103493325795015324907/2015PiDayRun?authuser=0&feat=embedwebsite"><img src="https://lh3.googleusercontent.com/-rFZgy_2UV1g/VR9xPHlUgpE/AAAAAAAAAKY/rDNJq8mHVr4/s160-c/2015PiDayRun.jpg" width="160" height="160" style="margin:1px 0 0 4px;"></a></td></tr><tr><td style="text-align:center;font-size:11px"><a href="https://picasaweb.google.com/103493325795015324907/2015PiDayRun?authuser=0&feat=embedwebsite" style="color:#4D4D4D;font-weight:bold;text-decoration:none;">2015 Pi Day Run</a></td></tr></table>
			<table style="width:194px;display: inline-block;"><tr><td align="center" style="height:194px;background:url(https://www.gstatic.com/pwa/s/v/lighthousefe_20150223.00_p0/transparent_album_background.gif) no-repeat left"><a href="https://picasaweb.google.com/103493325795015324907/BentPolishing?authuser=0&feat=embedwebsite"><img src="https://lh3.googleusercontent.com/-MFGmFqabQIo/TzWAaL9KtTE/AAAAAAAAAAQ/X56vgXLRiig/s160-c/BentPolishing.jpg" width="160" height="160" style="margin:1px 0 0 4px;"></a></td></tr><tr><td style="text-align:center;font-size:11px"><a href="https://picasaweb.google.com/103493325795015324907/BentPolishing?authuser=0&feat=embedwebsite" style="color:#4D4D4D;font-weight:bold;text-decoration:none;">Bent Polishing</a></td></tr></table>
			</div>
			
			<!-- Embedded Slide Show -->
			<embed type="application/x-shockwave-flash" src="https://photos.gstatic.com/media/slideshow.swf" width="400" height="350" flashvars="host=picasaweb.google.com&hl=en_US&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F103493325795015324907%2Falbumid%2F6133745722049462929%3Falt%3Drss%26kind%3Dphoto%26hl%3Den_US" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
	
			<!-- Flash photo viewer -->
			<object height="600" width="600"> <param name="movie" value="http://www.paulvanroekel.nl/picasawebalbums/embed/simpleviewer/simpleviewer.swf?galleryURL=http://www.paulvanroekel.nl/picasawebalbums/embed/simpleviewer/xml.php?username=103493325795015324907%26albumname=2015PiDayRun"></param> <param name="allowscriptaccess" value="always"></param> <param name="wmode" value="transparent"></param> <embed src="http://www.paulvanroekel.nl/picasawebalbums/embed/simpleviewer/simpleviewer.swf?galleryURL=http://www.paulvanroekel.nl/picasawebalbums/embed/simpleviewer/xml.php?username=103493325795015324907%26albumname=2015PiDayRun" type="application/x-shockwave-flash" wmode="transparent" allowscriptaccess="always" width="600" height="400"></embed></object> 

		</div>
	</div>
</div>
<?php
	include "footer.php";
?>