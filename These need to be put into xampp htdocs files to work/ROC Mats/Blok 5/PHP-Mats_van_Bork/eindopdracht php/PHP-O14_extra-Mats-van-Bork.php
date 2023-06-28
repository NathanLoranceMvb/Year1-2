<?php 
$cars=['Volvo','Saab','Fiat','Audio','BMW','Porsch','Hyundai','Opel','Kia','Tesla','VW'];
$rand_keys = array_rand($cars, 2);

?>
<h2>The select Element</h2>

<p>The select element defines a drop-down list:</p>

<p><?php echo $cars[$rand_keys[0]] . "\n";?></p>


<form action="PHP-O14_Opdracht-2-Mats-van-Bork.php">
  <select name="cars">
    <option value="<?php echo $cars[0]; ?>"><?php echo $cars[0]; ?></option>
    <option value="<?php echo $cars[1]; ?>"><?php echo $cars[1]; ?></option>
    <option value="<?php echo $cars[2]; ?>"><?php echo $cars[2]; ?></option>
    <option value="<?php echo $cars[3]; ?>"><?php echo $cars[3]; ?></option>
  </select>
  <br><br>
  <input type="submit">
</form>