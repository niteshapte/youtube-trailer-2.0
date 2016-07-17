<?php
namespace YouTubeTrailer\Bean;

/**
 * Movie Bean
 * 
 * Bean containing attributes of movie for fetching the trailers
 *  
 * @category YouTube Trailer 2.0
 * @package YouTubeTrailer
 * @subpackage Bean
 * @author Nitesh Apte <me@niteshapte.com>
 * @copyright 2016 Nitesh Apte
 * @version 1.0.0
 * @since 1.0.0
 * @license https://www.gnu.org/licenses/gpl.txt GNU General Public License v3
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
class Movie {
	
	private $MovieName;
	
	private $YearOfRelease;
	
	private $VideoId;
	
	private $Language;
	
	public function setMovieName(string $movieName) {
		$this->MovieName = trim($movieName);
	}
	
	public function getMovieName() : string {
		return $this->MovieName;
	}
	
	public function setYearOfRelease(int $yearOfRelease) {
		$this->YearOfRelease = trim($yearOfRelease);
	}
	
	public function getYearOfRelease() : int {
		return $this->YearOfRelease;
	}
	
	public function setVideoId(string $videoId) {
		$this->VideoId = trim($videoId);
	}
	
	public function getVideoId() : string {
		return $this->VideoId;
	}
	
	public function setLanguage(string $language) {
		$this->Language = trim($language);
	}
	
	public function getLanguage() : string {
		return $this->Language;
	}
}
