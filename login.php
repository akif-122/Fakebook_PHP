<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | FakeBook | Connecting People</title>
    
    <?php include "includes/headlink.php" ?>
    
 </head>
 <body>
    <?php include "includes/header.php" ?>

    <div class="flex flex-1 px-[10%] h-[90vh] justify-center items-center">
        <div class="w-4/12 mx-auto mt-4">
            <div class="border rounded p-4 shadow">
                <div class="flex">
                    <h2 class="text-blue-600 text-2xl font-semibold mb-3">Login Here</h2>
                </div>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email" name="email" class="w-full border px-3 py-2 rounded border-slate-500">
                    </div>

                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" name="password" class="w-full border px-3 py-2 rounded border-slate-500">
                    </div>

                    <div class="mb-3">
                        <input type="submit" name="login" value="Sign in" class="w-full bg-blue-500 px-3 py-2 rounded cursor-pointer">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    
 </body>
 </html>