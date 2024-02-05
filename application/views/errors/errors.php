
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Либрерия</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#eeeeee] text-black font-Raleway dark:text-white dark:bg-gradient-to-r from-[#000000] via-[#19006c] to-[#000000]">
    <div class="grid place-content-center h-screen">
        <p class="text-4xl font-bold">
            Ошибка: <?
            session_start();
            if(isset($_SESSION["registerError"])){
                echo $_SESSION["registerError"];
                unset($_SESSION["registerError"]);
                }
            ?>
        </p>
        <a href="/"><p class="text-4xl font-bold text-center hover:underline hover:decoration-[#d555e0] underline-offset-8 transition-all">На главную</p></a>
    </div>
</body>


