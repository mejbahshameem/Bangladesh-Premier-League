<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	</head>
	<body>	
		 <form action="all.php" method="post">
            
            <p>Player Name:</p> 
            <input type="text" name="name">
            <p>Jersey No:</p>
            <input type="text" name="jersey">
			<p>Country:</p>
            <input type="text" name="country">
			<p>Select Team:</P>
			<select name="team">
			<option value="Dhaka Dynamites">Dhaka Dynamites</option>
			<option value="Chittagong Vikings">Chittagong Vikings</option>
			<option value="Comilla Victorians">Comilla Victorians</option>
			<option value="Barisal Bulls">Barisal Bulls</option>
			<option value="Sylhet Superstars">Sylhet Superstars</option>
			<option value="Rangpur Riders">Rangpur Riders</option>
			
			</select>
			
			<p>Age:</p>
            <input type="text" name="age">
		    <p>Playing Role:</p>
            <input type="text" name="role">
		    <p>Macthes:</p>
            <input type="text" name="match">
			<p>Runs:</p>
            <input type="text" name="run">
			<p>Wickets:</p>
            <input type="text" name="wicket">
            </br></br>
			<input type="submit" name="insert" value="add" />
         </form>
	<br><br>
	<a href="ptable.html" >Back</a> <a>--</a>   <a href="admin.html">Home</a>
	</body>
</html>