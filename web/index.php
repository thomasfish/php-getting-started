<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="style.css">
  <title>Pokémon Ranking!</title>
</head>
<body>
  <section id="header">
    <h1>Click on the Pokémon you like more!</h1>
  </section>

  <section id="main" class="main">
    <div id="villager1" class="villagersection villager1" onclick="recordWin(1)">
      <img src="">
      <h2></h2>
    </div>
    <div id="villager2" class="villagersection villager2" onclick="recordWin(2)">
      <img src="">
      <h2></h2>
    </div>
  </section>

  <section id="footer">
    <p class="counter">Currently, Pokémon have recieved <b id="counter">0000</b> votes.</p>
    <p class="grey">This website uses the browser's IP address to track the number of users. By rating Pokémon, you allow me to temporarily log your browser's IP address.</p>
  </section>

  <script src="js.js"></script>
</body>
</html>
