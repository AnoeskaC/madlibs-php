<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Frijole" rel="stylesheet">
    <title>Madlibs</title>
  </head>
  <body>
    <main>
      <h1>Mad Libs</h1>
        <nav id="nav">
            <a href="index.html" class="link">Er heerst paniek...</a>
            <a href="onkunde.html" class="link">Onkunde</a>
        </nav>
        <section>
          <h2>Er heerst paniek...</h2>
          <p>Er heerst paniek in het koninkrijk <?php echo $_POST["land"]?>.<?php echo $_POST["docent"]?> is ten einde raad en als <?php echo $_POST["docent"]?> ten einde raad is, dan roept zij de hij ten-einde-raadsheer <?php echo $_POST["bff"]?>.</p>
          <p>"<?php echo $_POST["bff"]?> Het is een ramp! Het is een schande!"</p>
          <p>"Sire,Majesteit, Uwe koninlijkheid, wat is er aan de hand?"</p>
          <p>"Mijn <?php echo $_POST["dier"]?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["speelgoed"]?> voor hem gekocht!"</p>
          <p>"Majesteit, uw <?php echo $_POST["dier"]?> komt vast vanzelf weer terug?"</p>
          <p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["hobby"]?> leren?"</p>
          <p>"Maar Sire, daar kunt u toch uw <?php echo $_POST["euro"]?> voor gebruiken?"</p>
          <p>"<?php echo $_POST["bff"]?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
          <p>"<?php echo $_POST["verveelt"]?>, Sire."</p>
        </section>
      <p id="footer"> Deze website is gemaakt door Anoeska Clement.</p>
    </main>
  </body>
</html>
