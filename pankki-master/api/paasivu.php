<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>N-Pankki</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="cssp/mystylep.css">
      <script src="ourfunktions.js"></script>
  </head>
  <body>
    <div id="header">
    N-Pankki
    </div>

</div>

<div id="Uloskirjautuminen">
          <button type="button" class="btn btn-light" onclick="loadXMLDoc('Uloskirjautuminen.html')">Uloskirjautuminen</button>
    </div>

    <div id="menu">
      <ul>

          <p>
            <button type="button" class="btn btn-light" onclick="loadXMLDoc('tili.html')">Tilit</button>
        </p>
        <p>
            <button type="button" class="btn btn-light" onclick="loadXMLDoc('Siirrot.html')">Siirrot</button>
        </p>
        <p>
            <button type="button" class="btn btn-light" onclick="loadXMLDoc('Maksut.html')">Maksut</button>
        </p>
        <p>
            <button type="button" class="btn btn-light" onclick="loadXMLDoc('Kortit.html')">Kortit</button>
        </p>
        <p>
            <button type="button" class="btn btn-light" onclick="loadXMLDoc('E-laskut.html')">E-laskut</button>
        </p>
      </ul>
</div>
<div id="content">

</div>
<div class="container" id="Tilinakyma">
    <p>
      <?php
      	require "connection.php";
      	$sql = "SELECT Tilin_nimi, Tilinumero, Saldo FROM Tili";

      	$resultObject = $db->query($sql);

      	$resultArray = $resultObject->fetchAll(PDO::FETCH_ASSOC);

      	echo json_encode($resultArray);
      ?>
        <div id="results"></div>

    </p>
  </div>
  <div class="container" id="Kortit">
        <p>
          <?php
          	require "connection.php";
          	$sql = "SELECT Kortin_nimi, Kortinnumero, Kayttovara FROM Kortti";

          	$resultObject = $db->query($sql);

          	$resultArray = $resultObject->fetchAll(PDO::FETCH_ASSOC);

          	echo json_encode($resultArray);
          ?>
            <div id="results"></div>

        </p>
      </div>
  </body>
</html>
