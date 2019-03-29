<?php
 require_once('scripts/config.php');
 confirm_logged_in();

 $cate_tbl = 'tbl_categories';
 $product_categories = getAll($cate_tbl);

 if(isset($_POST['submit'])){
 //var_dump($_POST);
 //var_dump($_FILES['cover']);
 $img = $_FILES['img'];
 $name = $_POST['name'];
 $desc = $_POST['desc'];
 $price = $_POST['price'];
 $cateList = $_POST['cateList'];

 $result = addProduct($name, $img, $desc, $price,$cateList);
 $message = $result;



 }


?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php if(!empty($message)):?>
        <p><?php echo $message;?></p>
    <?php endif;?>
    <form action="admin_addProduct.php" method="post" enctype="multipart/form-data">
        <label for="img">img Image:</label>
        <input type="file" name="img" id="img" value=""><br><br>

        <label for="name">Movie name:</label>
        <input type="text" name="name" id="name" value=""><br><br>

        <label for="price">Movie price:</label>
        <input type="text" name="price" id="price" value=""><br><br>

       

      


        <label for="desc">Movie description:</label>
        <textarea name="desc" id="desc"></textarea><br><br>

        <label for="cateList">Movie Genre:</label>
        <select name="cateList" id="cateList">
            <option>Please select a movie genre..</option>

            <?php while($product_category = $product_categories->fetch(PDO::FETCH_ASSOC)): ?>
            <!--  the value of the value attribute is what will be sent to the server when a form is submitted -->
            <option value="<?php echo $product_category['cate_id'];?>"> 
               <?php echo $product_category['cate_name'];?>
            </option>
            <?php endwhile;?>

        </select><br><br>

        <button type="submit" name="submit">Add Movie</button>
    </form>
</body>
</html>