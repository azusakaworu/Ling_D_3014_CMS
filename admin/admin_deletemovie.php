<?php 
    require_once('scripts/config.php');
    confirm_logged_in();

    // TODO: pull all users from tbl_user
    // save the result to be an array $users
    $tbl = 'tbl_movies';
    $movies = getAll($tbl);

    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Delete User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h2>Delate Movies</h2>
    <table>
        <thead>
            <tr>
                <th>Movie ID</th>
                <th>Movie Title</th>
                <th>Detele</th>
            </tr>
        </thead>
        <tbody>
            <?php while($movie = $movies->fetch(PDO::FETCH_ASSOC)):?>
            <tr>
                <td><?php echo $movie['movies_id'];?></td>
                <td><?php echo $movie['movies_title'];?></td>
                <td><a href="scripts/caller.php?caller_id=deleteMovie&id=<?php echo $movie['movies_id']; ?>">Delete</a></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>