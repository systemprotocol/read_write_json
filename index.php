<!DOCTYPE html>
<html lang="en">
<head> <!-- Using bootstrap for styling and structure -->
  <title></title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#button").click(function(){
        $("#div1").load("functions.php");
    });
});
</script>  
</head>

<body>
<div class="container">
  <div class="row">
    <div class="jumbotron">
		<h3>Show content of test.json and write output to flat.json</h3>
		<div id="div1"></div>
		<button id="button">click here to run function</button>
    </div>
  </div>
</div>
		
</body>
</html>
