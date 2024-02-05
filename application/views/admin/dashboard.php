<?
require __DIR__ . '/../../views/parts/admin-header.php';
?>
<main class="w-whead mx-auto pb-10 xl:w-[1600px] mm:w-[1400px] lg:w-[1150px] md:w-[768px]">
    <h1 class="text-3xl font-bold pt-4">Статистика</h1>
    <div class="grid grid-cols-3 gap-16 mt-4 pt-4">
        <section class="border-2 shadow border-black bg-[#ffffff] px-8 py-8 rounded-2xl">
            <p class="text-2xl font-semibold">Общие данные</p>
            <a href="/datausers">
                <div class="bg-[#d5e4fa] w-full flex justify-between mt-4 px-4 py-4 rounded-2xl items-center hover:scale-105 transition-all">
                    <h1 class="text-xl">Пользователи</h1>
                    <div class="bg-[#e2ecfa] text-xl px-4 py-2 rounded-2xl"><?foreach($users as $user){
                        echo $user['COUNT(*)'];
                    }
                    ?></div>
                </div>
            </a>
            <a href="/categories">
                <div class="bg-[#e5d6fb] w-full flex justify-between mt-4 px-4 py-4 rounded-2xl items-center hover:scale-105 transition-all">
                    <h1 class="text-xl">Категории</h1>
                    <div class="bg-[#f0e7fc] text-xl px-4 py-2 rounded-2xl"><?foreach($categories as $category){
                        echo $category['COUNT(*)'];
                    }
                    ?></div>
                </div>
            </a>
            <a href="/genres">
                <div class="bg-[#fbd4f5] w-full flex justify-between mt-4 px-4 py-4 rounded-2xl items-center hover:scale-105 transition-all">
                    <h1 class="text-xl">Жанры</h1>
                    <div class="bg-[#ffe2fb] text-xl px-4 py-2 rounded-2xl"><?foreach($genres as $genre){
                        echo $genre['COUNT(*)'];
                    }
                    ?></div>
                </div>
            </a>
            <a href="/products">
                <div class="bg-[#fffdc7] w-full flex justify-between mt-4 px-4 py-4 rounded-2xl items-center hover:scale-105 transition-all">
                    <h1 class="text-xl">Товары</h1>
                    <div class="bg-[#fcfbd7] text-xl px-4 py-2 rounded-2xl"><?foreach($products as $product){
                        echo $product['COUNT(*)'];
                    }
                    ?></div>
                </div>
            </a>
        </section>
        <section class="border-2 shadow border-black bg-[#ffffff] px-8 py-8 rounded-2xl">
            <p class="text-2xl font-semibold">Стоимость всех товаров в каталоге</p>
            <div class="w-full my-8">
                <h2 class="text-6xl text-center font-bold"><?foreach($summa as $sum){
                    echo $sum['SUM(`price-discount`)'];
                    }?> ₽</h2>
            </div>
            <p class="text-2xl font-semibold">Последний добавленный товар</p>
                <?
                foreach($lastproduct as $product){
                    ?>
                    <div class="flex space-x-5 mt-4">
                        <a href="/book/<?echo $product['id']?>"><div>
                        <img class="w-[125px] h-[190px] hover:scale-105 transition-all rounded-md" src="/public/images/products/<?=$product['img']?>">
                    </div>
                    <div>
                        <h1 class="text-xl font-bold"><?=$product['title']?></h1></a>
                        <p class=" mt-2 text-lg font-sans-medium text-gray"><?=$product['author']?> (Автор)</p>
                        <p class="mb-5 mt-2 font-sans-medium text-gray text-lg"><?=$product['genre']?><p>
                    </div>
                    <?
                }
                ?>
            </div>
        </section>
        <section class="border-2 shadow border-black bg-[#ffffff] px-8 py-8 rounded-2xl">
            <p class="text-2xl font-semibold">Самый популярный жанр на сайте</p>
            <a href="/genres"><div class="bg-[#e5d6fb] w-full mt-4 px-4 py-4 rounded-2xl items-center hover:scale-105 transition-all">
                <h2 class="text-4xl text-center font-bold"><?foreach($countgenres as $genre){
                    echo $genre['genre'];
                    }?> </h2>
                <h2 class="text-5xl text-center font-bold"><?echo $genre['count']?> книг</h2>    
            </div>
            </a>
            <p class="text-2xl font-semibold mt-6">Последняя добавленная категория</p>
            <?foreach($lastcategory as $category){?>
            <a href="/categories"><div class="bg-[#de2454] w-full mt-4 px-4 py-4 rounded-2xl items-center hover:scale-105 transition-all">
                <h2 class="text-4xl text-center font-bold"><?
                    echo $category['title'];
                    }?> </h2>
                <h2 class="text-2xl text-center font-bold">Отображается: <?echo $category['featured']?></h2>    
                <h2 class="text-2xl text-center font-bold">Активна: <?echo $category['active']?></h2>
            </div>
            </a>
        </section>    
    </div>
</main>