<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@redirectHome');
	|
	*/

	public function redirectHome()
	{
		$sliderArr = array (
				'poster-thumbs' => 'layouts/images/slider-images/slides/thumbs/bridge.jpg',
				'poster' => 'layouts/images/slider-images/slides/bridge.jpg',
				'titleEn' => 'The Monkey King (2014)',
				'titleVn' => 'Đại Náo Thiên Cung',
				'description' => 'The monkey king được thực hiện dựa trên vào tiểu thuyết Tây du ký,
									kể về câu chuyện nổi tiếng Tôn Ngộ Không đại náo thiên đình bị
									Phật Tổ giam vào ngọn núi. Sau mấy trăm năm được nhà sư ...',
				'location' => 'Trung Quốc',
				'category' => array('Hành động','Sử thi - Cổ trang','Phiêu lưu','Gia đình'),
				'actor' => array('Chung Tử Đơn (Donnie Yen)','Châu Nhuận Phát (Donald Chow)','Quách Phú Thành (Aaron Kwok)','Lương Vịnh Kỳ'),
				'imdb' => '5.4',
				'duration' => '112 phút',
				'linkFilm' => '/watcher/youtube',
		);

		$carouselArr = array('name' => 3, 'id' => 4);

		$data = array(
					'page' => 'home',
					'sliderArr' => $sliderArr,
					'carouselArr' => $carouselArr
				);
		return View::make('home', $data);
	}
}