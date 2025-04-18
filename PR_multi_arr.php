<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
    <?php 
$stdData = [
    ["ALi", 18 , "Karachi" , "ali12@gmail.com"],
    ["Hassan", 19 , "Lahore" ],
    ["Shiza", 20 , "Multan" , "Hamza12@gmail.com"]
]
?>
    <table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Age</th>
      <th>City</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($stdData as $value) {
    ?>
    <tr>
        <?php 
        foreach ($value as $item) {
        ?>
        <td><?php echo $item?></td>
        <?php 
        }
        ?>

    </tr>
    <?php 
    }
    ?>
  </tbody>

    </div>
</body>
</html>


 -->





 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
    <?php 
$stdData = [
    ["ALi", 18 , "Karachi" , "ali12@gmail.com"],
    ["Hassan", 19 , "Lahore","f" ],
    ["Shiza", 20 , "Multan" , "Hamza12@gmail.com"]
]
?>
    <table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Age</th>
      <th>City</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    for ($i=0; $i <count($stdData) ; $i++) { 
        echo "<tr>";
        for ($u=0; $u <count($stdData[$i]) ; $u++) { 
            echo "<td>" .$stdData[$i][$u]."</td>";
        
        };
        echo "</tr>";
    };I. 
    ?>
   
  </tbody>
    </div>
</body>
</html>




