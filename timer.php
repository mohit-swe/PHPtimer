<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <title>PHP Assignment</title>
</head>
<body>
<div class="container-fluid" style="text-align:center; padding-top:190px;">
<h1>PHP Development </h1>
<h4>Note: <i>Start time is 0:03:00 now we made it in hh:mm:ss so we made 3 miniutes into 180 sec <b>HENCE FINAL start time is 00:180:00</b> </i></h4>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Lets Begin.
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PHP Assignment</h5>
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h1><div class="sub_shops">PHP Timer</div></h1>
      <h1><div id="vx"></div></h1>

      <button type="button" class="btn btn-success">Start</button>
      <button type="button" class="btn btn-danger">Stop</button>
      
      </div>
      
    </div>
  </div>
</div>

</div>
<?php
session_start();
date_default_timezone_set("Asia/KolKata");
 $_SESSION['time']=180;
$_SESSION['sec']="00";
$_SESSION['minutes_in_sec']="180";
$_SESSION['hour']="00";
?>


<script>
$(document).ready(function(){
	

var t = window.setInterval(function() 
{
  if(!click) 
  {
	
   $("#vx").load('time.php');
  }
}, 1000);




$('.btn-danger').on('click', function(e) 
{
  e.preventDefault();
  click = true;
  
});
$('.btn-success').on('click', function(e) 
{
  e.preventDefault();
  click = false;
});
});
</script>



</body>
</html>