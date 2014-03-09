@extends('layouts.footer')
@if( $isJWplayer ) 
	@section('footer-script')
		<script type='text/javascript'>
			jwplayer('jw-player').setup({
				file: '{{$videoLst["file"]}}',
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
	@stop
@endif

@include ('layouts.header')

@if($isJWplayer)
	<!-- JW player -->
	<script type="text/javascript" src="/players/jw-player/jwplayer.js"></script>
	<script type="text/javascript" src="/players/jw-player/jwplayer.html5.js"></script>
	<script type="text/javascript">jwplayer.key="8lAh0ZMotADZ2AxlXUArIQmgsqBaucqKYuyxJEEbU5BG4yD0K1pQvVZLiuWTGvz9";</script>
@else
	<!-- Video player -->
	<link type="text/css" href="/players/video-player/video-js.css" rel="stylesheet">
	<script type="text/javascript" src="/players/video-player/video.js"></script>
@endif

	<div class="video_content">
		@if($isJWplayer)
			<div class="fhd-video">
				<div id="jw-player">Nội dung khi không có video</div>
			</div>
		@else
			<video id="video-player" class="fhd-video video-js vjs-default-skin" controls
				preload="none" width="760" height="430"
				poster="http://video-js.zencoder.com/oceans-clip.png" data-setup="{}">
				<source src='{{$videoLst["file"]}}' type='video/mp4' />
				<!-- <source src='<?php //echo ( $listVideo['file'] )?>' type='video/webm' />
				<source src='<?php //echo ( $listVideo['file'] )?>' type='video/ogg' /> -->
				<track kind="captions" src="video-player/demo.captions.vtt" srclang="en" label="English"></track>
				<track kind="subtitles" src="video-player/demo.captions.vtt" srclang="en" label="English"></track>
			</video>
		@endif
	</div>