<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | FakeBook | Connecting People</title>

    <?php include "includes/headlink.php" ?>

</head>

<body>
    <?php include "includes/header.php" ?>
    <div class="flex flex-1 px-[10%] mt-5">
        <div class="w-10/12">
            <div class="bg-white pb-4">
                <div class=" bg-center bg-cover bg-[url('./imgs/pexels-ella-olsson-1640777.jpg')] h-[350px] w-full ">
                </div>


                <div class="flex flex-1 mt-[-100px] pl-8 items-baseline justify-between">
                    <img src="imgs/pexels-ella-olsson-1640777.jpg" class="rounded-full object-cover w-[200px] h-[200px]"
                        alt="">
                    <div class="flex gap-3">
                        <a href="#" class="bg-slate-700 rounded text-white px-3 py-2 text-sm">Upload Cover</a>
                        <a href="#" class="bg-blue-600 rounded text-white px-3 py-2 text-sm">Edit Profile</a>
                    </div>
                </div>
                <div class="flex flex-1 px-10 items-center gap-4 bg-white mt-5">
                    <a href="#" class="text-lg font-semibold hover:text-blue-600">Timeline</a>
                    <a href="#" class="text-lg font-semibold hover:text-blue-600">Friends</a>
                    <a href="#" class="text-lg font-semibold hover:text-blue-600">Photos</a>
                    <a href="#" class="text-lg font-semibold hover:text-blue-600">Settings</a>
                </div>
            </div>


            <!-- MORE CONTENT -->

            <div class="flex mt-5 gap-3">
                <div class="w-4/12">
                    <div class=" bg-white border min-h-[200px] p-5">
                        <h3 class="text-slate-700 text-lg font-semibold border-b pb-3 mb-3">Friends (10)</h3>

                        <div class="flex gap-3 items-center mb-3">
                            <img src="./imgs/pexels-ella-olsson-1640777.jpg"
                                class="w-[50px] h-[50px] rounded-full object-cover " alt="">
                            <div class="">
                                <h4 class="text-lg text-blue-600 font-semibold ">User Name</h4>
                            </div>
                        </div>
                        <div class="flex gap-3 items-center mb-3">
                            <img src="./imgs/pexels-ella-olsson-1640777.jpg"
                                class="w-[50px] h-[50px] rounded-full object-cover " alt="">
                            <div class="">
                                <h4 class="text-lg text-blue-600 font-semibold ">User Name</h4>
                            </div>
                        </div>
                        <div class="flex gap-3 items-center mb-3">
                            <img src="./imgs/pexels-ella-olsson-1640777.jpg"
                                class="w-[50px] h-[50px] rounded-full object-cover " alt="">
                            <div class="">
                                <h4 class="text-lg text-blue-600 font-semibold ">User Name</h4>
                            </div>
                        </div>
                        <div class="flex gap-3 items-center mb-3">
                            <img src="./imgs/pexels-ella-olsson-1640777.jpg"
                                class="w-[50px] h-[50px] rounded-full object-cover " alt="">
                            <div class="">
                                <h4 class="text-lg text-blue-600 font-semibold ">User Name</h4>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-8/12 ">
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
                                <img src="./imgs/pexels-ella-olsson-1640777.jpg"
                                    class="w-[50px] h-[50px] rounded-full object-cover " alt="">
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
                                <img src="./imgs/pexels-ella-olsson-1640777.jpg"
                                    class="w-[50px] h-[50px] rounded-full object-cover " alt="">
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
                                <img src="./imgs/pexels-ella-olsson-1640777.jpg"
                                    class="w-[50px] h-[50px] rounded-full object-cover " alt="">
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
            </div>

        </div>
        <div class="w-2/12"></div>
    </div>


</body>

</html>