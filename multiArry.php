<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<?php 
$allEmp = [
    [1 , "Hassan" , "Karachi" , 18 ,"hassanmeo548@gmail.com"],
    [ 2 ,"Ahmed" , "Multan" , 19],
    [ 3 , "Kinza" , "Lahore" , 13]
]
?>
 
 <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>city</th>
        <th>age</th>
        <th>email</th>
      </tr>
    </thead>
    <tbody>
        <?php
        foreach($allEmp as $value){
        ?>
      <tr>
        <?php
        foreach($value as $StdData){
        ?>
        <td><?php echo $StdData ?></td>
        
        <?php 
        }
        ?>
      </tr>
            <?php } ?>
    </tbody>
  </table>
</div>