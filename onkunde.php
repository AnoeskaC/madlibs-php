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
        <h2>Onkunde</h2>
        <p>Er zijn veel mensen die niet kunnen <?php echo $_post["v1"]?>.
          Neem nou <?php echo $_post["v2"]?>. Zelfs met de hulp van een <?php echo $_post["v4"]?> of zelfs <?php echo $_post["v3"]?> kan <?php echo $_post["v2"]?> niet <?php echo $_post["v1"]?>
          . Dat heeft niet te maken met een gebrek aan <?php echo $_post["v5"]?>, maar met een te veel aan <?php echo $_post["v6"]?>. Te veel <?php echo $_post["v6"]?>
          leidt tot verveling<?php echo $_post["v7"]?>  en dat is niet goed als je wilt <?php echo $_post["v1"]?>. Helaas voor meneer Ronkes<?php echo $_post["v2"]?>.
        </p>
      </section>
      <p id="footer"> Deze website is gemaakt door <?php echo $_post["v2"]?>.</p>
    </main>
    <script src="script.js" type="text/javascript"></script>
  </body>
</html>
