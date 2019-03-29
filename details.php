<?php require_once('admin/scripts/config.php');
if(isset($_GET['id'])){
	$tbl = 'tbl_products';
	$col = 'products_id';
	$value = $_GET['id'];
	$results = getSingle($tbl, $col, $value);
}else{
	echo 'Missing product ID';
    exit;
	
}
?>

<!doctype html>
<html>
<head>
	<meta charset='utf-8'>
	<link rel="stylesheet" href="css/main.css">
	<title>Sport Check</title>
</head>
<body>
	<?php include('templates/header.html'); ?>
	<h1>Sport Check</h1>
	<div>
	<?php while($row = $results->fetch(PDO::FETCH_ASSOC)):?>
	<img src="images/<?php echo $row['products_img'];?>" 
	 alt="<?php echo $row['products_name'];?>">
		<h2><?php echo $row['products_name'];?></h2>
		<h4>$<?php echo $row['products_price'];?></h4>
		<p><?php echo $row['products_desc'];?></p>
	<?php endwhile;?>
	</div>

	<?php include('templates/footer.html');?>
</body>
</html>