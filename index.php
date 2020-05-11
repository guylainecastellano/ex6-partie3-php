<?php
$departments = array();
$departments['80'] = 'somme';
$departments['02'] = 'aisne';
$departments['60'] = 'oise';
$departments['62'] = 'pas de calais';
$departments['59'] = 'nord';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>ex6 partie3 php</title>
</head>
<body>
<?php
foreach ($departments as $department => $value){  //$value nom du departement en lettre et departement le numéro
  ?>
  <p>Le département <?php echo $value; ?> a le numéro <?php echo $department; ?></p>
<?php } ?>
</body>
</html>
