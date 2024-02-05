<?
require __DIR__ . '/../../views/parts/admin-header.php';

    ?>
    <main class="w-whead mx-auto pb-10 xl:w-[1600px] mm:w-[1400px] lg:w-[1150px] md:w-[768px]">
    <div class="mt-4 dark:text-white text-black">
        <h1 class="text-3xl font-bold">Управление товарами</h1>
        
        <h1 class="text-2xl pt-4"><?
        if(isset($_SESSION["deleteSuccess"])){
                echo $_SESSION["deleteSuccess"];
                unset($_SESSION["deleteSuccess"]);
            }
        ?></h1>    
        <div class="mt-6">
            <a href="/addproduct"><button class="px-2 py-2 bg-[#de2454] rounded-md hover:bg-[#c41240]">Добавить товар</button></a>
            <table class="mt-6 py-2 px-2 border-2 text-lg border-collapse border-double border-black dark:border-white">
                <thead class="text-left">
                    <th class="px-2 border-2 border-black dark:border-white">Id</th>
                    <th class="px-2 border-2 border-black dark:border-white">Название</th>
                    <th class="px-2 border-2 border-black dark:border-white">Автор</th>
                    <th class="px-2 border-2 border-black dark:border-white">Id категории:</th>
                    <th class="px-2 border-2 border-black dark:border-white">Цена со скидкой</th>
                    <th class="px-2 border-2 border-black dark:border-white">Полная цена</th>
                    <th class="px-2 border-2 border-black dark:border-white">Жанр</th>
                    <th class="px-2 border-2 border-black dark:border-white">Дата выпуска</th>
                    <th class="px-2 border-2 border-black dark:border-white">Кол-во страниц</th>
                    <th class="px-2 border-2 border-black dark:border-white">Изображение</th>
                    <th class="px-2 border-2 border-black dark:border-white">Кол-во штук</th>
                    <th class="px-2 border-2 border-black dark:border-white">Используется?</th>
                    <th class="px-2 border-2 border-black dark:border-white">Активна?</th>
                    <th class="px-2 border-2 border-black dark:border-white">Действия</th>
                </thead>
                <?foreach($products as $product){
?>
                    <tbody>
                        <tr>
                            <td class="px-2 text-center border-2 border-black"><?=$product['id']?></td>
                            <td class="px-2 text-center"><? echo $product['title'] ?></td>
                            <td class="px-2 text-center"><? echo $product['author'] ?></td>
                            <td class="px-2 text-center"><? echo $product['category_id'] ?></td>
                            <td class="px-2 text-center"><? echo $product['price-discount'] ?> ₽</td>
                            <td class="px-2 text-center"><? echo $product['price-full'] ?> ₽</td>
                            <td class="px-2 text-center"><? echo $product['genre'] ?></td>
                            <td class="px-2 text-center"><? echo $product['date'] ?></td>
                            <td class="px-2 text-center"><? echo $product['pages-quantity'] ?></td>
                            <td class="px-2 text-center py-2"><img class="w-[110px] h-[140px]" src="/public/images/products/<?=$product['img'] ?>"></td>
                            <td class="px-2 text-center"><? echo $product['quantity'] ?></td>
                            <td class="px-2 text-center"><? echo $product['active'] ?></td>
                            <td class="px-2 text-center"><? echo $product['featured'] ?></td>
                            <td class="space-y-2 px-2">
                                <button class="text-md bg-[#d555e0] rounded hover:bg-[#aa41b3]" type="submit"><a href="/reductproduct/<?echo $product['id']?>">Редактировать</a></button>
                                <button class="text-md bg-red-500 rounded hover:bg-red-700" type="submit"><a href="/deleteproduct/<?echo $product['id']?>">Удалить</a></button>
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