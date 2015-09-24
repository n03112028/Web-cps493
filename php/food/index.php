<?php //"php" is not needed for most sever c9 needs this
    $name = 'Justin Cody';
    $message = "Welcome $name"; //single quote is literal and double quotes look for varibles in the string
    $person = array('Name' => $name,'Age' => 22, CallorieGoal => 2000);
    $food = array(
        array('Name' => 'Breakfast', 'Time' => strtotime("-1 hour"), Callories => 400),
        array('Name' => 'Lunch', 'Time' => strtotime("now"), Callories => 800),
        array('Name' => 'Snack', 'Time' => strtotime("now + 1 hour"), Callories => 600),
        array('Name' => 'Dinner', 'Time' => strtotime("6pm"), Callories => 300),
        );
    $total = 0;
    foreach ($food as $meal) {     //food is the list meal is the interator varible
        $total += $meal['Callories'];
        
    }
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Food intake</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
            <h1>Food Intake</h1>
            <h2>Welcome <?=$name?></h2>
            <div class="panel panel-success">...</div>
                <div class = "panel-heading"> Your Data</div>
                <div class = "panel-bod">
                    <dl class = "dl- horizontal">
                        <dt>Name</dt>
                        <dd><?=$person['Name']?> </dd>
                        <dt>Age</dt>
                        <dd><?=$person['Age']?> </dd>
                        <dt>Goal</dt>
                        <dd><?=$person['CallorieGoal']?> </dd>
                        <dt>Today's intake</dt>
                        <dd><?=$total?> </dd>
                    </dl>
                </div>


      <div class="row">
        <div class="col-md-8 col-xs-10">
            <a href="#" class="btn btn-success">
                <i class="glyphicon glyphicon-plus"></i>
                New Record
            </a>
            <a href="#" class="btn btn-danger">
                <i class="glyphicon glyphicon-trash"></i>
                Delete All
                <span class="badge">4</span>
            </a>
            <table class="table table-condensed table-striped table-bordered table-hover">
              <thead>
                <tr>
                    <?php $name = $food[0];?>
                  <th>#</th>
                  <? foreach($names as $n): ?>
                  <th><?=$n?></th>
                  <?endforeach; ?>
                </tr>
              </thead>
              <tbody>
                  <?php foreach($food as $i =>  $meal): ?> 
                <tr>
                  <th scope="row"><?=$i+1?></th>
                  <td><?$meal['Name']?></td>
                  <td><?=date("M d Y  h:i:sa",$meal['Time'])?></td>
                  <td><?$meal['Callories']?></td>
                </tr>
              <?php endforeach; ?>
              </tbody>
            </table>  
          
        </div>
        <div class="col-md-4 col-xs-2">
            <span class="label label-success">Success</span>
            <span class="label label-info">Info</span>
            <span class="label label-warning">Warning</span>
        </div>
        <div class="col-md-4 col-xs-10">
            <div class="alert alert-success" role="alert">
                You did well
            </div>
            <div class="alert alert-danger" role="alert">
                Oh no! You messed up.
            </div>
            <div class="progress">
             

              </div>
            </div>
          
        </div>
      </div>
      
            
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
;
    </script>
  </body>
</html>