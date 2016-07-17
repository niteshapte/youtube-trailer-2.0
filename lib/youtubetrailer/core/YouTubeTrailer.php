<?php
namespace YouTubeTrailer\Core;

use YouTubeTrailer\Bean\Movie;
use YouTubeTrailer\Bean\Trailer;
use YouTubeTrailer\Helper\YouTubeTrailerHelper;
use YouTubeTrailer\Exception\YouTubeException;

class YouTubeTrailer {
	
	public function getTrailerByNameAndYear(Movie $bean) : Trailer {
		
		$movieName = str_replace(' ', '+', "");
		$youtubePage = @file_get_contents('https://www.youtube.com/results?search_query='.$bean->getMovieName().'+'.$bean->getYearOfRelease.'+trailer&aq=1&hl='.$bean->getYearOfRelease);
		$match = "";
		if($youtubePage == "") {
			throw new YouTubeException("Trailer page for this video is not found.", 5);
		} else {
			$matches = array();
			if(@preg_match('~<a .*?href="/watch\?v=(.*?)".*?</div>~s', $youtubePage, $matches)) {
				$match = $matches[1];
			}
		}
		
		$helper = new YouTubeTrailerHelper();
		return $helper->populateTrailerAttributes($match, new Trailer());
	}
	
	public function getTrailerByVideoId(Movie $bean) : Trailer {
		$helper = new YouTubeTrailerHelper();
		return $helper->populateTrailerAttributes($bean->getVideoId(), new Trailer());
	}
}
