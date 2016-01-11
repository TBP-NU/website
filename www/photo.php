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
			whiteList: '2015|2016',

			// for otpions, see: http://nanogallery.brisbois.fr/#documentation
			colorScheme:'none',
			thumbnailWidth: 200,
			thumbnailHeight: 160,
			thubmnailGutterWidth: 0,
			thubnailGutterHeight: 0,
			thumbnailHoverEffect: [
                { name: 'borderLighter', duration: 300, durationBack: 200, delay: 200 }
			],
			i18n: {
				thumbnailImageDescription: 'View Photo',
				thumbnailAlbumDescription: 'Open Album'
			},
			thumbnailLabel: {
				position:'onBottom',
				align: 'center',
				display: true,
				displayDescription: false,
				hideIcons: true
			},
			paginationMaxLinesPerPage: 4,
			thumbnailLazyLoad: true
		});
	// });
</script>
<?php
	include "footer.php";
?>