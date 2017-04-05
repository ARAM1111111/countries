<?php
require 'vendor/autoload.php';


use SameerShelavale\PhpCountriesArray\CountriesArray;

$c = CountriesArray::get( 'alpha2', 'name' );
// var_dump($c);
// echo "<pre>";
//  print_r($c);
$i = 0;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
	td,th{
		text-align: center;
		border: 1px solid black;
	}
</style>
	<title>Countries</title>
</head>
</body>

<div class="container">
  <h2>Countries</h2>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>NAME</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($c as $key => $v):?>
      <tr>
        <td><?php echo ++$i ?></td>
        <td><?php echo $v ?></td>
      <?php endforeach ?>
      </tr>
    </tbody>
  </table>
</div>



</body>
</html>
