<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <a class="headlink" href="index">Search music</a>
    <a class="headlink" href="about">About</a>
    <a class="headlink" href="quiz">Quiz</a>
  </header>
  <div class="container">
  <h2>Search for a song</h2>
  <form class="search" action="search.php" method="get">
  <p>Title: <input type="text" name="song" value=""></p>
  <p>Artist: <input type="text" name="artist" value=""></p>
  <p>Album: <input type="text" name="album" value=""></p>
  <br>
  <select class="select" name="Country">
    <option value="0" selected disabled>Select Country</option>
    <option value="France">France</option>
  </select>
  <br>
  <button type="submit" name="submit">Search</button>
  </form>
  </div>
</body>
</html>
