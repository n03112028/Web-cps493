<?php
session_start();
    $name = 'User';
    $message = "Welcome $name";
    
    $person = array( 'Name' => $name, 'Age' => 22 );
    
    $work = $_SESSION['work'];
    if(!$work)
    {
      $_SESSION['work'] = $work = array
          (
          array( 'did' => 'biceps'),
          array( 'did' => 'lunge'),
          array( 'did' => 'crunch'),
          array( 'did' => 'situp' ),
          );
    }
   
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Food Intake</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
            <h1>Exercise Log</h1>
            <h2><?=$message?></h2>
         
      <div class="row">
        <div class="col-md-8 col-xs-10">
            <a href="phyedit.php" class="btn btn-success">
                <i class="glyphicon glyphicon-plus"></i>
                New Record
            </a>
           
            <br />
            <table class="table table-condensed table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th>Tools</th>
                  <th>Workout</th>
                </tr>
              </thead>
              <tbody>
                  <?php foreach($work as $i => $count): ?>
                <tr>
                  <th scope="row">
                    <div class="btn-group" role="group" aria-label="...">
                      <a href="phyedit.php?id=<?=$i?>" title="Edit" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="phydelete.php?id=<?=$i?>" title="Delete" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                    </div>
                  </th>
                  <td><?=$count['did']?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>  
          
        </div>
       
      </div>
      
            
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>