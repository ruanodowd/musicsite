<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
$sql = "SELECT artists.nameArtist AS artist, discs.nameDisc AS disc, songs.nameSong AS song
 FROM artists, discs, songs
 WHERE songs.idDisc = discs.idDisc AND discs.idArtist = artists.idArtist
 AND songs.nameSong LIKE '%$song%' AND discs.nameDisc LIKE '%$album%'";
$result = mysqli_query($con,$sql);
if (!$result) {
    echo "<p>Problem with request: " . mysqli_error($con) . ".</p>\n";
    die;
}
echo "<table id='results'>";
while ($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['song'] . "</td><td>" . $row['artist'] . "</td><td>" . $row['disc'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
  ?>
  </div>
</body>
</html>
