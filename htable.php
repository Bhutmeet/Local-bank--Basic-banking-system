<!-- php for form start -->
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
        $SEmail =  $_REQUEST['semail'];
        $REmail = $_REQUEST['remail'];
        $Amount =  $_REQUEST['amount'];
        $Date =date("d-F-Y");
    
        
          // Performing update query execution in account table for sender
          $sql1 = "UPDATE `account` SET `Balance`=(Balance-$Amount) WHERE `E-mail`= '$SEmail' ";
           if(mysqli_query($conn,$sql1)){
              // echo "Records were updated successfully 1.";
              $flag=true;
            } else {
            echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
            }


            if($flag==true){
               // Performing update query execution in account table for Receiver
               $sql2 = "UPDATE `account` SET `Balance`=(Balance+$Amount) WHERE `E-mail`= '$REmail' ";
               if(mysqli_query($conn,$sql2)){
                  // echo "Records were updated successfully 2.";
                  $flag2=true;
                } else {
                echo "ERROR: Could not able to execute $sql2. " . mysqli_error($conn);
                }
              }
            
             if($flag2==true){
               // Performing insert query execution in history table
               $sql = "INSERT INTO histroy VALUES ('$SEmail','$REmail','$Amount','$Date')";
               if ($conn->query($sql) === TRUE) {
                if (isset($_POST['submitform']))
                {  
                   ?><script type="text/javascript"> window.location = "history.php";
                      </script>      
                    <?php
                 }
               } 
               else  { echo "Error: " . $sql . "<br>" . $conn->error;}

              } 

      // Close connection	
      mysqli_close($conn);

?>
<!-- php for form end -->