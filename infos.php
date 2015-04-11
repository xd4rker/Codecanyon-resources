<?php

	include("imdb_parser/lib/Parser.class.php");
	$Parser = new Parser($_POST['name']);
	
	$info = $Parser->get_info();
	
	echo "Title : " .$info["title"]. "\n";
	echo "Year : "  .$info["year"]. "\n";
	echo "Time : "  .$info["time"]. "\n";
	echo "Genre : " .$info["genre"]. "\n";
	echo "Stars : " .$info["stars"]. "\n";
	echo "Rating : "  .$info["rating"]. "\n";
	echo "Rating Count : "  .$info["rating_count"]. "\n";
	echo "Metascore : " .$info["metascore"]. "\n";			
	echo "Director : "  .$info["director"]. "\n";
	echo "Description : " .$info["description"]. "\n";
	echo "Thumbnail : " .$info["thumbnail"]. "\n";
	echo "Release date : "  .$info["release_date"]. "\n";
	echo "Type : "  .$info["type"]. "\n";
	echo "Trailer : " .$info["trailer"]. "\n";
	echo "Status : "  .$info["status"]. "\n";
	echo "Seasons : " .$info["seasons"]. "\n";
	echo "Imdb URL : "  .$info["imdb_url"]. "\n";
	echo "Imdb ID : " .$info["imdb_id"]. "\n";

?>
