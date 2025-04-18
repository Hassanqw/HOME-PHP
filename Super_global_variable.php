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
<div class="container">
       <form action="" method="GET">
        <div class="form-group">
            <label for="my-input">Name</label>
            <input name="userName" id="my-input" class="form-control" type="text" name="">
        </div>
        <button class="btn btn-info" name="sub">Submit</button>
       </form>

       <?php 
       //$_POST[]
    //    if(isset($_POST["sub"])){
    //     $userName =$_POST["userName"];
    //     echo "This is My User " . $userName;
    //    };

        //$_GET[]
       if(isset($_GET["sub"])){
        $userName =$_GET["userName"];
        echo "This is My User " . $userName;
       };
       ?>
</body>
</html>
