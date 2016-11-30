<?php
if(!empty($_POST)){
  $poids = $_REQUEST["Poids"];
  $taille = $_REQUEST["Taille"];

  $IMC = round($poids / pow($taille, 2), 1);
}



?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>IMC</title>
    <link rel="stylesheet" href="style/Style.css" />
  </head>
  <body>
    <div id="main">
      <?php
        $TableauIMC = array (
            "moins de 16,5" => "dénutrition ou famine",
            "16,5 à 18,5" => "maigreur",
            "18,5 à 25" => "corpulence normale",
            "25 à 30" => "surpoids",
            "30 à 35" => "obésité modére",
            "35 à 40" => "obésité sévère",
            "plus de 40" => "obésité morbide ou massive",
        );
      ?>
      <img alt="Obelix" src="ressources/obelix.jpg"/>
      <form action="#" method="POST">
            <table>
                <tr>
                    <td>
                        <legend>Poids (Kg):</legend>
                    </td>
                    <td>
                        <input type="number" name="Poids" required="required"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <legend>Taille (m):</legend>
                    </td>
                    <td>
                        <input type="text" name="Taille" required="required"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Calcul" name="btnSubmit"/>
                    </td>
                  </tr>
            </table>
        </form>
        <table style="border: 1px solid black; border-collapse: collapse; margin: 6px; text-align: center;" border="1">
            <?php
            $LigneEnValeur = "";

            if ($IMC > 40) {
              $LigneEnValeur = "plus de 40";
            }
            elseif ($IMC <= 40) {
              $LigneEnValeur = "35 à 40";
            }
            elseif ($IMC <= 35) {
              $LigneEnValeur = "30 à 35";
            }
            elseif ($IMC <= 30) {
              $LigneEnValeur = "25 à 30";
            }
            elseif ($IMC <= 25) {
              $LigneEnValeur = "18,5 à 25";
            }
            elseif ($IMC <= 18.5) {
              $LigneEnValeur = "16,5 à 18,5";
            }
            elseif ($IMC <= 16.5) {
              $LigneEnValeur = "moins de 16,5";
            }
                foreach($TableauIMC as $key => $value){
                  if($key == $LigneEnValeur){
                    echo '<tr style="color: red;">';
                  }
                  else {
                    echo "<tr>";
                  }
                    echo "<td>".$key."</td>";
                    echo "<td>".$value."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
  </body>
</html>
