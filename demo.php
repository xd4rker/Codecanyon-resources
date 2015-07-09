<html>
<head>
  <!-- Header tags -->
</head>

<body>
  <?php
    require_once("imdb_parser/lib/Parser.class.php");
    
    $Parser = new Parser("The amazing spiderman");
    
    &info = $Parser->get_info();
  ?>
  
  <p>Title : <?php echo $info["title"]; ?> </p>
  <p>Year : <?php echo $info["year"]; ?> </p>
  <p>Time : <?php echo $info["time"]; ?> </p>
  <p>Genre : <?php echo $info["genre"]; ?> </p>
  <p>Stars : <?php echo $info["stars"]; ?> </p>
  <p>Rating : <?php echo $info["rating"]; ?> </p>
  <p>Rating Count : <?php echo $info["rating_count"]; ?> </p>
  <p>Metascore : <?php echo $info["metascore"]; ?> </p>
  <p>Directors : <?php echo $info["director"]; ?> </p>
  <p>Description : <?php echo $info["description"]; ?> </p>
  <p>Thumbnail (small): <?php echo $info["small_thumbnail"]; ?> </p>
  <p>Thumbnail (medium): <?php echo $info["thumbnail"]; ?> </p>
  <p>Thumbnail (HQ) : <?php echo $info["hq_thumbnail"]; ?> </p>
  <p>Release date : <?php echo $info["release_date"]; ?> </p>
  <p>Type : <?php echo $info["type"]; ?> </p>
  <p>Trailer : <?php echo $info["trailer"]; ?> </p>
  <p>Status : <?php echo $info["status"]; ?> </p>
  <p>Seasons : <?php echo $info["seasons"]; ?> </p>
  <p>Imdb URL : <?php echo $info["imdb_url"]; ?> </p>
  <p>Imdb ID : <?php echo $info["imdb_id"]; ?> </p>

<body>
</html>
