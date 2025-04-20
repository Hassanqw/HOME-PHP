<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- <div class="container">
        <form action="" method="GET">
            <div class="form-group">
                <label for="my-input">Name</label>
                <input name="userName" id="my-input" class="form-control" type="text" name="">
            </div>
            <button class="btn btn-info" name="sub">Submit</button>
        </form> -->

    <?php
    //$_POST[]
    //    if(isset($_POST["sub"])){
    //     $userName =$_POST["userName"];
    //     echo "This is My User " . $userName;
    //    };

    //$_GET[]
    // if (isset($_GET["sub"])) {
    //     $userName = $_GET["userName"];
    //     echo "This is My User " . $userName;
    // };
    // 
    ?>



    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $Email = $_POST["email"];
        $Password = $_POST["pass"];
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>SuccessFull Run My Code!</strong> This is code Email ' . $Email . ' $ Passowrd ' . $Password . '
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
    ?>
    <div class="container mt-3">
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>