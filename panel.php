<?php
    session_start();

    if (empty($_SESSION['user'])) {
        header('Location: ../index.php');
    }
    $user_name = $_SESSION['user']['name'];
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
    <a class="flex items-center gap-2" href="/"><svg class="h-12 fill-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#16a34a">
            <path fill-rule="evenodd" d="M12.516 2.17a.75.75 0 00-1.032 0 11.209 11.209 0 01-7.877 3.08.75.75 0 00-.722.515A12.74 12.74 0 002.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 00.374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 00-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08zm3.094 8.016a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
        </svg>

        <span class="text-xl font-black text-white">Deluxe</span>
    </a>
    <div>
        <a href="includes/logout.php" class="rounded-md bg-green-600 py-2 px-4 text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-150 ease ">Logout</a>
    </div>
</div>

<div class="flex flex-col justify-center p-6">
    <div class="max-w-md mx-auto pb-12">

        <svg class="h-14 text-green-600 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
        </svg>

        <h2 class="mt-2 sm:mt-6 text-2xl sm:text-3xl font-bold text-white">Welcome back, <?=$user_name?>!</h2>
    </div>
</div>

<div class="mt-6 sm:mt-10 p-6 sm:p-10 border border-green-500 bg-neutral-900/80 backdrop-blur-xl text-white mx-auto rounded-xl shadow-xl max-w-md w-full">

    <div>
        <h2 class="text-center text-xl font-bold">Settings</h2>
    </div>

    <div>
        <a href="reset-password.php" class="w-full mt-6 flex justify-center items-center rounded-md bg-green-600 py-2 px-4 text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-150 ease ">Change password</a>
    </div>
    <div>
        <a href="includes/logout.php" class="w-full mt-6 flex justify-center items-center rounded-md bg-green-600 py-2 px-4 text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-150 ease ">Logout</a>
    </div>
</div>
</body>
</html>



