<?php
 $id = $_GET['id'];
 $json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
 $data = json_decode($json,true);
 $details = array('records' => $data);
 $result = $details['records'];
?>
<html>
<br/>
<br/>
<br/>
<br/>
<div class="wrapper w3-center">
	<div class="">
		<header class="header">
			<h1><b><?php echo $result['name']; ?></b></h1>
		</header>
	<div class="body">
		<p> <b>Price:  </b><?php echo $result['price']; ?></p>
		<p>	<b>Description:  </b><?php echo $result['description']; ?> </p>
		<p>	<b>Category:  </b><?php echo $result['category_name'];?> </p>
	</div>
		<footer class="header">
			<a class="w3-button w3-round-large w3-teal w3-margin" href="index.php?page=update&id=<?php echo $id ?>">Update/Edit</a>
			<a class="w3-button w3-round-large w3-yellow w3-margin" href="pro_delete.php?id=<?php echo $id ?>">Delete/Trash</a>
		</footer>
	</div>
  </div>
</html>
