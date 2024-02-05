
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookKing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="public/css/logwindow.css">
    <link rel="stylesheet" href="/css/style2.css">
    <link rel="stylesheet" href="/input.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <style>
        .shadow{
            box-shadow: 27px 25px 2px -2px rgba(0, 0, 0, 0.56);
        }
    </style>
</head>
<body class="text-black font-Raleway bg-[#eeeeee]  pt-6 dark:text-white dark:bg-gradient-to-r from-[#000000] via-[#19006c] to-[#000000]">
    <header class="mx-auto xl:w-[1600px] xl:px-0 px-14 items-center">
        <div class="flex justify-between pt-big">
            <span class="font-bold text-3xl">
                <a href="/"><img class="w-auto h-12" src="/public/images/header/logo4.png"></a>
            </span>
            <ul class="ul-menu flex">
                <li><a style="margin-left: 1rem;" class="hover:text-[#d555e0] xl:text-base lg:text-sm" href="/dashboard">Главная</a></li>
                <p style="margin-left: 1rem;">|</p>
                <li><a style="margin-left: 1rem;" class="hover:text-[#d555e0] xl:text-base lg:text-sm" href="/datausers">Админ</a></li>
                <li><p style="margin-left: 1rem;">|</p>
                <li><a style="margin-left: 1rem;" class="hover:text-[#d555e0] xl:text-base lg:text-sm" href="/categories">Категории</a></li>
                <p style="margin-left: 1rem;">|</p>
                <li><a style="margin-left: 1rem;" class="hover:text-[#d555e0] xl:text-base lg:text-sm" href="/genres">Жанры</a></li>
                <p style="margin-left: 1rem;">|</p>
                <li><a style="margin-left: 1rem;" class="hover:text-[#d555e0] xl:text-base lg:text-sm" href="/products">Товары</a></li>
                <p style="margin-left: 1rem;">|</p>
                <li><a style="margin-left: 1rem;" class="hover:text-[#d555e0] xl:text-base lg:text-sm" href="/orders">Заказы</a></li>
            </ul>

            <button class="burger xl:hidden lg:hidden">
                <span class="burger-line top-line"></span>
                <span class="burger-line mid-line"></span>
                <span class="burger-line bottom-line"></span>
            </button>
        </div>
        <div class="pt-5">
            <ul id="menu" class="hidden xl:hidden lg:hidden absolute left-6 right-6 flex flex-col items-center rounded-md">
                <li><a class="block py-2" href="#">Главное 2023</a></li>
                <li><a class="block py-2" href="#">Иностранные</a></li>
                <li><a class="block py-2" href="#">Для школы</a></li>
                <li><a class="block py-2" href="#">Для молодежи</a></li>
                <li><a class="block py-2" href="#">Еще</a>
                </li>
            </ul>
        </div>
    </header>
