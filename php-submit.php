<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Submit</title>
</head>
<body>
	<h1>PHP Submit</h1>
	<?php
	    
	    echo "<br>";
	    if( $_SERVER['REQUEST_METHOD']==="POST"){
	    	if(empty($_POST['fname'])){
	    		echo "Value is empty ";
	    	}
	    	else{
	    	echo test_input($_POST['fname']);
	        }
	        echo "<br>";
	        if(empty($_POST['lname'])){
	        		echo "Value is empty ";
	    	}
	    	else{
	    	echo test_input($_POST['lname']);
	        }
	        echo "<br>";
	        if(empty($_POST['gender'])){
	        		echo "Value is empty ";
	    	}
	    	else{
	    	echo test_input($_POST['gender']);
	        }
	        echo "<br>";
	         if(empty($_POST['DoB'])){
	        		echo "Value is empty ";
	    	}
	    	else{
	    	echo test_input($_POST['DoB']);
	        }
	        echo "<br>";
	         if(empty($_POST['presentaddress'])){
	        		echo "Value is empty ";
	    	}
	    	else{
	    	echo test_input($_POST['presentaddress']);
	        }
	        echo "<br>";
	        if(empty($_POST['parmanentaddress'])){
	        		echo "Value is empty ";
	    	}
	    	else{
	    	echo test_input($_POST['parmanentaddress']);
	        }
	        echo "<br>";
	        if(empty($_POST['phone'])){
	        		echo "Value is empty ";
	    	}
	    	else{
	    	echo test_input($_POST['phone']);
	        }
	        echo "<br>";
	        if(empty($_POST['email'])){
	        		echo "Value is empty ";
	    	}
	    	else{
	    	echo test_input($_POST['email']);
	        }
	        echo "<br>";
	        if(empty($_POST['pwl'])){
	        		echo "Value is empty ";
	    	}
	    	else{
	    	echo test_input($_POST['pwl']);
	        }
	        echo "<br>";
	        if(empty($_POST['username'])){
	        		echo "Value is empty ";
	    	}
	    	else{
	    	echo test_input($_POST['username']);
	        }
	        echo "<br>";
	        if(empty($_POST['password'])){
	        		echo "Value is empty ";
	    	}
	    	else{
	    	echo test_input($_POST['password']);
	        }






	    }
	    echo "<br>"; 

	    function test_input($data)
	    {
	    	$data=
	    	     trim($data);

	    	$data= 
	    	    stripcslashes($data);
	    	$data =
	    	    htmlspecialchars($data);
	    	    return $data;


	    }


	?>
	

	
	

</body>
</html>