<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home | FakeBook | Connecting People</title>

   <?php include "includes/headlink.php"  ?>

</head>

<body>
   <?php include "includes/header.php" ?>

   <div class="flex flex-1 px-[10%] mt-10 gap-3">
      <div class="w-3/12 ">
         <div class=" bg-white h-[220px] border flex flex-col items-center p-4">
            <img src="./imgs/pexels-ella-olsson-1640777.jpg" class="w-[100px] h-[100px] rounded-full object-cover "
               alt="">
            <h2 class="text-2xl text-blue-600 font-bold">User Name</h2>
         </div>
      </div>

      <!-- POST -->
      <div class="w-6/12">
         <div class="bg-white border mb-3  p-5">
            <form action="" method="post">
               <textarea
                  class="w-full resize-none p-3 border rounded outline-none focus-within:border-slate-700 transition"
                  name="" id="" rows="5" placeholder="What's in your mind?"></textarea>
               <div class="flex justify-end">
                  <input type="submit" name="post" value="Post"
                     class="bg-blue-700 text-white px-4 py-1 rounded text-sm">
               </div>
            </form>
         </div>

         <!-- USER POST  -->
         <div class="bg-white border mb-3 ">
            <div class="flex flex-1 p-4">
               <div class="w-2/12">
                  <img src="./imgs/pexels-ella-olsson-1640777.jpg" class="w-[50px] h-[50px] rounded-full object-cover "
                     alt="">
               </div>
               <div class="w-10/12">
                  <h2 class="text-blue-600 text-font-semibold text-xl">User Name</h2>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae natus accusamus
                     quidem soluta quisquam, reprehenderit aspernatur accusantium unde sit, repudiandae
                     nisi ab delectus reiciendis nobis maxime? Adipisci at fugiat sapiente.</p>

                  <div class="flex w-full gap-3 mt-3">
                     <a href="#">Like</a>
                     <a href="#">Comment</a>
                     <span class="text-slate-400">24 April 2024 13:20</span>
                  </div>
               </div>
            </div>
         </div>

         <!-- USER POST  -->
         <div class="bg-white border mb-3 ">
            <div class="flex flex-1 p-4">
               <div class="w-2/12">
                  <img src="./imgs/pexels-ella-olsson-1640777.jpg" class="w-[50px] h-[50px] rounded-full object-cover "
                     alt="">
               </div>
               <div class="w-10/12">
                  <h2 class="text-blue-600 text-font-semibold text-xl">User Name</h2>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae natus accusamus
                     quidem soluta quisquam, reprehenderit aspernatur accusantium unde sit, repudiandae
                     nisi ab delectus reiciendis nobis maxime? Adipisci at fugiat sapiente.</p>

                  <div class="flex w-full gap-3 mt-3">
                     <a href="#">Like</a>
                     <a href="#">Comment</a>
                     <span class="text-slate-400">24 April 2024 13:20</span>
                  </div>
               </div>
            </div>
         </div>

         <!-- USER POST  -->
         <div class="bg-white border mb-3 ">
            <div class="flex flex-1 p-4">
               <div class="w-2/12">
                  <img src="./imgs/pexels-ella-olsson-1640777.jpg" class="w-[50px] h-[50px] rounded-full object-cover "
                     alt="">
               </div>
               <div class="w-10/12">
                  <h2 class="text-blue-600 text-font-semibold text-xl">User Name</h2>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae natus accusamus
                     quidem soluta quisquam, reprehenderit aspernatur accusantium unde sit, repudiandae
                     nisi ab delectus reiciendis nobis maxime? Adipisci at fugiat sapiente.</p>

                  <div class="flex w-full gap-3 mt-3">
                     <a href="#">Like</a>
                     <a href="#">Comment</a>
                     <span class="text-slate-400">24 April 2024 13:20</span>
                  </div>
               </div>
            </div>
         </div>

      </div>
      <!-- FRIENDS -->
      <div class="w-3/12">
         <div class=" bg-white border min-h-[200px] p-5">
            <h3 class="text-slate-700 text-lg font-semibold border-b pb-3 mb-3">Friends (10)</h3>

            <div class="flex gap-3 items-center mb-3">
               <img src="./imgs/pexels-ella-olsson-1640777.jpg" class="w-[50px] h-[50px] rounded-full object-cover "
                  alt="">
               <div class="">
                  <h4 class="text-lg text-blue-600 font-semibold ">User Name</h4>
               </div>
            </div>
            <div class="flex gap-3 items-center mb-3">
               <img src="./imgs/pexels-ella-olsson-1640777.jpg" class="w-[50px] h-[50px] rounded-full object-cover "
                  alt="">
               <div class="">
                  <h4 class="text-lg text-blue-600 font-semibold ">User Name</h4>
               </div>
            </div>
            <div class="flex gap-3 items-center mb-3">
               <img src="./imgs/pexels-ella-olsson-1640777.jpg" class="w-[50px] h-[50px] rounded-full object-cover "
                  alt="">
               <div class="">
                  <h4 class="text-lg text-blue-600 font-semibold ">User Name</h4>
               </div>
            </div>
            <div class="flex gap-3 items-center mb-3">
               <img src="./imgs/pexels-ella-olsson-1640777.jpg" class="w-[50px] h-[50px] rounded-full object-cover "
                  alt="">
               <div class="">
                  <h4 class="text-lg text-blue-600 font-semibold ">User Name</h4>
               </div>
            </div>

         </div>
      </div>

   </div>

</body>

</html>