<?php
$load = (isset($_GET['page'])&& $_GET['page'] !='')? $_GET['page'] : '';
?>

<html>
	<head>
		<title>Api Utilization</title>
	</head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
	<div class="wrap">

	<div class="nav" style="text-align: center;">
			<li class="w3-button"><a href="index.php?page=home">Home</a></li>
			<li class="w3-button"><a href="index.php?page=list">Show Products</a></li>
			<li class="w3-button"><a href="index.php?page=category">Categories</a></li>
			<li class="w3-button"><a href="index.php?page=create">Create Product</a></li>
			
	</div>
<?php
	switch($load){
		case 'home':
			require_once('home.php');
		break;
		case 'list':
			require_once('showlist.php');
		break;
		case 'category':
			require_once('read_categories.php');
		break;
		case 'show_product':
			require_once('product_profile.php');
		break;	
		case 'create':
			require_once('form_create.php');
		break;
		case 'update':
			require_once('form_update.php');
		break;
		case 'delete':
			require_once('form_delete.php');
		break;
		default:
			require_once('home.php');
	}
?>
</div>
</html>
