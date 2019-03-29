<?php
function addProduct($name, $img, $desc, $price,$cateList)
{
    // check first one and last one...WHY?
    //    var_dump($img);
    //    var_dump($cateList);
    try {
        include 'connect.php';
        $file_type      = pathinfo($img['name'], PATHINFO_EXTENSION);
        $accepted_types = array('jpg', 'png', 'gif', 'jpeg','webp');
        if (!in_array($file_type, $accepted_types)) {
            throw new Exception('wrong file type');
        }

        $target_path = '../images/' . $img['name'];
        if (!move_uploaded_file($img['tmp_name'], $target_path)) {
            throw new Exception('failed to move uploaded files,check permission');
        }
        // copy是做什么的
        $th_copy = '../images/TH_' . $img['name'];
        if (!copy($target_path, $th_copy)) {
            throw new Exception('failed to move copy files,check permission');
        }

        $addProduct_query = 'INSERT INTO tbl_products(
               products_img,products_name,products_price,
               products_desc)
                             VALUES(:img,:name,:price,:desc)';
        $addProduct_set = $pdo->prepare($addProduct_query);

        $addProduct_set->execute(
            array(
                ':img'     => $img['name'],
                ':name'     => $name,
                ':price'      => $price,
                ':desc'   => $desc
             

            )
        );

        if (!$addProduct_set) {
            throw new Exception('field to insert the new movie');
        }

        $last_id = $pdo->lastInsertId();

        $add_cateList_query = 'INSERT INTO tbl_prod_cate(products_id,cate_id )
                    VALUES(:products_id,:cate_id )';
        $add_cateList_set = $pdo->prepare($add_cateList_query);
        $add_cateList_set->execute(
            array(
                ':products_id' => $last_id,
                ':cate_id'  => $cateList,

            )
        );

        if (!$add_cateList_set->rowCount()) {
            throw new Exception('field to insert the genrelist');
        }
        redirect_to('index.php');
    } catch (PDOException $exception) {
        echo 'add movie Error:' . $exception->getMessage();
        exit();
    }
}

function deleteProduct($id)
{
    include 'connect.php';

    $delete_products_query = 'DELETE FROM tbl_products WHERE products_id = :id';
    $delete_products_set   = $pdo->prepare($delete_products_query);
    $delete_products_set->execute(
        array(
            ':id' => $id,
        )
    );

    if (!$delete_products_set) {
        throw new Exception('field to delet the  movie');
    }

    $delete_genid_query = 'DELETE FROM tbl_prod_cate
        WHERE products_id = :id';
    $delete_genid_set = $pdo->prepare($delete_genid_query);
    $delete_genid_set->execute(
        array(
            ':id' => $id,
        )
    );

    if ($delete_genid_set) {
        redirect_to('../index.php');
    } else {
        $message = 'Not deleted yet..';
        return $message;
    }
}

function editProduct($id, $name, $img, $desc, $price,$cateList)
{
    include 'connect.php';

    $update_products_query = 'UPDATE tbl_products
                            SET products_img=:img,
                                products_name=:name,
                                products_price=:price,
                                products_desc=:desc
                               
                              
                            WHERE products_id = :id';

    $update_products_set = $pdo->prepare($update_products_query);
    $update_products_set->execute(
        array(
            ':img'   => $img['name'],
            ':name'   => $name,
            ':price'    => $price,
            ':desc'     => $desc,
            ':trailer' => $trailer,
            ':id'      => $id,
        )
    );

    
    $update_gen_query = 'UPDATE tbl_prod_cate
                         SET cate_id= :cate_id,
                            products_id= :id
                         WHERE mov_cate_id=...';

    $update_gen_set = $pdo->prepare($update_gen_query);
    $update_gen_set->execute(
        array(':id' => $id,
              ':cate_id' => $cateList,
        )
    );

    //When update successfully, redirect gen to index.php
    if ($update_gen_set->rowCount()) {
        redirect_to('index.php');
    } else {
        //otherwise, return an error message
        $message = 'filed updtae products ...';
        return $message;
    }
}

function selectEdit($id)
{
    include 'connect.php';
    $query_movie_id = 'SELECT * FROM tbl_products WHERE products_id = ' . $id;

    $run_movie_id = $pdo->query($query_movie_id);
    if ($run_movie_id) {
        return $run_movie_id;
    } else {
        $error = 'There was a problem';
        return $error;
    }
}
