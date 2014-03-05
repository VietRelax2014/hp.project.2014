		
	<style type="text/css">
	

	
	#category_content {
		margin: 0 auto;
		width: 880px;
		display: table;
	}
	
	.thumb {
		display:block;
		width:200px;
		height:300px;
		position:relative;
		margin-bottom:20px;
		margin-right:20px;
		float:left;
	}
	
	.thumb-wrapper {
		display:block;
		width:100%;
		height:100%;
	}
	
	.thumb img {
		width:100%;
		height:100%;
		position:absolute;
		display:block;			
				
	}
		
	.thumb .thumb-detail {
		display:block;
		width:100%;
		height:100%;
		position:absolute;			
		background:#fff;
		font-family:arial;
		font-weight:bold;
		font-size:16px;			
	}
		
	.thumb .thumb-detail a {
		display:block;
		width:100%;
		height:100%;
		text-transform:uppercase;
		font-weight:bold;	
		color:#333;
		text-decoration:none;		
		font-family: 'Open Sans', sans-serif;
		letter-spacing:-1px;
		padding:10px;	
		font-size:18px;
	}		
	
	/*
	* Without CSS3
	*/
	.thumb.scroll {
		overflow: hidden;
	}	
	
	.thumb.scroll .thumb-detail {
		bottom:-280px;
	}
	
	
	/*
	* CSS3 Flip
	*/	
	.thumb.flip {
		-webkit-perspective:800px;		
		   -moz-perspective:800px;
		    -ms-perspective:800px;		   		
		     -o-perspective:800px;
  		        perspective:800px;
	}
	
		.thumb.flip .thumb-wrapper {
			-webkit-transition: -webkit-transform 1s;
			   -moz-transition: -moz-transform 1s;
			    -ms-transition: -moz-transform 1s;
			     -o-transition: -moz-transform 1s;
			        transition: -moz-transform 1s;
			-webkit-transform-style: preserve-3d;
			   -moz-transform-style: preserve-3d;			
			    -ms-transform-style: preserve-3d;			
			     -o-transform-style: preserve-3d;			
					  transform-style: preserve-3d;			
		}
		
		.thumb.flip .thumb-detail {
			-webkit-transform: rotateY(-180deg);
			   -moz-transform: rotateY(-180deg);
			    -ms-transform: rotateY(-180deg);
			     -o-transform: rotateY(-180deg);
			        transform: rotateY(-180deg);			   			
		}
		
		.thumb.flip img,
		.thumb.flip .thumb-detail {
			-webkit-backface-visibility: hidden;
			   -moz-backface-visibility: hidden;
			    -ms-backface-visibility: hidden;
			     -o-backface-visibility: hidden;
			        backface-visibility: hidden;
		}
		
		.thumb.flip .flipIt {
			-webkit-transform: rotateY(-180deg);
			   -moz-transform: rotateY(-180deg);			
			    -ms-transform: rotateY(-180deg);			
			     -o-transform: rotateY(-180deg);			
			        transform: rotateY(-180deg);			
		}
	
	</style>
	
<div id="category_content">
	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="images/9.jpeg" alt="" />
			<div class="thumb-detail">
				<a href="#">
					Weekly Design Inspiration #4
				</a>				
			</div>
		</div>
	</div>		
	
	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="images/2.jpeg" alt="" />
			<div class="thumb-detail">
				<a href="#">
					CREATIVE THE AVENGERS ILLUSTRATIONS
				</a>
			</div>
		</div>
	</div>
	
	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="images/3.jpeg" alt="" />
			<div class="thumb-detail">
				<a href="#">
					WEEKLY DESIGN INSPIRATIONS #3
				</a>				
			</div>
		</div>
	</div>
	
	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="images/4.jpeg" alt="" />
			<div class="thumb-detail">
				<a href="#">
					ULTRA REALISTIC IOS ICON SHOWCASE
				</a>				
			</div>
		</div>
	</div>
	

	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="images/1.jpeg" alt="" />
			<div class="thumb-detail">
				<a href="#">
					STUNNING PARALLAX SCROLL WEBSITES
				</a>
			</div>
		</div>
	</div>	
	
	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="images/6.jpeg" alt="" />
			<div class="thumb-detail">
				<a href="#">
					FULL OF HEARTS INSPIRATIONS <3
				</a>				
			</div>
		</div>
	</div>

	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="images/5.jpeg" alt="" />
			<div class="thumb-detail">
				<a href="#">
					WEEKLY DESIGN INSPIRATIONS #2
				</a>				
			</div>
		</div>
	</div>
	
	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="images/7.jpeg" alt="" />
			<div class="thumb-detail">
				<a href="#">
					IOS INTERFACE INSPIRATIONS #1
				</a>				
			</div>
		</div>
	</div>	
	
	
	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="images/8.jpeg" alt="" />
			<div class="thumb-detail">
				<a href="#">
					Weekly Design Inspiration
				</a>				
			</div>
		</div>
	</div>
</div>	