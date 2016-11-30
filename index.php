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
    <script>
      document.getElementById("Obelix").style.left = document.getElementById("main").style.left/2 - document.getElementById("Obelix").style.width;
    </script>
    <div id="main">
      <?php
        $TableauIMC = array(
            0 => array("moins de 16,5", "dénutrition ou famine"),
            1 => array("16,5 à 18,5", "maigreur"),
            2 => array("18,5 à 25", "corpulence normale"),
            3 => array("25 à 30", "surpoids"),
            4 => array("30 à 35", "obésité modére"),
            5 => array("35 à 40", "obésité sévère"),
            6 => array("plus de 40", "obésité morbide ou massive")
        );
      ?>
      <img id="Obelix" alt="Obelix" src="ressources/obelix.jpg"/>
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
                    <td colspan="2">
                        <input type="submit" value="Calcul" name="btnSubmit"/>
                    </td>
                </tr>
                <tfoot>
                  <tr>
                    <td colspan="2">
                      <p><?php echo 'Votre IMC est :' . $IMC ?></p>
                    </td>
                  </tr>
                </tfoot>
            </table>
        </form>
        <table style="border: 1px solid black; border-collapse: collapse; text-align: center; position: static; margin: auto;" border="1">
            <?php
            $LigneEnValeur = 6;

            if ($IMC < 40) {
              $LigneEnValeur--;
            }
            if ($IMC < 35) {
              $LigneEnValeur--;
            }
            if ($IMC < 30) {
              $LigneEnValeur--;
            }
            if ($IMC < 25) {
              $LigneEnValeur--;
            }
            if ($IMC < 18.5) {
              $LigneEnValeur--;
            }
            if ($IMC < 16.5) {
              $LigneEnValeur--;
            }
                foreach($TableauIMC as $key => $value){
                  if($key == $LigneEnValeur){
                    echo '<tr style="color: red;">';
                  }
                  else {
                    echo "<tr>";
                  }
                    echo "<td>".$value[0]."</td>";
                    echo "<td>".$value[1]."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
  </body>
</html>
