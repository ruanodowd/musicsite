<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="style.css">
    <?php
      $artist = $_GET["Artist"];
      $song = $_GET["Song"];
      $album = $_GET["Album"];
      $genre = $_GET["Genre"];
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
  <h2>Try to guess whose top 2022 songs this comes from !</h2>
  <br>  
   <form class="check" action="check_quiz.php" method="get">
       
<?php
$random = rand(0,2);
       if ($random=0){
$sql = "SELECT ida.Artist, ida.Album, ida.Song, ida.Genre FROM ida WHERE ida.ID = rand(1,50);
$result = mysqli_query($con,$sql);
foreach($result as $row) {
  echo $row['title'] ;
}
mysqli_close($con);
?>
<form>

<input type="radio" name="student" id="Ruan" value="Ruan" />
<label for="Ruan">Ruan</label>
<input type="radio" name="student" id="Dominik" value="Dominik" />
<label for="Dominik">Dominik</label>
<input type="radio" name="student" id="Ida" value="Ida" />
<label for="Ida">Ida</label>
  <br>
  <button type="button" onclick="display()">Check</button
  </form>
    <br>
    <div id="disp" style=
        "color:green; font-size:18px; font-weight:bold;">
    </div>
</body>
    <script>
        function display() {
            if(document.getElementById('Ida').checked) {
                document.getElementById("disp").innerHTML
                    = document.getElementById("GFG").value
                    + " is the right answer";
            }
            else if(document.getElementById('Ruan').checked) {
                document.getElementById("disp").innerHTML
                    = document.getElementById("HTML").value
                    + " is the wrong answer";  
            }
            else if(document.getElementById('Dominik').checked) {
                document.getElementById("disp").innerHTML
                    = document.getElementById("JS").value
                    + " is the wrong answer";  
            }
            else {
                document.getElementById("disp").innerHTML
                    = "No one selected";
            }
    }
    </script>
</body>
</html>
