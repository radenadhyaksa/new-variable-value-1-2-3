<?php

echo "nilai 1 adalah ". ($_POST["nsatu"]) . "<br>";
echo "nilai 2 adalah ". ($_POST["ndua"]). "<br>";
echo "nilai 3 adaalah ". ($_POST["ntiga"]). "<br>";

echo "<br>";
 $satu = $_POST["nsatu"];
 $dua = $_POST["ndua"];
 $tiga = $_POST["ntiga"];

$hasil1 = ($satu+$dua)*$tiga;
$hasil2 = $satu*$dua/$tiga;
$hasil3 = $satu/$tiga;


echo "hasil1 =  ". "(". $satu. "+". $dua. ")". "*". $tiga. "= ". ($hasil1. "<br>");
echo "hasil2 =  ". "(". $satu. "*". $dua. ":". $tiga. "= ". ($hasil2. "<br>");
echo "hasil3 =   $satu : $tiga = " . ($hasil3. "<br>");

?>