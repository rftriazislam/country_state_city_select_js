
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Country Select With Js</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type= "text/javascript" src="countrydata.js"></script>
</head>
<body>
	<h1 class="center">Country Select State/Division</h1>
    <form method="post" action="infosave.php" >
		<div class="input-group">
			<label>Country Name</label>
            <select class="select" id="country" name ="country" style="height: 40px;width: 100%;"></select>
		</div>
		<div class="input-group">
            <label>City/State</label>
            
			<select class="select" style="height: 40px;width: 100%;" name ="state" id ="state"></select>
        </div>
       
		
	</form> 
   

</div>
    <script language="javascript">
    countryName("country", "state"); 
    
</script>


</body>
</html>