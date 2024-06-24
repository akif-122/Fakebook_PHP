<?php
$url = basename($_SERVER["REQUEST_URI"]);

?>
<div class="flex bg-blue-500 text-white py-3 px-[10%] justify-between items-center">
    <a href="index.php">
        <h1 class="m-0 text-2xl font-bold">FakeBook</h1>
    </a>

    <?php
    if($url == "index.php" || $url == "profile.php" || $url == ""):

    ?>
    <form action="" method="get" class="flex">
        <input type="text" class="border outline-none w-[300px] px-3 py-2" placeholder="Search...">
        <input type="submit" value="Search" class="bg-blue-800 text-white px-4 py-1">
    </form>

    <?php endif; ?>



    <div class="flex gap-3">
        <?php

        if ($url == "register.php") {
            echo '<a href="login.php" class="bg-green-700 text-white px-3 py-2 rounded-lg text-sm ">Login</a>';
        } else {
            echo '<a href="register.php" class="bg-green-700 text-white px-3 py-2 rounded-lg text-sm">Register</a>';
        }
        ?>



    </div>
</div>