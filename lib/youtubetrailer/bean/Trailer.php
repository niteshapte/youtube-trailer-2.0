<?php
namespace YouTubeTrailer\Bean;


/**
 * TRAILER BEAN
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
class Trailer {
	
	private $Id;
	
	private $Match;
	
	private $Width;
	
	private $Height;
	
	private $ParameterString;
	
	private $FrameBody;
	
	private $AllowFullScreen;
	
	private $ContentType;
	
	private $VideoId;
	
	public function setId(string $id) {
		$this->Id = $id;
	}
	
	public function getId() : string {
		return $this->Id;
	}
	
	public function setMatch(string $match) {
		$this->Match = $match;
	}
	
	public function getMatch() : string {
		return $this->Match;
	}
	
	public function setWidth(int $width) {
		$this->Width = $width;
	}
	
	public function getWidth() : int {
		return $this->Width;
	}
	
	public function setHeight(int $height) {
		$this->Height = $height;
	}
	
	public function getHeight() : int {
		return $this->Height;
	}
	
	public function setParameterString(array $arr) {
		$this->ParameterString = http_build_query($arr);
	}
	
	public function getParameterString() : string {
		return $this->ParameterString;
	}
	
	public function setFrameBody(int $frameBody) {
		$this->FrameBody = $frameBody;
	}
	
	public function getFrameBody() : int {
		return $this->FrameBody;
	}
	
	public function setAllowFullScreen(string $allowFullScreen) {
		$this->AllowFullScreen = $allowFullScreen;
	}
	
	public function getAllowFullScreen() : string {
		return $this->AllowFullScreen;
	}
	
	public function setContentType(string $contentType) {
		$this->ContentType = $contentType;
	}
	
	public function getContentType() : string {
		return $this->ContentType;
	}
	
	public function setVideoId(string $videoId) {
		$this->VideoId = trim($videoId);
	}
	
	public function getVideoId() : string {
		return $this->VideoId;
	}
}
