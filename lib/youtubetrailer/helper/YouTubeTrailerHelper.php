<?php
namespace YouTubeTrailer\Helper;

use YouTubeTrailer\Bean\Trailer;

class YouTubeTrailerHelper {
	
	public function populateTrailerAttributes(string $match, Trailer $bean) : Trailer {
		
		$bean->setId('ytplayer');
		
		$bean->setMatch($match);
		
		$bean->setWidth(557);
		
		$bean->setHeight(361);
		
		$parameters  = array (
			"cc_load_policy"	 	=> "1",
			"controls" 			 	=> "1",
			"disablekb" 		 	=> "1",
			"enablejsapi" 		 	=> "1",
			"fs" 					=> "0",
			"rel" 					=> "0",
			"showinfo" 				=> "0",
			"autohide" 				=> "1",
			"color" 				=> "white",
			"iv_load_policy" 		=> "1",
			"theme" 				=> "dark"
		);
		
		$bean->setParameterString($parameters);
		
		$bean->setFrameBody(0);
		
		$bean->setAllowFullScreen("true");
		
		$bean->setContentType("text/html");
		
		return $bean;
	}
}
