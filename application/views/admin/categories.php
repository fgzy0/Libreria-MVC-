<?
require __DIR__ . '/../../views/parts/admin-header.php';

    ?>
    
    <main class="w-whead mx-auto pb-10 xl:w-[1600px] mm:w-[1400px] lg:w-[1150px] md:w-[768px]">
    <div class="mt-4 dark:text-white text-black">
        <h1 class="text-3xl font-bold">Управление категориями</h1>
        <div class="mt-6">
            <a href="/addcategory"><button class="px-2 py-2 bg-[#de2454] rounded-md hover:bg-[#c41240]">Добавить категорию</button></a>
            <table class="mt-6 py-2 px-2 border-2 text-xl border-collapse border-black dark:border-white">
                <thead class="text-left">
                    <th class="px-2 border-2 border-black dark:border-white">Id:</th>
                    <th class="px-2 border-2 border-black dark:border-white">Название:</th>
                    <th class="px-2 border-2 border-black dark:border-white">Описание:</th>
                    <th class="px-2 border-2 border-black dark:border-white">Отображается?</th>
                    <th class="px-2 border-2 border-black dark:border-white">Активна?</th>
                    <th class="px-2 border-2 border-black dark:border-white">Действия:</th>
                </thead>
                <?foreach($categories as $category){
                    ?>
                    <tbody>
                        <tr>
                        <td class="px-2"><? echo $category['id'] ?></td>
                        <td class="px-2"><? echo $category['title'] ?></td>
                        <td class="px-2"><? echo $category['description'] ?></td>
                        <td class="px-2"><? echo $category['featured'] ?></td>
                        <td class="px-2"><? echo $category['active'] ?></td>
                        <td class="space-x-5 px-2">
                            <button class="text-md bg-[#d555e0] rounded hover:bg-[#aa41b3]" type="submit"><a href="/reductcategory/<?echo $category['id']?>">Редактировать</a></button>
                            <button class="text-md bg-red-500 rounded hover:bg-red-700  mt-4" type="submit"><a href="/deletecategory/<?echo $category['id']?>">Удалить</a></button>
                        </td>
                        </tr>
                    </tbody>
                    <?
                    }
                    ?>
                
                </table>
        </div>
    </div>
    </main>
    
    <?
?>
</body>
</html>