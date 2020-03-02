<?php
 $json = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
 $data = json_decode($json,true);
 
 $search = $_POST['search'];
 
 if(isset($search)){
	$jsearch = file_get_contents('http://rdapi.herokuapp.com/product/search.php?s='.$search);
	$res = json_decode($jsearch,true);

	$list = $res['records'];
	
 }else{
	$list = $data['records'];
 }
 
?>
<html>
  <style>
    a:hover{
      color: red;
    }
  </style>
<br/>
<br/>
<br/>
<div class="w3-container w3-center">
  <table class="w3-table-all">
    <tr class="tr">
      <th>Category ID</th>
      <th>Category Name</th>
      <th>Description</th>
    </tr>
    <?php
      foreach($list as $result){
    ?>
    <tr>
     <td> <?php echo $result['id']; ?> </a> </td>
      <td><?php echo $result['name']; ?> </td>
      <td><?php echo $result['description']; ?> </td>

    </tr>
    <?php
      }
    ?>
  </table>
 </div>
</html>
