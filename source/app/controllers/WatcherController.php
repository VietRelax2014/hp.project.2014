<?php
/**
 *  File Name  :   WatcherController.php
 *
 *  Version    :   1.0
 *  =======================================================
 *  History    : 
 *
 *  DATE          AUTHOR       DESCRIPTION 
 *  -------------------------------------------------------- 
 *  04-03-2014    Phuong.nm    Create new
 */
 
class WatcherController extends BaseController {
	function __construct() {
	}
	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'WatcherController@watching');
	|
	*/

	public function watching($id)
	{
		$id;
		if($id == 'youtube'){
			$url = 'https://www.youtube.com/watch?v=RoYp2_FiaDw';
		}else{
			$url = "picasaweb.google.com/111040630923099652763/SlaveHDFull?authkey=Gv1sRgCOLJho2OsrKfqQE#5982122455101961538";
		}
		
		if(strpos($url , 'picasaweb') !== false){
			$isJW = false;
			require_once app_path('util/getLink.class.php');
			$getLink = new getPicasaURL();
			$videoLst = $getLink->getDirectURL($url);
		}else{
			$isJW = true;
			$videoLst = array('file' => $url,'large.file' => $url );
		}
		
		$data = array(
					'page' => 'watching',
					'isJWplayer' => $isJW,
					'videoLst' => $videoLst
				);
		
		return View::make('watcher.watching',$data);
	}
}