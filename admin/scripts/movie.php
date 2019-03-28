<?php
function addMovie($cover, $title, $year, $run, $trailer, $release, $story, $genList)
{
    // check first one and last one...WHY?
    //    var_dump($cover);
    //    var_dump($genList);
    try {
        include 'connect.php';
        $file_type      = pathinfo($cover['name'], PATHINFO_EXTENSION);
        $accepted_types = array('jpg', 'png', 'gif', 'jpeg');
        if (!in_array($file_type, $accepted_types)) {
            throw new Exception('wrong file type');
        }

        $target_path = '../images/' . $cover['name'];
        if (!move_uploaded_file($cover['tmp_name'], $target_path)) {
            throw new Exception('failed to move uploaded files,check permission');
        }
        // copy是做什么的
        $th_copy = '../images/TH_' . $cover['name'];
        if (!copy($target_path, $th_copy)) {
            throw new Exception('failed to move copy files,check permission');
        }

        $addmovie_query = 'INSERT INTO tbl_movies(
               movies_cover,movies_title,movies_year,
               movies_runtime,movies_storyline,
               movies_trailer,movies_release)
                             VALUES(:cover,:title,:year,:runtime,:storyline,:trailer,:release)';
        $addmovie_set = $pdo->prepare($addmovie_query);

        $addmovie_set->execute(
            array(
                ':cover'     => $cover['name'],
                ':title'     => $title,
                ':year'      => $year,
                ':runtime'   => $run,
                ':storyline' => $story,
                ':trailer'   => $trailer,
                ':release'   => $release,

            )
        );

        if (!$addmovie_set) {
            throw new Exception('field to insert the new movie');
        }

        $last_id = $pdo->lastInsertId();

        $add_genList_query = 'INSERT INTO tbl_mov_genre(movies_id,genre_id )
                    VALUES(:movies_id,:genre_id )';
        $add_genList_set = $pdo->prepare($add_genList_query);
        $add_genList_set->execute(
            array(
                ':movies_id' => $last_id,
                ':genre_id'  => $genList,

            )
        );

        if (!$add_genList_set->rowCount()) {
            throw new Exception('field to insert the genrelist');
        }
        redirect_to('index.php');
    } catch (PDOException $exception) {
        echo 'add movie Error:' . $exception->getMessage();
        exit();
    }
}

function deleteMovie($id)
{
    include 'connect.php';

    $delete_movies_query = 'DELETE FROM tbl_movies WHERE movies_id = :id';
    $delete_movies_set   = $pdo->prepare($delete_movies_query);
    $delete_movies_set->execute(
        array(
            ':id' => $id,
        )
    );

    if (!$delete_movies_set) {
        throw new Exception('field to delet the  movie');
    }

    $delete_genid_query = 'DELETE FROM tbl_mov_genre
        WHERE movies_id = :id';
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

function editMovies($id, $cover, $title, $year, $run, $trailer, $release, $story, $genList)
{
    include 'connect.php';

    $update_movies_query = 'UPDATE tbl_movies
                            SET movies_cover=:cover,
                                movies_title=:title,
                                movies_year=:year,
                                movies_runtime=:run,
                                movies_trailer=:trailer,
                                movies_release=:release,
                                movies_storyline=:story
                            WHERE movies_id = :id';

    $update_movies_set = $pdo->prepare($update_movies_query);
    $update_movies_set->execute(
        array(
            ':cover'   => $cover['name'],
            ':title'   => $title,
            ':year'    => $year,
            ':run'     => $run,
            ':trailer' => $trailer,
            ':release' => $release,
            ':story'   => $story,
            ':id'      => $id,
        )
    );

    
    $update_gen_query = 'UPDATE tbl_mov_genre
                         SET genre_id= :genre_id,
                            movies_id= :id
                         WHERE mov_genre_id=...';

    $update_gen_set = $pdo->prepare($update_gen_query);
    $update_gen_set->execute(
        array(':id' => $id,
              ':genre_id' => $genList,
        )
    );

    //When update successfully, redirect gen to index.php
    if ($update_gen_set->rowCount()) {
        redirect_to('index.php');
    } else {
        //otherwise, return an error message
        $message = 'filed updtae movies ...';
        return $message;
    }
}

function selectEdit($id)
{
    include 'connect.php';
    $query_movie_id = 'SELECT * FROM tbl_movies WHERE movies_id = ' . $id;

    $run_movie_id = $pdo->query($query_movie_id);
    if ($run_movie_id) {
        return $run_movie_id;
    } else {
        $error = 'There was a problem';
        return $error;
    }
}
