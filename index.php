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
    <link rel="stylesheet" href="style/Style.css"/>
  </head>
  <body>
    <div id="main">
      <img alt="Obelix" src="ressources/obelix.jpg"/>
      <form action="#" method="POST">
            <table>
                <tr>
                    <td>
                        Poids (en Kg) :
                    </td>
                    <td>
                        <input type="number" name="Poids" required="required" value="<?php echo $poids ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Taille :
                    </td>
                    <td>
                        <input type="text" name="Taille" required="required" value="<?php echo $taille ?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Calcul" name="btnSubmit"/>
                    </td>
                  </tr>
            </table>
        </form>
        <p><b><?php echo $IMC ?></b></p>
    </div>
  </body>
</html>
