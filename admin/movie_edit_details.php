<?php require_once 'scripts/config.php';
//提交form重新定向（第二回）返回本页 自己给自己包裹 
//然而action里没有URL ID传来 所以不会有ID传给if(isset($_GET['id'])) 所以直接跳转页面 之下的code是死代码都未执行
//解决办法：
//1.修改问题：修改代码结构--> if(isset($_GET['id'])){...}else if(isset($_POST['submit']))else{redirect_to('admin_editmovie.php');}
//2.修改顺序：想被执行的代码放在if(isset($_GET['id']))上面 --> 才不会被迫跳转变成死代码，还要给它一个ID
//3.action="....?id=$id" 给下面form action添加ID 


//先不要想具体解决办法，先把思路搞通， 选择走哪条路 


//种类多选条获取数据
$cate_tbl          = 'tbl_categories';
$product_categories = getAll($cate_tbl);



$id = $_GET['id'];

if(isset($_GET['id'])){
   $found_movie_set = selectEdit($id);
}else{
    redirect_to('admin_editmovie.php');
}


if(is_string($found_movie_set)){
    $message = 'Failed to get movie info!';

}
// isset 和 ！empty 的区别

//$found_movie_set= $found_movie_set.toString();

if (isset($_POST['submit'])) {
    $img = $_FILES['img'];
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $cateList = $_POST['cateList'];

    //Validation empty检查 变量存在 值是非空 非0 返回false （其他情况返回true
    if (empty($id) || empty($img) || empty($name) || empty($desc) || empty($price) ||empty($cateList)
    ) {
        $message = 'Please fill the required fields0-0...';
    } else { //返回false 执行这里
        //Do the edit
        $result  = editProduct($id, $name, $img, $desc, $price,$cateList);
        $message = $result;
    }
}

if(isset($_GET['id'])){
    $found_movie_set = selectEdit($id);
 }else{
     redirect_to('admin_editmovie.php');
 }

?>


<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Edit Movie</title>
</head>
<body>
	<h2>Edit Movie</h2>



	<?php if (!empty($message)): ?>
		<p><?php echo $message; ?></p>
	<?php endif;?>

<!-- PDO::query() returns a PDOStatement object, or FALSE on failure. -->
	<?php while ($found_movie = $found_movie_set->fetch(PDO::FETCH_ASSOC)): ?>
		<form action="movie_edit_details.php?id=<?php echo $found_movie['products_id'];?>" method="post"  enctype="multipart/form-data">
        <label for="img"> Image:</label>
        <input type="file" name="img" id="img" value="<?php echo $found_movie['products_img']; ?>"><br><br>

        <label for="name">Movie Title:</label>
        <input type="text" name="name" id="name" value="<?php echo $found_movie['products_name']; ?>"><br><br>

        <label for="price">Movie Year:</label>
        <input type="text" name="price" id="price" value="<?php echo $found_movie['products_price']; ?>"><br><br>


       

<!-- textarea no value 怎么显示原有的文字 -->
        <label for="desc">Products Description</label>
        <textarea name="desc" id="desc"></textarea><br><br>

        <label for="cateList">Movie Genre:</label>
        <select name="cateList" id="cateList">
            <option>Please select a movie genre..</option>

            <?php while ($product_category = $product_categories->fetch(PDO::FETCH_ASSOC)): ?>
            <!--  the value of the value attribute is what will be sent to the server when a form is submitted -->
            <option value="<?php echo $product_category['cate_id']; ?>">
               <?php echo $product_category['cate_name']; ?>
            </option>
            <?php endwhile;?>

        </select><br><br>

        <button type="submit" name="submit">Change</button>
		</form>
	<?php endwhile;?>
</body>
</html>