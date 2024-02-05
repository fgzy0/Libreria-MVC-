<?  require __DIR__ . '/../../views/parts/header.php';?>

<main class="mx-auto pb-10 xl:w-[1250px] mm:w-[1400px] lg:w-[1150px] md:w-[768px] 2xl:px-0 xl:px-0 md:px-0 lg:px-0 px-4">
    <div class="2xl:flex xl:flex lg:flex md:flex inline justify-center space-x-5 mx-auto py-8">
        <? require __DIR__ . '/../../views/parts/profileNav.php';?>
        <div class="px-10 w-auto">
            <h1 class="2xl:text-4xl xl:text-4xl lg:text-4xl md:text-4xl text-2xl font-bold mb-6 pt-4">Личные данные</h1>
            <div>
                <h1 class="text-2xl font-bold mb-6 border-t-4 dark:border-white border-black rounded-sm">Изменение аватара:</h1>
                <form method="post" action="/updateavatar" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?=$_SESSION['user']['id']?>">
                    <input type="file" name="file"><br>
                    <button class="mt-4 px-2 py-2 text-base border-2 border-black hover:border-none hover:bg-[#d555e0] rounded-md" type="submit">Изменить</button>
                </form>
                <h1 class="text-2xl font-bold mt-4 border-t-4 dark:border-white border-black rounded-sm">Добавление номера телефона псевдонима:</h1>
            <form action="/updatephoneusername" method="post">
                <input type="hidden" name="id" value="<?=$_SESSION["user"]["id"]?>">
                <div class="2xl:flex xl:flex lg:flex md:flex inline 2xl:space-x-5 xl:space-x-5 lg:space-x-5 md:space-x-5 mt-4 text-black dark:text-white">
                    <div>
                        <div>Номер телефона</div>
                        <input class="px-2 py-2 2xl:w-[300px] w-auto rounded border-black border-2 text-black font-semibold" type="text" value="<?=$_SESSION["user"]["phonenum"]?>" name="phonenum">
                    </div>
                    <div>
                        <div>Псевдоним (Username)</div>
                        <input class="px-2 py-2 2xl:w-[300px] w-auto rounded border-black border-2 text-black font-semibold" type="text" value="<?=$_SESSION["user"]["username"]?>" name="username">
                    </div>
                </div>
                <button class="mt-4 px-2 py-2 text-base border-2 border-black hover:border-none hover:bg-[#d555e0] rounded-md" type="submit">Сохранить</button>
            </form>
                <h1 class="text-2xl font-bold mt-4 border-t-4 dark:border-white border-black rounded-sm">Изменение ФИО и даты рождения:</h1>
            <form action="/updatefio" method="post">
            <input type="hidden" name="id" value="<?=$_SESSION["user"]["id"]?>">
                <div class="2xl:flex xl:flex lg:flex md:flex inline 2xl:space-x-5 xl:space-x-5 lg:space-x-5 md:space-x-5 mt-4 text-black dark:text-white">
                    <div>
                        <div>Фамилия</div>
                        <input class="px-2 2xl:w-[300px] w-auto py-2 rounded border-black border-2 text-black font-semibold " type="text" value="<?=$_SESSION["user"]["surname"]?>" name="surname">
                    </div>
                    <div>
                        <div>Имя</div>
                        <input class="px-2 py-2 2xl:w-[300px] w-auto rounded border-black border-2 text-black font-semibold " type="text" value="<?=$_SESSION["user"]["name"]?>" name="name">
                    </div>
                </div>
                <div class="2xl:flex xl:flex lg:flex md:flex inline 2xl:space-x-5 xl:space-x-5 lg:space-x-5 md:space-x-5 mt-4 text-black dark:text-white">
                    <div>
                        <div>Отчество</div>
                        <input class="px-2 py-2 2xl:w-[300px] w-auto rounded border-black border-2 text-black font-semibold" type="text" value="<?=$_SESSION["user"]["fathname"]?>" name="fathername">
                    </div>
                    <div>
                        <div>Дата рождения</div>
                        <input class="px-2 py-2 2xl:w-[300px] w-auto rounded border-black border-2 text-black font-semibold" type="date" value="<?=$_SESSION["user"]["birthdate"]?>" name="birthdate">
                    </div>
                </div>
                <button class="mt-4 px-2 py-2 text-base border-2 border-black hover:border-none hover:bg-[#d555e0] rounded-md" type="submit">Сохранить</button>
            </form>
            <h1 class="text-2xl font-bold mt-4 border-t-4 dark:border-white border-black rounded-sm">Изменение Email:</h1>
            <form action="/updateemail" method="post">
            <input type="hidden" name="id" value="<?=$_SESSION["user"]["id"]?>">
                <div class="2xl:flex xl:flex lg:flex md:flex inline 2xl:space-x-5 xl:space-x-5 lg:space-x-5 md:space-x-5 mt-4 text-black dark:text-white">
                    <div>
                        <div>Email</div>
                        <input class="px-2 py-2 2xl:w-[300px] w-auto] srounded border-black border-2 text-black font-semibold" type="email" value="<?=$_SESSION["user"]["email"]?>" name="email">
                    </div>
                    <div>
                        <div>Подтвердите Email</div>
                        <input class="px-2 py-2 2xl:w-[300px] w-auto rounded border-black border-2 text-black font-semibold" type="email" name="confemail">
                    </div>
                </div>
                <button class="mt-4 px-2 py-2 text-base border-2 border-black hover:border-none hover:bg-[#d555e0] rounded-md" type="submit">Сохранить</button>
            </form>
            <h1 class="text-2xl font-bold mt-4 border-t-4 dark:border-white border-black rounded-sm">Изменение пароля:</h1>
            <form action="/updatepassword" method="post">
            <input type="hidden" name="id" value="<?=$_SESSION["user"]["id"]?>">
                <div class="2xl:flex xl:flex lg:flex md:flex inline 2xl:space-x-5 xl:space-x-5 lg:space-x-5 md:space-x-5 mt-4 text-black dark:text-white">
                    <div>
                        <div>Ваш пароль</div>
                        <input class="px-2 py-2 2xl:w-[300px] w-auto srounded border-black border-2 text-black font-semibold" type="password" name="yourpass">
                    </div>
                </div>
                <div class="2xl:flex xl:flex lg:flex md:flex inline 2xl:space-x-5 xl:space-x-5 lg:space-x-5 md:space-x-5 mt-4 text-black dark:text-white">
                    <div>
                        <div>Новый пароль</div>
                        <input class="px-2 py-2 2xl:w-[300px] w-auto rounded border-black border-2 text-black font-semibold" type="password" name="password">
                    </div>
                    <div>
                        <div>Подтвердите новый пароль</div>
                        <input class="px-2 py-2 2xl:w-[300px] w-auto rounded border-black border-2 text-black font-semibold" type="password" name="confpass">
                    </div>
                </div>
                <button class="mt-4 px-2 py-2 text-base border-2 border-black hover:border-none hover:bg-[#d555e0] rounded-md" type="submit">Сохранить</button>
            </form>
            </div>
        </div>
    </div>


</main>

<?  require __DIR__ . '/../../views/parts/footer.php';?>
