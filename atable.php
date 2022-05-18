<?php

       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "bank";

        // Create connection
        $conn = new mysqli($servername,$username,$password,$dbname);

        // Check connection
        if ($conn->connect_error) 
        {
	     die("Connection failed: ". $conn->connect_error);
        }
    
	     // Taking all  values from the form data(input)	
      
        $SEmail="Rosales@gmail.com";
        $REmail="Nguyen@gmail.com"; 
        $Amount =50000;
     
            
         
    
                // Performing update query execution in account table for Receiver
            $sql2 = "UPDATE `account` SET `Balance`=(Balance+$Amount) WHERE `E-mail`= '$REmail' ";
            if(mysqli_query($conn,$sql2)){
              echo "Records were updated successfully 2.";
            } else {
            echo "ERROR: Could not able to execute $sql2. " . mysqli_error($conn);
            }
      
              
?>