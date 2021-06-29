<?php

include "config.php";

$sql = "SELECT * FROM users";

$query = $connect->query($sql);

$results = [];
while ($result = $query->fetch_assoc()) {
    $results[]  = $result;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">

                        <form action="process.php" method="POST">
                            <input type="hidden" name="type" value="insert">
                            <input type="text" class="form-control" name="name">
                            <input type="email" class="form-control mt-3" name="email">
                            <button type="submit" class="btn btn-primary mt-2">Add</button>
                        </form>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Proccess</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($results as $id => $item) { ?>
                                    <tr>
                                        <td><?php echo  $id+=1?></td>
                                        <td><?php echo $item['name']; ?></td>
                                        <td><?php echo $item['email']; ?></td>
                                        <td>
                                            <a href="edit.php?id=<?php echo $item['id']?>">Edit</a>

                                           <form action="process.php" method="POST">
                                           <input type="hidden" name="id" value="<?php echo $item['id']?>">
                                           <input type="hidden" name="type" value="delete">
                                           <button type="submit">Delete</button>

                                           </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>