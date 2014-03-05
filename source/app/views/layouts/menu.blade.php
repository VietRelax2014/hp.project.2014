<style>
.ph-navigation {
	display: inline-block;
}

.ph-navigation ul,.ph-navigation ul li {
	display: inline-block;
}

.ph-navigation:after,.ph-navigation:before {
	margin-top: 0.5em;
	content: "";
	border: 1.5em solid #eaebee;
}

.ph-navigation:after {
	border-right-color: transparent;
	float: right;
}

.ph-navigation:before {
	border-left-color: transparent;
	float: left;
}

.ph-navigation a:link,.ph-navigation a:visited {
	color: #000;
	text-decoration: none;
	float: left;
	height: 3.5em;
	overflow: hidden;
}

.ph-navigation span {
	background: #eaebee;
	display: inline-block;
	line-height: 3em;
	padding: 0 1em;
	margin-top: 0.5em;
	position: relative;
	-webkit-transition: background-color 0.2s, margin-top 0.2s;
	/* Saf3.2+, Chrome */
	-moz-transition: background-color 0.2s, margin-top 0.2s; /* FF4+ */
	-ms-transition: background-color 0.2s, margin-top 0.2s; /* IE10 */
	-o-transition: background-color 0.2s, margin-top 0.2s;
	/* Opera 10.5+ */
	transition: background-color 0.2s, margin-top 0.2s;
}

.ph-navigation a:hover span {
	background: #FFD204;
	margin-top: 0;
}

.ph-navigation span:before {
	content: "";
	position: absolute;
	top: 3em;
	left: 0;
	border-right: 0.5em solid #9B8651;
	border-bottom: 0.5em solid #eaebee;
}

.ph-navigation span:after {
	content: "";
	position: absolute;
	top: 3em;
	right: 0;
	border-left: 0.5em solid #9B8651;
	border-bottom: 0.5em solid #eaebee;
}

.ph-has-sub li {
	line-height: 40px;
}

.ph-sub {
	margin-left: 10px;
}

.ph-sub a {
	height: 40px;
	padding-left: 20px;
}

.ph-has-sub li {
	display: block;
	height: 40px;
	width: 200px;
}

li.ph-has-sub>ul.ph-sub {
	display: none;
	z-index: 100;
	width: 200px;
}

li.sub-hidden>ul.ph-sub {
	left: 200px;
	top: 0px;
}

.ph-sub a {
	height: 40px !important;
}

li:hover>ul.ph-sub {
	display: block !important;
}

ul.ph-sub li {
	display: block;
}

li.ph-has-sub {
	position: relative;
}

ul.ph-sub {
	position: absolute;
	top: 60px;
	background: #eaebee;
	left: 5px;
}
</style>

<div class="hdv-three-fifth">
	<div class='ph-navigation'>
		<ul>
			<li><a href='#'><span>Home</span></a></li>
			<li class="ph-has-sub"><a href="#"><span>Pages</span></a>
				<ul class="ph-sub">
					<li class="ph-has-sub sub-hidden"><a href="#">Pages 1</a>
						<ul class="ph-sub">
							<li><a href="#">Menu level 2</a></li>
						</ul></li>
					<li><a href="#">Pages 2</a></li>
					<li class="ph-has-sub sub-hidden"><a href="#">Pages 3</a>
						<ul class="ph-sub">
							<li><a href="#">Menu level 2.1</a></li>
						</ul></li>
				</ul></li>
			<li><a href='#'><span>About</span></a></li>
			<li><a href='#'><span>Services</span></a></li>
			<li><a href='#'><span>Contact</span></a></li>
		</ul>
	</div>

</div>
<div class="hdv-one-fifth hdv-last">
	<div class="hdv-search-header">
		<i class="icon-magnifier"></i>
	</div>
	<!-- End Search Header -->
</div>