@include ('layouts.header')

@if($isJWplayer)
	<!-- JW player -->
	<script type="text/javascript" src="/players/jw-player/jwplayer.js"></script>
	<script type="text/javascript" src="/players/jw-player/jwplayer.html5.js"></script>
	<script type="text/javascript">jwplayer.key="ouYZjbXvSSNYdjguX/rr7IYqgeq17Z9EuAD8ITkj3at+UMBzQwfexR2KMdVNqJ1u";</script>
@else
	<!-- Video player -->
	<link type="text/css" href="/players/video-player/video-js.css" rel="stylesheet">
	<script type="text/javascript" src="/players/video-player/video.js"></script>
@endif

	<div class="video_container">
		@if($isJWplayer)
			@include ('players.jw-player');
		@else
			@include ('players.video-player');
		@endif
	</div>

@include ('layouts.footer')