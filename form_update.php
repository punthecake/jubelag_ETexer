<?php
	$id = $_GET['id'];
	$json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
	$data = json_decode($json,true);
	$details = array('records' => $data);
	$result = $details['records'];
	//category
	$jsonCat = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
	$catData = json_decode($jsonCat,true);
	$category = $catData['records'];
?>
<html>
<br/>
<br/>
<br/>
<div class="w3-container">
<form action="pro_update.php?id=<?php echo $id ?>" method="POST">
	Name:<br/><input class="w3-input w3-animate-input" type="text" name="name" value="<?php echo $result['name'];?>" style="width:30%; text-align: center;"/><br/><br/>
	Description:<br/><textarea class="w3-input w3-animate-input" name="description" style="width:45%; text-align: center;"><?php echo $result['description']; ?></textarea><br/><br/>
	Price:<br/><input class="w3-input w3-border w3-round-large" type="number" name="price" value="<?php echo $result['price']; ?>" style="width:15%; text-align: center;"/><br/><br/>
	Category:<select class="w3-select w3-border" name="category" style="width:15%;">
		<option value="<?php echo $result['category_id'];?>"><?php echo $result['category_name'];?></option>
	<?php
      foreach($category as $cview){
    ?>
		<option value="<?php echo $cview['id']?>"><?php echo $cview['name']?></option>
    <?php
      }
    ?>
	</select>
	<br/><br/><input class="w3-button w3-round-large w3-red" type="submit" name="submit" value="Done"/>
</form>
</div>
</html>
