<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking System</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    
    <!-- navbar star -->
    <nav class="bg-cyan-600 text-lg">
        <ul class="flex flex-row justify-end  space-x-4 ">
          <img src="banklogo.jpg" class="my-2 ml-2 w-8 h-8 rounded-full" alt="bank logo here">
          <li class=" my-2 mx-3 grow ">Local Bank</li>
          <li class=" my-2 cursor-pointer"><a href="index.php">Home</a></li>
        <li class=" my-2 cursor-pointer"><a href="customer.php">View Customer</a></li>
        <li class=" my-2 cursor-pointer"><a href="transfer.php">Transfer Money</a></li>
        <li class=" my-2 cursor-pointer"><a href="history.php">History</a></li>
          <li></li>
        </ul>
    </nav>
    <!-- navbar end -->

    
    <!-- div of table  -->
    <div class="w-auto h-[50rem] bg-gradient-to-br from-blue-100 via-blue-300 to-blue-500 pt-28">
    
      <!-- table start -->
      <div class="flex justify-center">
          
          <table class="border-separate border rounded-xl shadow-2xl ">
            
            <thead>
                <tr class="">
                    <th  class="px-6 py-2 " scope="col">Sr no.</th>
                    <th  class="px-6 py-2 " scope="col">Name</th>
                    <th  class="px-6 py-2 " scope="col">E-mail</th>
                    <th  class="px-6 py-2 " scope="col">Balance(in &#8377;)</th>
                </tr>
            </thead>

            <tbody>
              <?php
                $conn = mysqli_connect("localhost", "root", "", "bank");
                // Check connection
                if ($conn->connect_error) 
                {
                die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM `account`;";
                $result = $conn->query($sql);
                 if ($result->num_rows > 0) 
                 {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "<tr><td class='px-6 py-2'>" . $row["Sr No."]. "</td><td class='px-6 py-2'>" . $row["Name"] . "</td><td class='px-6 py-2'>". $row["E-mail"]. "</td><td class='px-6 py-2'>" . $row["Balance"] ."</td></tr>";
                    }
                  } 
                else { echo "0 results"; }
                $conn->close();
              ?>
                
            </tbody>
          </table>

      </div>
      <!-- table end  -->
     
        <!-- buttoon start -->
        <div class="flex items-center justify-center">
          <button type="button" class=" mt-10 px-5 py-2 rounded-full text-lg font-medium bg-cyan-600 "><a href="transfer.php">Transfer Money</a>
          </button>
        </div>
        <!-- button end --> 
    
    </div>
    <!-- div of table end -->
    
    

    <!-- footer start -->
    <footer class="bg-indigo-900 text-white">
        <div class="grid justify-center p-2">Copyright © 2022 Local Bank &nbsp;&nbsp; All Rights Reserved</div>
    </footer>
    <!-- footer end -->
    
</body>
</html>