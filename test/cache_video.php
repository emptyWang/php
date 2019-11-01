<?php

set_time_limit(0);

$video_info = file("./videos.txt");
$start_key = 3;

foreach($video_info as $k=>$v){
	if($k < $start_key){
		continue;
	}
	$single_video = explode("\t", $v);
	$command = "curl 'http://hitouch.devv?r=api/movie&movie_name=".trim($single_video[0])."&type=".trim($single_video[1])."'";
	exec($command);
	echo date("Y-m-d H:i:s")."\t".$k."\t".$v."\n";
	sleep(rand(1,4));
	// $k==2 && exit;
}


