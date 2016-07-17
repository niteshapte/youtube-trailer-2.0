<?php
use YouTubeTrailer\Bean\Movie;
use YouTubeTrailer\Core\YouTubeTrailer;
use YouTubeTrailer\Bean\Trailer;

include_once 'autoload.php';

$movieBean = new Movie();
$movieBean->setMovieName($_GET['movie']);
$movieBean->setYearOfRelease($_GET['year']);
$movieBean->setLanguage($_GET['language']);

$trailerObj = new YouTubeTrailer();
$trailerBean = $trailerObj->getTrailerByNameAndYear($movieBean);

$id = $trailerBean->getId();
$type = $trailerBean->getContentType();
$width = $trailerBean->getWidth();
$height = $trailerBean->getHeight();
$video = $trailerBean->getMatch();
$param = $trailerBean->getParameterString();
$frame = $trailerBean->getFrameBody();
$fullscreen = $trailerBean->getAllowFullScreen();

$trailer = "<iframe id='$id' type='$type' width='$width' height='$height' src='https://www.youtube.com/embed/$video?$param' frameborder='$frame' allowfullscreen='$fullscreen'></iframe>";

echo $trailer;