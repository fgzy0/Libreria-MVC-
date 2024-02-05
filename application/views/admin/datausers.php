<?
require __DIR__ . '/../../views/parts/admin-header.php';
?>

<main class="w-whead mx-auto pb-10 xl:w-[1600px] mm:w-[1400px] lg:w-[1150px] md:w-[768px]">
    <div>
        <div>
            <p class="text-xl">Найти по Username:</p>
            <form class="mt-2">
                <input class="px-2 py-1 text-black border-2 border-black dark:border-white rounded-md" type="text">
            </form>
            <h1 class="text-2xl pt-4"><?
            if(isset($_SESSION["updateUser"])){
                echo $_SESSION["updateUser"];
                unset($_SESSION["updateUser"]);
            }
            if(isset($_SESSION["deleteSuccess"])){
                echo $_SESSION["deleteSuccess"];
                unset($_SESSION["deleteSuccess"]);
            }
            ?></h1>
        </div>
        <table class="mt-6 py-2 px-2 border-2 text-xl border-collapse border-black dark:border-white">
            <thead class="text-left">
                <th class="px-2 border-2 border-black dark:border-white">Id:</th>
                <th class="px-2 border-2 border-black dark:border-white">Username:</th>
                <th class="px-2 border-2 border-black dark:border-white">Email:</th>
                <th class="px-2 border-2 border-black dark:border-white">Номер телефона:</th>
                <th class="px-2 border-2 border-black dark:border-white">ФИО:</th>
                <th class="px-2 border-2 border-black dark:border-white">Дата рождения:</th>
                <th class="px-2 border-2 border-black dark:border-white">Роль:</th>
                <th class="px-2 border-2 border-black dark:border-white">Действия:</th>
            </thead>
            <?
            foreach($users as $user){

                ?>
                <tbody>
                    <tr>
                    <td class="px-2"><? echo $user['id'] ?></td>
                    <td class="px-2"><? echo $user['username'] ?></td>
                    <td class="px-2"><? echo $user['email']?></td>
                        <?
                        if($user['phonenum'] != ""){
                            ?>
                            <td class="px-2"><? echo $user['phonenum'] ?></td>
                            <?
                        }else{
                            ?>
                            <td class="px-2">Номер не указан</td>
                            <?
                        }
                        if($user['surname'] != "" || $user['name'] != "" || $user['fathname'] != ""){
                            ?>
                            <td class="px-2"><? echo $user['surname'] .' '. $user['name'] .' '. $user['fathname']?></td>
                            <?
                        }else{
                            ?>
                            <td class="px-2">ФИО не указано</td>
                            <?
                        }
                        if($user['birthdate'] != ""){
                            ?>
                            <td class="px-2"><? echo $user['birthdate'] ?></td>
                            <?
                        }else{
                            ?>
                            <td class="px-2">Дата рождения не указана</td>
                            <?
                        }?>
                    <td class="px-2"><? echo $user['role'] ?></td>
                    <td class="space-x-5 px-2">
                        <button class="text-md bg-[#d555e0] rounded hover:bg-[#aa41b3]" type="submit"><a href="/user/<?echo $user['id']?>">Редактировать</a></button>
                        <button class="text-md bg-[#de2454] rounded-md hover:bg-[#c41240]" type="submit"><a href="/deleteuser/<?echo $user['id']?>">Удалить</a></button>
                    </td>
                    </tr>
                </tbody>
                <?
                }
                ?>
            
        </table>
    </div>
</main>
</body>
</html>

