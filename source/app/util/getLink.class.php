<?php
/**
 * Method : getDirectURL
 * @param String $url
 */
class getPicasaURL{
	public function getDirectURL($url){
		if(strpos($url , 'picasaweb') !== false){
			$text = $this->getCurrentURL($url);
			$patten = '/\{"url":"http:\/\/redirector.googlevideo.com\/videoplayback(.+?)\}/';
			preg_match_all($patten,$text, $match);
			if (count($match[0]) > 0)
			{
				foreach($match[0] as $item)
				{
					$itemJS =json_decode($item, true);
					/* if((string)$itemJS['type'] == '') */
					if(strpos($itemJS['type'] , 'video') !== false){
						if ((int)$itemJS['height']>300 && (int)$itemJS['height'] < 400 && !isset($itemmedium)) $itemmedium = (string)$itemJS['url'];
						if ((int)$itemJS['height']>=400 && (int)$itemJS['height'] < 700 && !isset($itemlarge)) $itemlarge = (string)$itemJS['url'];
						if ((int)$itemJS['height']>=700 && !isset($itemhd)) $itemhd = (string)$itemJS['url'];
					}
				}
				if (!isset($itemmedium))
				{
					$itemJS =json_decode($match[0][count($match[0])-1], true);
					$itemmedium = (string)$itemJS['url'];
				}
			}
		}
		else if(strpos($url , 'youtube') !== false){
			$itemmedium = (string)$url;
		}
		else{
			$itemmedium = 'http://www.youtube.com/watch?v=cAORADnJv3M';
		}
	
	
		$list['file'] = html_entity_decode((string)$itemmedium);
		if (isset($itemlarge)){
			$list['large.file'] = html_entity_decode((string)$itemlarge);
		}
		if (isset($itemhd)){
			$list['hd.file'] = html_entity_decode((string)$itemhd);
		}
		/* $list['captions.file'] = (string)$captions;
		 $list['image'] = (string)$image; */
		return $list;
	}
	
	/**
	 * Method : getCurrentURL
	 * @param String $url
	 * @param number $timeout
	 * @return mixed
	 */
	private function getCurrentURL($url,$timeout = 15)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_HTTPGET,true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch, CURLOPT_FAILONERROR, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_ENCODING , 'gzip, deflate');
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}
}