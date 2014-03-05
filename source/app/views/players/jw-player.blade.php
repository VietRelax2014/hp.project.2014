<?php
/*
 * 
 * 
 * */
?>
	<div class="fhd-video">
		<div id="jw-player">Nội dung khi không có video</div>
	</div>
	<script type='text/javascript'>
		jwplayer('jw-player').setup({
			file: '{{$videoLst["large.file"]}}',
			width: '760',
			height: '430',
			fallback: 'false',
			skin: "five",
			logo: {
				/* file: "https://lh4.googleusercontent.com/m2TUGgl8PkFFEOoaBCtRjJ7DAHhvdV3_b6Kmk1glqVI=w368-h207-p-no",
				link: "http://google.com" */
			}
		});
	</script>