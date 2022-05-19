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
    
    <!-- container for transfer form start-->
    <div class="w-auto h-[50rem] bg-gradient-to-br from-blue-100 via-blue-300 to-blue-500">
       
       <div id="form" class="w-1/3 flex justify-center items-center m-auto">
                
           <div id="formin" class="w-full border-separate border rounded-xl shadow-2xl my-28 p-5">
                <div class="flex flex-col justify-center items-center">
                   <img src="banklogo.jpg" class="mx-auto w-1/3 rounded-full" alt="bank logo here">
                   <label for="name" class="text-xl p-1 font-medium">Local Bank</label>
                </div>
               <form action="htable.php" method="POST" class="flex flex-col space-y-1 ">
                  <label for="Sender" class="text-lg">Sender</label>
                  <input type="email" name="semail" placeholder="Enter Sender's E-mail" class=" border border-black border-2 rounded-md">
                  <label for="Receiver" class="text-lg">Receiver</label>
                  <input type="emial" name="remail" placeholder="Enter Receiver's E-mail" class=" border border-black border-2 rounded-md">
                  <label for="Amount" class="text-lg">Amount</label>
                  <input type="number" name="amount" placeholder="Enter the Amount" min="100" max="100000" class=" border border-black border-2 rounded-md">
                  <div class="mx-auto space-x-2.5">
                      <button type="submit" name="submitform" class="text-lg mx-1 mt-5  px-5 py-2 rounded-full text-lg font-medium bg-cyan-600 " onclick="note()">Transfer</button>
                        <script>
                         function note() 
                           {
                              alert("Transaction done successfully \n for more information go to history");
                           }
                        </script>
                      <button type="reset" class="text-lg mx-1 mt-5 px-5 py-2 rounded-full text-lg font-medium bg-cyan-600 ">Cancel</button>
                  </div>
              </form>
            </div>
       </div>
    </div>
    <!-- container for transfer form end -->
    
    <!-- footer start -->
    <footer class="bg-indigo-900 text-white">
        <div class="grid justify-center p-2">Copyright © 2022 Local Bank &nbsp;&nbsp; All Rights Reserved</div>
    </footer>
    <!-- footer end -->
    
</body>
</html>