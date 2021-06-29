<?php

include "config.php";


$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id='{$id}' ";

$query = $connect->query($sql);

$result = $query->fetch_assoc();

print_r($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>EDIT</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <form action="process.php" method="POST">
                            <input type="hidden" name="type" value="update">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <input type="text" class="form-control" name="name" value="<?php echo $result['name']?>">
                            <input type="email" class="form-control mt-3" name="email" value="<?php echo md5( $result['email'])?>">
                            <button type="submit" class="btn btn-primary mt-2">UPDATE</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>

</html>