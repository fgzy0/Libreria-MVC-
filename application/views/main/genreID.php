<?

require __DIR__ . '/../../views/parts/header.php';


?>
    <main class="pt-6 mx-auto pb-10 xl:w-[1250px] mm:w-[1400px] lg:w-[1150px] md:w-[768px] 2xl:px-0 xl:px-0 md:px-0 lg:px-0 px-4">
        <div class="content">
            <h1 class="text-3xl text-bold">Категория <??></h1>
            <div class="2xl:flex xl:flex lg:flex md:flex inline space-x-10 pt-6">
                <div class="w-[400px] h-full">
                    <h1 class="text-2xl">Сортировка</h1>
                    <div class="pt-4">
                        <h1 class="text-lg">Цены ₽</h1>
                        <div class="pt-2 text-lg">
                            <input type="checkbox" value="" name="100-500">
                            <label for="100-500">100-500</label>
                        </div>
                        <div class="pt-2 text-lg">
                            <input type="checkbox" value="" name="500-1000">
                            <label for="500-1000">500-1000</label>
                        </div>
                        <div class="pt-2 text-lg">
                            <input type="checkbox" value="" name="1000-2000">
                            <label for="1000-2000">1000-2000</label>
                        </div>
                        <div class="pt-2 text-lg">
                            <input type="checkbox" value="" name="more2000">
                            <label for="more2000">Больше 2000</label>
                        </div>
                        <form class="pt-2 text-md" method="" action="">
                            <button class="py-2 px-2 rounded-md bg-none border-2 border-[#eb65f7] hover:bg-gradient-to-r from-[#de2454] to-[#eb4a72] hover:border-none hover:scale-105 transition-all">Применить</button>      
                        </form>
                    </div>
                </div>
                <div>
                <div class="pt-6 2xl:pt-2 xl:pt-2 lg:pt-2 md:pt-2 2xl:flex xl:flex lg:flex md:flex inline 2xl:gap-6 xl:gap-6 lg:gap-4 md:gap-2">

                <?
                        foreach($rows as $row){
                                ?>
                                    <div class="rounded-sm pt-2 w-[185px] 2xl:py-0 xl:py-0 lg:py-0 md:py-0 my-4">
                                        <div class="hover:scale-105 transition-all"><a class="flex 2xl:inline xl:inline lg:inline md:inline" href="/book/<?echo $row['id']?>"><img class="w-[185px] h-[270px] shadow-2xl rounded-md" src="/public/images/products/<?=$row['img']?>">
                                            <div class="pt-2 h-[150px] px-4 2xl:px-0 xl:px-0 lg:px-0 md:px-0">
                                                <div class="inline 2xl:flex xl:flex lg:flex md:flex 2xl:space-x-2 xl:space-x-2 lg:space-x-2 md:space-x-2 items-center">
                                                    <p class="text-md text-red-600 line-through mr-1 text-primary"><?=$row['price-full']?> ₽</p>
                                                    <p class="text-lg text-green-500 font-sans-bold"><?=$row['price-discount']?> ₽</p>
                                                </div>
                                                <p class="text-lg font-bold"><?=$row['title']?></p>
                                                <p class="text-base"><?=$row['author']?></p>
                                            </div>
                                        </a>
                                        </div>
                                        <div class="pt-4 grid grid-cols-3 gap-2">
                                            <button class="col-span-2 py-1 px-1 bg-none border-2 rounded-md border-[#747474] hover:bg-[#cc4bd7] hover:border-none hover:rounded-md transition-all" type="submit">В корзину</button>
                                            <button class="text-2xl hover:bg-[#de2454] hover:rounded-md" type="submit"><ion-icon name="heart-outline"></ion-icon></button>
                                        </div>
                                    </div>
                                <?
                        }
                        ?></div><?
                    ?>
                </div>
            </div>
        </div>

    </main>
<? require __DIR__ . '/../../views/parts/footer.php';?>

