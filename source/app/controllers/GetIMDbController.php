<?php

class GetIMDbController extends BaseController {

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

	public function doView()
	{
		return View::make('getIMDbDemo' , array('page' => 'imdb'));
	}

	public function getIMDbByURL($id)
	{
		$url = ( 'http://www.imdb.com/title/' . $id . '/');
		require_once app_path('util/imdbGetter.php');
		$imdb = new imdbGetter($url);
		$data = array(
				'page' => 'imdb',
				'imdb' => $imdb->exec()
		);

		return($data);
	}
}