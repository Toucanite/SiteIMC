<?php
if(!empty($_POST)){
  $poids = $_REQUEST["Poids"];
  $taille = $_REQUEST["Taille"];

  $IMC = round($poids / pow($taille, 2), 1);
}

$Attribut = "";
$Couleur = "black";

if ($IMC < 16.5) {
    $Attribut = "Dénutrition";
    $Couleur = "red";
}
elseif ($IMC > 16.5 && $IMC <= 18.5) {
    $Attribut = "Maigreur";
    $Couleur = "orange";
}
elseif ($IMC > 18.5 && $IMC <= 25) {
    $Attribut = "Corpulence normale";
    $Couleur = "green";
}
elseif ($IMC > 25 && $IMC <= 30) {
    $Attribut = "Surpoids";
    $Couleur = "orange";
}
elseif ($IMC > 30 && $IMC <= 35) {
    $Attribut = "Obésité modérée";
    $Couleur = "red";
}
elseif ($IMC > 35 && $IMC <= 40) {
    $Attribut = "Obésité sévère";
    $Couleur = "red";
}
elseif ($IMC > 40) {
    $Attribut = "Obésité Morbide !!!";
    $Couleur = "red";
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
                        <input type="number" name="Poids" required="required" value=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <legend>Taille (m):</legend>
                    </td>
                    <td>
                        <input type="text" name="Taille" required="required" value="" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Calcul" name="btnSubmit"/>
                    </td>
                  </tr>
            </table>
        </form>
        <table>
            <tr>
                <td><?php echo $IMC ?></td>
                <td><?php echo "<a style='color:".$Couleur."  '>".$Attribut."</a>"; ?></td>
            </tr>
        </table>
        <table style=" border: 1px solid black">
            <?php
                foreach($TableauIMC as $key => $value){
                    echo "<tr>";
                    echo "<td>".$key."</td>";
                    echo "<td>".$value."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
  </body>
</html>

