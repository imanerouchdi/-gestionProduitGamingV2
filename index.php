<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel="stylesheet" href="assets/css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script> 
$(document).ready(function(){
  $("button").click(function(){
    var div = $("div");  
    div.animate({left: '100px'}, "slow");
    div.animate({fontSize: '3em'}, "slow");
  });
});
</script> 
</head>
<body>
<button>Start Animation</button>

<p>By default, all HTML elements have a static position, and cannot be moved. To manipulate the position, remember to first set the CSS position property of the element to relative, fixed, or absolute!</p>

<div style="background:#98bf21;height:100px;width:200px;position:absolute;">HELLO</div>




<script src="assets/jQuery/jquery-3.1.1.min.js"></script>
    
    <script src="assets/js/bootstrap-3.3.7.min.js"></script>
    <script src="assets/js/script.js"></script>

</body>
</html>