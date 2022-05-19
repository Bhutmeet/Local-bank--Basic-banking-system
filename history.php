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

    <!-- container for table start -->
     <div class="w-auto min-h-[50rem] bg-gradient-to-br from-blue-100 via-blue-300 to-blue-500 pt-20 ">
        
        <div class="flex justify-center items-center">
              <label for="name" class="text-2xl p-1 m-2 font-semibold">History</label>
        </div>   
        <!-- table start -->
        <div class="flex justify-center ">
              
           <table class="border-separate border rounded-xl shadow-2xl mb-10 ">
            
            <thead>
                <tr class="">
                    <th  class="px-6 py-2 " scope="col">Sender E-mail</th>
                    <th  class="px-6 py-2 " scope="col">Receiver E-mail</th>
                    <th  class="px-6 py-2 " scope="col">Amount</th>
                    <th  class="px-6 py-2 " scope="col">Date</th>
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

                  $sql = "SELECT * FROM `histroy`;";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) 
                  {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "<tr><td class='px-6 py-2'>" . $row["Sender E-mail"]. "</td><td class='px-6 py-2'>" . $row["Receiver E-mail"] . "</td><td class='px-6 py-2'>". $row["Amount"]. "</td><td class='px-6 py-2'>" . $row["Date"] ."</td></tr>";
                    }
                  } 
                  else { 
                     echo "<tr><td class='px-6 py-2 '>0 results<td><tr>";
                   }
                  $conn->close();
              ?>
                
            </tbody>

          </table>

        </div>
        <!-- table end  -->

     </div>
    <!-- container for table end -->

    <!-- footer start -->
    <footer class="bg-indigo-900 text-white">
        <div class="grid justify-center p-2">Copyright © 2022 Local Bank &nbsp;&nbsp; All Rights Reserved</div>
    </footer>
    <!-- footer end -->
    
</body>
</html>