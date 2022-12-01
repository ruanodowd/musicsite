<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="style.css">
    <?php
      $artist = $_GET["artist"];
      $song = $_GET["song"];
      $album = $_GET["album"];
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "music";

      $con = mysqli_connect($servername, $username, $password, $dbname);
      if (mysqli_connect_errno()) {
        die("Connection failed: " . mysqli_connect_errno());
      }
    ?>
</head>

<body>
  <header>
    <a class="headlink" href="index">Search music</a>
    <a class="headlink" href="about">About</a>
    <a class="headlink" href="quiz">Quiz</a>
  </header>

  <div class="container">
  <h2>Search for a song</h2>
<?php
$sql = "SELECT artists.nameArtist, discs.nameDisc, songs.nameSong FROM music WHERE songs.nameSong = $song AND discs.nameDisc = $disc";
$result = mysqli_query($con,$sql);
foreach($result as $row) {
  echo $row['title'] ;
}
mysqli_close($con);

  ?>

  </div>
</body>
</html>
