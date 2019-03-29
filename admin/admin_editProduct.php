<?php
require_once 'scripts/config.php';

confirm_logged_in();

$tbl1   = 'tbl_products';
$products = getAll($tbl1);

// $value           = "products_id";
// $tbl             = 'tbl_products';
// $col             = 'products_id';
// $found_product_set = getSingle($tbl, $col, $value);

// if(is_string($found_product_set)){
//     $message = 'Failed to get product info!';
// }


?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Edit product</title>
</head>
<body>
	<h2>Edit product</h2>
    <table>
        <thead>
            <tr>
                <th>product ID</th>
                <th>product Title</th>
                <th>Select</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($product = $products->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?php echo $product['products_id']; ?></td>
                <td><?php echo $product['products_name']; ?></td>
                <!-- 选择以后如何蹦到对应的ID product form  -->
                <td><a href="product_edit_details.php?id=<?php echo $product['products_id']; ?>">Select</a></td>
            </tr>
            <?php endwhile;?>
        </tbody>
    </table>
</body>
</html>