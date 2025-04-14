<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<?php

$allStd = [
    ["id" => 1 , "name" => "Hassan" , "City" => "Karachi"],
    ["id" => 2 , "name" => "Mehak" , "City" => "Multan"],
    ["id" => 3 , "name" => "Soban" , "City" => "Lahore"]
    ]
?>
<div class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>City</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($allStd as $key => $value){
        ?>
        <tr>
            
            <td><?php echo $value["id"]?></td>
            <td><?php echo $value["name"]?></td>
            <td><?php echo $value["City"]?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</div>