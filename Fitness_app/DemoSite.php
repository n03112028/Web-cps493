<?php
    $name = 'Name of person';
    $message = "Welcome $name";
    
    $person = array( 'Name' => $name, 'Age' => 22, CallorieGoal => 2000 ); //test code for future idea
    
    $food = array(
        array( 'Name' => 'Breakfast', 'Time' => strtotime("-1 hour"), Callories => 400 ),
        array( 'Name' => 'Lunch', 'Time' => strtotime("now"), Callories => 800 ),
        array( 'Name' => 'Snack', 'Time' => strtotime("now + 1 hour"), Callories => 400 ),
        array( 'Name' => 'Dinner', 'Time' => strtotime("6pm"), Callories => 400 ),
        );
        
    //$food[] = $_REQUEST;
    
    $total = 0;
    foreach ($food as $meal) {
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

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <style type="text/css">
  
           
            ul
            {
            	font-size: 25px;
                list-style: none;
            	display: block;
            	text-align: center;
            	padding:0;
            
            		
             }
            ul li
            {
                    
                display: inline-block;
                position: relative;
                width: 200px;
                    
                     
            }
            ul li a
            {
                    
                
                text-decoration: none;
            }
            ul li a:hover
            {
            		
                background: #ffffff;
                  
            }
            ul li ul.dropdown
            {
                 
                display: none;
                position: absolute;
              
            }
            ul li:hover ul.dropdown
            {
                
                text-align: center;
                display: block;
            }
            p
            {
                 text-align:center;   
            }
                
            h1
            {
                text-align:center;
            }
                
        
    </style>
  
  
  </head>
  <body>
      <div class="container">
  <h1>Justin's Meal Tracker </h1>
</div>

<div>
    	<ul>
         
            <li><a href="#">About</a></li>
             <li> <a href="#"> Fitness &#9662;</a>
                <ul class="dropdown">
                    <li><a href="DemoSitepg2.html">being worked on</a></li>
                    <li><a href="display: inline-block;">being worked on</a></li>
         
              </ul></li>
             <li> <a href="#">Meals &#9662;</a>
                <ul class="dropdown">
                    <li><a href="DemoSitepg2.html">being worked on</a></li>
                    <li><a href="DemoSitepg2.html">being worked on</a></li>
              </ul></li>
        </ul>
</div>
    <div class="container">
         
            <div class="panel panel-success">
                <div class="panel-heading"><?=$message?>, This is Your Data</div>
                <div class="panel-body">
                    <dl class="dl-horizontal">
                        <dt>Name</dt>
                        <dd><?=$person['Name']?></dd>
                        <dt>Age</dt>
                        <dd><?=$person['Age']?></dd>
                        <dt>Goal</dt>
                        <dd><?=$person['CallorieGoal']?></dd>
                        <dt>Today's Intake</dt>
                        <dd><?=$total?></dd>
                    </dl>
                </div>
            </div>
      <div class="row">
        <div class="col-md-8 col-xs-10">
            <a href="DemoSite2.html" class="btn btn-success">
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
                  <th>#</th>
                  <th>Name</th>
                  <th>Time</th>
                  <th>Callories</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($food as $i => $meal): ?>
                <tr>
                  <th scope="row"><?=$i+1?></th>
                  <td><?=$meal['Name']?></td>
                  <td><?=date("M d Y  h:i:sa", $meal['Time'])?></td>
                  <td><?=$meal['Callories']?></td>
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