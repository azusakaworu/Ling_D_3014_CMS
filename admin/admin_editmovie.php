<?php
require_once 'scripts/config.php';

confirm_logged_in();

$tbl1   = 'tbl_movies';
$movies = getAll($tbl1);

$value           = "movies_id";
$tbl             = 'tbl_movies';
$col             = 'movies_id';
$found_movie_set = getSingle($tbl, $col, $value);

// if(is_string($found_movie_set)){
//     $message = 'Failed to get movie info!';
// }
// isset 和 ！empty 的区别

?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Edit Movie</title>
</head>
<body>
	<h2>Edit Movie</h2>
    <table>
        <thead>
            <tr>
                <th>Movie ID</th>
                <th>Movie Title</th>
                <th>Select</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($movie = $movies->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?php echo $movie['movies_id']; ?></td>
                <td><?php echo $movie['movies_title']; ?></td>
                <!-- 选择以后如何蹦到对应的ID movie form  -->
                <td><a href="movie_edit_details.php?id=<?php echo $movie['movies_id']; ?>">Select</a></td>
            </tr>
            <?php endwhile;?>
        </tbody>
    </table>
</body>
</html>