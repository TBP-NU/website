<?php
	include "head.php";
	include "header.php"; ?>
	
<div class="photo">
	<div class="row">
    	<div class="large-12 columns">
		<br>
		<h1>Photo Gallery</h1>
		<br>
		<div id="gallery"></div>
		</div>
	</div>
</div>

<script>
	// $(document).ready( function() {
		$("#gallery").nanoGallery({
			// photo source
			kind: 'picasa',
			userID: '103493325795015324907',
			// display albums with keywords
			whiteList: '2015|Bent',

			// for otpions, see: http://nanogallery.brisbois.fr/#documentation
			thumbnailWidth: '200C',
			thumbnailHeight: '200C',
			thubmnailGutterWidth: 0,
			thubnailGutterHeight: 0,
			thumbnailHoverEffect: [
				{ name: 'labelAppear75', duration: 300 },
				{ name: 'scale120', duration: 300 },
			],
			thumbnailLabel: {
				position:'overImageOnBottom',
				align: 'center',
				display: true,
				displayDescription: false,
				hideIcons: false
			},
			paginationMaxLinesPerPage: 3
		});
	// });
</script>
<?php
	include "footer.php";
?>