<?php
	//category
	$jsonCat = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
	$catData = json_decode($jsonCat,true);
	$category = $catData['records'];
?>
<html>
<br/>
<br/>
<br/>
<div class="contain">
<div class="wrapper">
<form action="pro_create.php" method="POST">
	<br/>
	<h1><center>Create Product<center></h1>
	<br/>
	Name:<br/><input class="w3-input w3-animate-input" type="text" name="name" placeholder="Enter Product Name" style="width:50%; text-align: center;"/><br/><br/>
	Description:<br/><textarea class="w3-input w3-animate-input" name="description" placeholder="Enter Item Description" style="width:50%; text-align: center;"></textarea><br/><br/>
	Price:<br/><input class="w3-input w3-border w3-round-large" type="number" name="price" placeholder="Enter Product Price" style="width:50%; text-align: center;"/><br/><br/>
	Category:<br/><select class="w3-select w3-border" name="category" style="width:50%;">
		<option value="" disabled selected>Select Category</option>
	<?php
      foreach($category as $cview){
    ?>
		<option value="<?php echo $cview['id']?>"><?php echo $cview['name']?></option>
    <?php
      }
    ?>
	</select>
	<br/><br/><input class="w3-button w3-round-large w3-red" type="submit" name="submit" value="Create"/>
</form>
</div>
	</div>
</html>