<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

    <div class="w-auto h-[50rem]  bg-gradient-to-r from-cyan-200 to-cyan-400">

      <div class="pt-40 flex flex-col items-center justify-center">
        <div class="text-5xl">Transfer Your Funds</div>       
        <div class="mt-2 text-lg border-b-2 border-blue-900">This Page Will lead you to your home Account Page from where you can Transfer Your Funds to Other Account Holders</div>
        <div class=" mt-2 text-lg">Have a Happy and Hassel Free Transaction Here</div> 
      </div>

      <div class="flex items-center justify-center ">
        <button type="button" class=" m-4 px-5 py-2 rounded-full text-lg font-medium bg-cyan-600 hover:bg-blue-600 hover:font-semibold hover:scale-110 hover:text-zinc-50"><a href="customer.php">Let's start</a>
        </button>
      </div>
        
    </div>
    
    
    <!-- footer start -->
    <footer class="bg-indigo-900 text-white">
      <div class="grid justify-center p-2">Copyright © 2022 Local Bank &nbsp;&nbsp; All Rights Reserved</div>
    </footer>
    <!-- footer end -->

  </body>
</html>
