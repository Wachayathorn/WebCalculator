<html>
	<head>
		<title>Calculator</title>
	<style>
		body {
			background : url("bg.jpg") ;           
       		background-size : cover ;
		}

		form {
			font-family : Ailerons;
			color : white;
			text-shadow: 2px 2px 5px #FFCC33;
			font-size : 24px;
		}

		.Box {
    		border-radius: 15px 50px 30px;
    		background: black;
    		padding: 20px; 
    		width: 350px;
    		height: 650px; 
			opacity : 0.8 ;
		}

		h1 { 
			margin-top: 0.5px;
			text-shadow: 2px 2px 5px #FFCC33;
			font-family : sans-serif;
			font-size : 45px;
		}

		input[type=number] {
    		border : none ;
        	border-bottom : 1px solid #FFCC33 ;
        	background : transparent ;
        	color : white ;
        	width : 70% ;
        	padding : 4px;
			font-size : 18px;
			font-family : Ailerons;
		}

		select {
         	padding : 5px ;
         	margin : auto ;
         	width : 50% ;
         	border-radius  : 20px ;
			font-family : Ailerons;
			font-size: 18px;
		}

		.buttoncal {
    		background-color: #FFCC33;
			border-radius: 50px;
    		border: none;
    		color: black;
			font-family : Ailerons;
    		padding: 15px 32px;
    		text-align: center;
    		text-decoration: none;
    		display: inline-block;
    		font-size: 16px;
    		margin: 4px 2px;
			margin-top : 10px;
    		cursor: pointer;
		}

		.buttoncal:hover {
    		background-color: #FF9900;
		}

	</style>
	<body>
	<?php
		if (isset($_POST['submit'])){
			$a = $_POST['first'];
			$b = $_POST['second'];
			$oparator = $_POST['op'];
			switch ($oparator){
				case "ADD" : if (isset($_POST['first'])){
					$n = $b;
					$c = $a + $b;
				}
				break;
				case "SUBSTRACT" : if (isset($_POST['first'])){
					$n = $b;
					$c = $a - $b;
				}
				break;
				case "MULTIPLY" : if (isset($_POST['first'])){
					$n = $b;
					$c = $a * $b;
				}
				break;
				case "DIVIDE" : if (isset($_POST['first'])){
					$n = $b;
					$c = $a / $b;
				}
				break;
			}
		}
	?>
	<center><div class="Box">
			<h1 style="color:white;">Calculator</h1><br>
		<form action="" method="post">
			<label for="first">First Value</label><br><br>
  			<input type="number" id="first" name="first" placeholder="Enter number..." value = "<?php echo $c ?>"><br><br>

			<label for="second">Second Value</label><br><br>
			<input type="number" id="second" name="second" placeholder="Enter number..." value = "<?php echo $n ?>"><br><br>

			<label>Choose oparetor</label><br><br>
			<select name = "op">
				<option>None</option>
				<option <?php if(isset($_POST['op']) && $_POST['op'] == "ADD") echo 'selected="selected"';?>>ADD</option>
				<option <?php if(isset($_POST['op']) && $_POST['op'] == "SUBSTRACT") echo 'selected="selected"';?>>SUBSTRACT</option>
				<option <?php if(isset($_POST['op']) && $_POST['op'] == "MULTIPLY") echo 'selected="selected"';?>>MULTIPLY</option>
				<option <?php if(isset($_POST['op']) && $_POST['op'] == "DIVIDE") echo 'selected="selected"';?>>DIVIDE</option>
			</select><br><br><br><br>

			<label for="ans">Answer</label><br>
  			<input type="number" id="ans" name="ans" value = "<?php echo $c ?>"><br>
			
			<button class="buttoncal" name="submit" id="submit" value="submit">Calculate</button><br>
		</form>
	</div></center>
	</body>
</html>