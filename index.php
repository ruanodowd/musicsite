<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <a class="headlink" href="/">Search music</a>
    <a class="headlink" href="/about">About</a>
    <a class="headlink" href="/match">Match</a>
    <a class="headlink" href="/quiz">Quiz</a>
  </header>

  <div class="container">
  <h2>Search for a song</h2>
  <form class="search" action="search.php" method="get">
  <p>name: <input type="text" name="song" value=""></p>
  <p>artist: <input type="text" name="artist" value=""></p>
  From the playlist of
  <input type="radio" name="classmate" value="Ida">Ida
  <input type="radio" name="classmate" value="Dominik">Dominik
  <input type="radio" name="classmate" value="Ruan">Ruan
  <br>
  <select class="select" name="genre">
    <option value="0" selected disabled>Select Genre</option>
    <option value="rap">Rap</option>
    <option value="irish trad">Irish trad</option>
    <option value="pop">Pop</option>
    //these options may be filled out by an sql script in the future

  </select>
  <br>
  <button type="submit" name="submit">Search</button>
  </form>
  </div>
</body>
</html>
