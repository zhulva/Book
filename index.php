<!DOCTYPE html>
<html lang="cs">
<head>
  <title>Seznam knih - FMS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<?php
  $json = file_get_contents("kniha.json");
  $json_pole = json_decode($json, true);
  $pole =  $json_pole['knihy'];
  //print_r($pole);
?>

<body>
<div class="container"> 
<h1>Seznam knih</h1>
<table class="table table-stripped">
<thead>
    <tr>
      <th>KĂłd knihy</th>
      <th>Titul</th>
      <th>Cena</th>
      <th>PĹŻjÄŤeno</th>
    </tr>
</thead>
<tbody>
<?php
  foreach($pole as $obj) {
  if($obj['pujceno']=="ano")
  echo '<tr style="background: green">';
  else 
  echo "<tr>";
?>     
      <td><?php echo $obj['kodknihy']; ?></td>
      <td><?php echo $obj['titul']; ?></td>
      <td><?php echo $obj['cena']; ?></td>
   <td> <?php 
if($obj['pujceno']=="ano") 
   echo "<input type='checkbox' name='pujceno' checked>";
 else
 echo "<input type='checkbox' name='pujceno' >";      ?>

  </td> 

    </tr>
<?php
  }
?>
</tbody>
</table>
</div>
</body>
</html>
