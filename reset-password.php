<?php
session_start();

if (empty($_SESSION['recoveryCodeCorrect']) && empty($_SESSION['user']['email'])) {
    header('Location: /');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="output.css">
    <title>Log In</title>
</head>
<body class="bg-[url('src/img/waves.svg')] min-h-screen bg-no-repeat bg-bottom bg-fixed bg-neutral-900">

    <div class="flex justify-between p-6 items-center">
        <a class="flex items-center gap-2" href="index.php"><svg class="h-12 fill-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#16a34a">
            <path fill-rule="evenodd" d="M12.516 2.17a.75.75 0 00-1.032 0 11.209 11.209 0 01-7.877 3.08.75.75 0 00-.722.515A12.74 12.74 0 002.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 00.374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 00-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08zm3.094 8.016a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
        </svg>

            <span class="text-xl font-black text-white">Deluxe</span>
        </a>
        <div class="flex gap-3">
            <a href="login.php" class="rounded-md bg-gray-600 py-2 px-4 text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 transition duration-150 ease ">Sign In</a>
            <a href="index.php" class="rounded-md bg-green-600 py-2 px-4 text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-150 ease ">Sign Up</a>
        </div>
    </div>

    <div class="flex flex-col justify-center p-6">
        <div class="max-w-md mx-auto pb-12">

            <svg class="h-14 text-green-600 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
            </svg>

            <h2 class="mt-2 sm:mt-6 text-2xl sm:text-3xl font-bold text-white">Enter a new password</h2>
        </div>

        <div class="mt-6 sm:mt-10 p-6 sm:p-10 border border-green-500 bg-neutral-900/80 backdrop-blur-xl text-white mx-auto rounded-xl shadow-xl max-w-md w-full">
            <form action="includes/resetPassword.php" method='post' autocomplete="off" class="space-y-4">

                <div>
                    <label for="newPassword" class="block text-sm font-medium text-white">New password</label>
                    <div class="relative mt-2 rounded-md shadow-sm">
                        <div class="absolute left-0 pl-3 inset-y-0 items-center flex">

                            <svg class="h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>

                        </div>
                        <input type="password" id="newPassword" name="newPassword" class="w-full pl-10 border-gray-300 rounded-md focus:border-green-600 focus:ring-green-500 text-sm text-black" placeholder="Minimum 8 characters">
                    </div>
                </div>

                <div>
                    <button class="w-full mt-6 flex justify-center items-center rounded-md bg-green-600 py-2 px-4 text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-150 ease ">Save new password</button>
                </div>

            </form>
            <?php
            if (isset($_SESSION['error_desc'])) {
                echo '<div>
                        <h3 class="mt-3 text-sm font-medium justify-center text-center p-2 border-2 border-orange-700 rounded-md bg-orange-600">'.$_SESSION['error_desc'].'</h3>
                    </div>';
                unset($_SESSION['error_desc']);
            }
            ?>
        </div>
    </div>

</body>
</html>