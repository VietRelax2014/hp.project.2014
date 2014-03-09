
<!-- SLIDER CONTAINER
********************************************** -->
<div class="slider_content">
	<div class="slider_wrap slider_emboss pattern_1" id="hdv-slider-wrap">
		<div data-thumb="{{$sliderArr['poster-thumbs'] or ''}}" data-src="{{$sliderArr['poster'] or ''}}">
			<div class="caption elemHover ">
				<div class="object_caption">
					<h4>
						<a href="#"> {{$sliderArr['titleEn'] or ''}} </a>
					</h4>
					<h5> {{$sliderArr['titleVn'] or ''}} </h5>
					<p class="description_detail_p">
						{{$sliderArr['description'] or ''}} ...
						<br>
						<a style="color:#FFD145" href="#">xem thêm</a>
					</p>
					<ul class="description_detail_ul">
						<li>
							<span>Quốc gia : </span> <a href="#">{{$sliderArr['location'] or ''}}</a>
						</li>
						<li>
							<span>Thể loại : </span>
							@foreach ($sliderArr['category'] as $cat)
								<a href="#search">{{$cat}}</a>,
							@endforeach
						</li>
						<li>
							<span>Diễn viên : </span>
							@foreach ($sliderArr['actor'] as $actor)
								<a href="#search">{{$actor}}</a>,
							@endforeach
							...
						</li>
						<li>
							<span>IMDB : </span> {{$sliderArr['imdb'] or ''}}
						</li>
						<li>
							<span>Thời lượng : </span> {{$sliderArr['duration'] or ''}}
						</li>
					</ul>
					<a href="{{$sliderArr['linkFilm'] or ''}}" class="dp-btn dp-btn-yellow see_a-link">Xem phim</a>
				</div>
			</div>
		</div>
		<div data-thumb="{{$sliderArr['poster-thumbs'] or ''}}" data-src="{{$sliderArr['poster'] or ''}}">
			<div class="caption elemHover ">
				<div class="object_caption">
					<h4>
						<a href="#"> {{$sliderArr['titleEn'] or ''}} </a>
					</h4>
					<h5> {{$sliderArr['titleVn'] or ''}} </h5>
					<p class="description_detail_p">
						{{$sliderArr['description'] or ''}} ...
						<br>
						<a style="color:#FFD145" href="#">xem thêm</a>
					</p>
					<ul class="description_detail_ul">
						<li>
							<span>Quốc gia : </span> <a href="#">{{$sliderArr['location'] or ''}}</a>
						</li>
						<li>
							<span>Thể loại : </span>
							@foreach ($sliderArr['category'] as $cat)
								<a href="#search">{{$cat}}</a>,
							@endforeach
						</li>
						<li>
							<span>Diễn viên : </span>
							@foreach ($sliderArr['actor'] as $actor)
								<a href="#search">{{$actor}}</a>,
							@endforeach
							...
						</li>
						<li>
							<span>IMDB : </span> {{$sliderArr['imdb'] or ''}}
						</li>
						<li>
							<span>Thời lượng : </span> {{$sliderArr['duration'] or ''}}
						</li>
					</ul>
					<a href="{{$sliderArr['linkFilm'] or ''}}" class="dp-btn dp-btn-yellow see_a-link">Xem phim</a>
				</div>
			</div>
		</div>
		<div data-thumb="/layouts/images/slider-images/slides/thumbs/road.jpg" data-src="layouts/images/slider-images/slides/road.jpg">
			<div class="caption elemHover ">
				<div class="object_caption">
					<h3>
						<a href="#"> The Monkey King (2014) </a>
					</h3>
					<h4> Đại Náo Thiên Cung </h4>
					<p class="description_detail_p">
						The monkey king được thực hiện dựa trên vào tiểu thuyết Tây du ký,
						kể về câu chuyện nổi tiếng Tôn Ngộ Không đại náo thiên đình bị
						Phật Tổ giam vào ngọn núi. Sau mấy trăm năm được nhà sư ...
						<br>
						<a style="color:#FFD145" href="#">xem thêm</a>
					</p>
					<ul class="description_detail_ul">
						<li>
							<span>Quốc gia : </span> <a href="#">Trung Quốc</a>
						</li>
						<li>
							<span>Thể loại : </span>
							<a href="#search">Hành động</a>,
							<a href="#search">Sử thi - Cổ trang</a>,
							<a href="#search">Phiêu lưu</a>,
							<a href="#search">Gia đình</a>
						</li>
						<li>
							<span>Diễn viên : </span>
							<a href="#search">Chung Tử Đơn (Donnie Yen)</a>,
							<a href="#search">Châu Nhuận Phát (Donald Chow)</a>,
							<a href="#search">Quách Phú Thành (Aaron Kwok)</a>,
							<a href="#search">Lương Vịnh Kỳ</a>...
						</li>
						<li>
							<span>IMDB : </span> 5.4
						</li>
						<li>
							<span>Thời lượng : </span> 112 phút
						</li>
					</ul>
					<a href="#" class="dp-btn dp-btn-yellow see_a-link">Xem phim</a>
				</div>
			</div>
		</div>
		<div data-thumb="/layouts/images/slider-images/slides/thumbs/sea.jpg" data-src="/layouts/images/slider-images/slides/sea.jpg"></div>
		<div
			data-thumb="/layouts/images/slider-images/slides/thumbs/shelter.jpg"
			data-src="/layouts/images/slider-images/slides/shelter.jpg"></div>
		<div data-thumb="/layouts/images/slider-images/slides/thumbs/tree.jpg"
			data-src="/layouts/images/slider-images/slides/tree.jpg"></div>
	</div>
</div>