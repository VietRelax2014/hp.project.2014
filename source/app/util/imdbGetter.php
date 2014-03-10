<?php

class imdbGetter {
	private $ch;
	private $data;
	private $page;
	
	function __construct($url) {
		$this->ch = curl_init();
		curl_setopt($this->ch, CURLOPT_URL, $url);
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
	}
	
	public function exec() {
		$this->page = curl_exec($this->ch);
		curl_close($this->ch);
		
		$regex = '/<span class="itemprop" itemprop="name">(.*)<\/span>/';
		preg_match($regex, $this->page, $match);	
		if (isset($match[1])) {
			$data['title'] = $match[1];
		}
	
		$regex = '/<a href="\/year\/(.*)\/\?ref_=tt_ov_inf" >(.*)<\/a>/';
		preg_match($regex, $this->page, $match);
		if (isset($match[1])) {
			$data['year'] = $match[1];
		}

		$regex = '/<meta itemprop="contentRating" content="(.*)" \/>/';
		preg_match($regex, $this->page, $match);
		if (isset($match[1])) {
			$data['grene'] = $match[1];
		}

		$regex = '/<a href="\/genre\/(.*)\?ref_=tt_ov_inf" >/';
		preg_match_all($regex, $this->page, $match);
		if (isset($match[1])) {
			$data['category'] = $match[1];
		}

		$regex = '/<link rel=\'image_src\' href="(.*)">/';
		preg_match($regex, $this->page, $match);
		if (isset($match[1])) {
			$data['thumb'] = $match[1];
		}

		$regex = '/\/\?ref_=tt_ov_dr" itemprop=\'url\'><span class="itemprop" itemprop="name">(.*)<\/span><\/a>/';
		preg_match($regex, $this->page, $match);
		if (isset($match[1])) {
			$data['director'] = $match[1];
		}

		$regex = '/\/\?ref_=tt_ov_st" itemprop=\'url\'><span class="itemprop" itemprop="name">(.*)<\/span><\/a>/';
		preg_match_all($regex, $this->page, $match);
		if (isset($match[1])) {
			$data['actor'] = $match[1];
		}

		$regex = '/<time itemprop="duration" datetime="PT(.*)M" >/';
		preg_match($regex, $this->page, $match);
		if (isset($match[1])) {
			$data['duration'] = $match[1];
		}

		$regex = '/<strong><span itemprop="ratingValue">(.*)<\/span><\/strong>/';
		preg_match($regex, $this->page, $match);
		if (isset($match[1])) {
			$data['rate'] = $match[1];
		}
		
		$regex = '/<p itemprop="description">(.*)<\/p>/';
		preg_match($regex, $this->page, $match);
		if (isset($match[1])) {
			$data['description'] = $match[1];
		}
		
		return $data; 
		unset($data);
	}
	
	public function getValue($val){
		
	}
	
	public function save_thumbnail() {
		$saveTo = str_replace(" ","",strtolower($data['title']));
		if (!file_exists("../img/".$saveTo.".jpg")) {
			$ch = curl_init($data['thumb']);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
			$img = curl_exec($ch);
			file_put_contents("../img/".$saveTo.".jpg",$img);
		}
	}
}

?>