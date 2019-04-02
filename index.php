<?php require_once 'admin/scripts/config.php';
if (isset($_GET['filter'])) {
    $tbl     = 'tbl_products';
    $tbl_2   = 'tbl_categories';
    $tbl_3   = 'tbl_prod_cate';
    $col     = 'products_id';
    $col_2   = 'cate_id';
    $col_3   = 'cate_name';
    $filter  = $_GET['filter'];
    $results = filterResults($tbl, $tbl_2, $tbl_3, $col, $col_2, $col_3, $filter);
} else {
    $results = getAll('tbl_products');
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

	<!-- <h1 class="hide">Sport Check</h1> -->

<?php include 'templates/header.html';?>




<section id="productImages">
<?php
$count = 1;
while ($row = $results->fetch(PDO::FETCH_ASSOC)):
?>
	<section class="<?php echo $count % 3 === 0 ? 'productImgLast' : 'productImg'; ?> ">

            <img src="images/<?php echo $row['products_img']; ?>"
	 alt="<?php echo $row['products_name']; ?>">
	 <a href="details.php?id=<?php echo $row['products_id']; ?>">Read More</a>
	 <h2><?php echo $row['products_name']; ?></h2>
	 <p>Price: $<?php echo $row['products_price']; ?></p>
     </section>
<?php
$count++;
endwhile;?>
</section>



<?php include 'templates/footer.html';?>

</body>
</html>