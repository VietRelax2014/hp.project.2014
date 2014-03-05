<?php
/*
 * 
 * 
 * */
?>
	<video id="video-player" class="fhd-video video-js vjs-default-skin" controls
		preload="none" width="760" height="430"
		poster="http://video-js.zencoder.com/oceans-clip.png" data-setup="{}">
		<source src='{{$videoLst["file"]}}' type='video/mp4' />
		<!-- <source src='<?php //echo ( $listVideo['file'] )?>' type='video/webm' />
		<source src='<?php //echo ( $listVideo['file'] )?>' type='video/ogg' /> -->
		<track kind="captions" src="video-player/demo.captions.vtt" srclang="en" label="English"></track>
		<track kind="subtitles" src="video-player/demo.captions.vtt" srclang="en" label="English"></track>
	</video>
