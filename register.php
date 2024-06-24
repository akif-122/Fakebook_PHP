<?php
    include "classes/signup.php";
    $first_name = null;
    $last_name = null;
    $email = null;
    $gender = null;
    $password = null;
    $cpassword = null;
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        echo "Hello";
        $signup = new Signup();

        $result = $signup->evaluate($_POST);

        echo $result;

        $first_name = $_POST["first_name"]; 
        $last_name = $_POST["last_name"]; 
        $email = $_POST["email"]; 
        $gender = $_POST["gender"]; 
        $password = $_POST["password"]; 
        $cpassword = $_POST["cpassword"]; 
    }
    
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | FakeBook | Connecting People</title>

    <?php include "includes/headlink.php" ?>

</head>

<body>
    <?php include "includes/header.php" ?>

    <div class="flex flex-1 px-[10%] min-h-[90vh] justify-center items-center">
        <div class="w-4/12 mx-auto mt-4">
            <div class="border rounded p-4 shadow">
                <div class="flex">
                    <h2 class="text-blue-600 text-2xl font-semibold mb-3">Register Here</h2>
                </div>
                <form action="" method="post">

                    <div class="mb-3">
                        <label for="">First Name</label>
                        <input type="text" name="first_name" value="<?php echo $first_name; ?>" class="w-full border px-3 py-2 rounded border-slate-500">
                    </div>

                    <div class="mb-3">
                        <label for="">Last Name</label>
                        <input type="text" name="last_name" value="<?php echo $last_name; ?>" class="w-full border px-3 py-2 rounded border-slate-500">
                    </div>
                    <div class="mb-3">
                        <label for="">Gender</label>
                        <select name="gender" id="" value="<?php echo $gender; ?>" class="w-full border px-3 py-2 rounded border-slate-500">
                            <option value="" selected disabled>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email" name="email" value="<?php echo $email; ?>" class="w-full border px-3 py-2 rounded border-slate-500">
                    </div>



                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" name="password" value="<?php echo $password; ?>" class="w-full border px-3 py-2 rounded border-slate-500">
                    </div>
                    <div class="mb-3">
                        <label for="">Confirm Password</label>
                        <input type="password" name="cpassword" value="<?php echo $cpassword; ?>"
                            class="w-full border px-3 py-2 rounded border-slate-500">
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="login" value="Sign Up"
                            class="w-full bg-blue-500 px-3 py-2 rounded cursor-pointer">
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>