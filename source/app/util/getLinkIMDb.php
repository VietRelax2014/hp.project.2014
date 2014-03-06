<?php

class getLinkIMDb {
	private $ch;
	private $data;
	private $page;
	
	function __construct($url) {
		$url="http://www.imdb.com/find?q=Mr.%20Peabody%20&%20Sherman";
		$this->ch = curl_init();
		curl_setopt($this->ch, CURLOPT_URL, $url);
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
	}
	
	public function exec() {
		$this->page = curl_exec($this->ch);
		var_dump($this->page);
		curl_close($this->ch);
		
		
	}
}

?>