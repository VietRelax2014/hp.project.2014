@include('layouts.header')
<style type="text/css">
	.fhd-getIMDb{
		width:50%;margin:0 auto;
	}
	.imdbInfo .info{
		display:none;
		position:relative;
		margin-top: 40px;
	}
	.imdbInfo img{
		height:214px;
		width: 137px;
		position: absolute;
		right: 0px;
		top: 0px;
	}
	#imdb-id-label{
		width:25%;
	}
	#imdb-id{
		width:40%;
	}
	
	
.imdb-loading {
  	margin: 50px auto;
	width: 50px;
	height: 50px;
  	position: relative;
  	display:none;
}

.container1 > div, .container2 > div, .container3 > div {
  width: 15px;
  height: 15px;
  background-color: #3bb3e0;

  border-radius: 100%;
  position: absolute;
  -webkit-animation: bouncedelay 1.2s infinite ease-in-out;
  animation: bouncedelay 1.2s infinite ease-in-out;
  /* Prevent first frame from flickering when animation starts */
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.imdb-loading .imdb-loading-container {
  position: absolute;
  width: 100%;
  height: 100%;
}

.container2 {
  -webkit-transform: rotateZ(45deg);
  transform: rotateZ(45deg);
}

.container3 {
  -webkit-transform: rotateZ(90deg);
  transform: rotateZ(90deg);
}

.circle1 { top: 0; left: 0; }
.circle2 { top: 0; right: 0; }
.circle3 { right: 0; bottom: 0; }
.circle4 { left: 0; bottom: 0; }

.container2 .circle1 {
  -webkit-animation-delay: -1.1s;
  animation-delay: -1.1s;
}

.container3 .circle1 {
  -webkit-animation-delay: -1.0s;
  animation-delay: -1.0s;
}

.container1 .circle2 {
  -webkit-animation-delay: -0.9s;
  animation-delay: -0.9s;
}

.container2 .circle2 {
  -webkit-animation-delay: -0.8s;
  animation-delay: -0.8s;
}

.container3 .circle2 {
  -webkit-animation-delay: -0.7s;
  animation-delay: -0.7s;
}

.container1 .circle3 {
  -webkit-animation-delay: -0.6s;
  animation-delay: -0.6s;
}

.container2 .circle3 {
  -webkit-animation-delay: -0.5s;
  animation-delay: -0.5s;
}

.container3 .circle3 {
  -webkit-animation-delay: -0.4s;
  animation-delay: -0.4s;
}

.container1 .circle4 {
  -webkit-animation-delay: -0.3s;
  animation-delay: -0.3s;
}

.container2 .circle4 {
  -webkit-animation-delay: -0.2s;
  animation-delay: -0.2s;
}

.container3 .circle4 {
  -webkit-animation-delay: -0.1s;
  animation-delay: -0.1s;
}

@-webkit-keyframes bouncedelay {
  0%, 80%, 100% { -webkit-transform: scale(0.0) }
  40% { -webkit-transform: scale(1.0) }
}

@keyframes bouncedelay {
  0%, 80%, 100% { 
    transform: scale(0.0);
    -webkit-transform: scale(0.0);
  } 40% { 
    transform: scale(1.0);
    -webkit-transform: scale(1.0);
  }
}
	
</style>
<div class="fhd-getIMDb">
	<form class="fhd-form" action="/" method="post">
		<label> <span id="imdb-id-label">IMDb ID : (required)</span>
			<input placeholder="" type="text" id="imdb-id" required autofocus>
			<a class="fhd-button" href="#"> Get IMDb</a>
		</label>

		<div class="imdbInfo">
			<div class="imdb-loading">
			  <div class="imdb-loading-container container1">
			    <div class="circle1"></div>
			    <div class="circle2"></div>
			    <div class="circle3"></div>
			    <div class="circle4"></div>
			  </div>
			  <div class="imdb-loading-container container2">
			    <div class="circle1"></div>
			    <div class="circle2"></div>
			    <div class="circle3"></div>
			    <div class="circle4"></div>
			  </div>
			  <div class="imdb-loading-container container3">
			    <div class="circle1"></div>
			    <div class="circle2"></div>
			    <div class="circle3"></div>
			    <div class="circle4"></div>
			  </div>
			</div>
			<div class="info">
				<img id="imdb-thumb" src="#" />
				<label> <span>Title</span>
					<input placeholder="" type="text" id="imdb-title" required autofocus>
				</label>
				<label> <span>Year</span>
					<input placeholder="" type="text" id="imdb-year" required autofocus>
				</label>
				<label> <span>Actor</span>
					<input placeholder="" type="text" id="imdb-actor" required autofocus>
				</label>
				<label> <span>Category</span>
					<input placeholder="" type="text" id="imdb-category" required autofocus>
				</label>
				<label> <span>Director</span>
					<input placeholder="" type="text" id="imdb-director" required autofocus>
				</label>
				<label> <span>Duration</span>
					<input placeholder="" type="text" id="imdb-duration" required autofocus>
				</label>
				<label> <span>Rate</span>
					<input placeholder="" type="text" id="imdb-rate" required autofocus>
				</label>
			</div>
		</div>
	</form>
</div>

@include('layouts.footer')
