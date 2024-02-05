<?

use app\controllers\Info;

require __DIR__ . '/../../views/parts/header.php';
?>
    
    <div class="z-10">
        <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><a href="#"><img src="/public/images/slider/12345.png"></a></div>
                    <div class="swiper-slide"><a href="#"><img src="/public/images/slider/111.png"></a></div>
                    <div class="swiper-slide"><a href="#"><img src="/public/images/slider/112.png"></a></div>
                    <div class="swiper-slide"><a href="#"><img src="/public/images/slider/113.png"></a></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
                <div class="autoplay-progress">
                    <svg viewBox="0 0 48 48">
                        <circle cx="24" cy="24" r="20"></circle>
                    </svg>
                    <span></span>
                </div>
        </div>
  </div>
  <!-- Swiper JS -->
  <script src="/./node_modules/swiper/swiper-bundle.min.js"></script>

  <main class="pt-6 mx-auto pb-10 xl:w-[1250px] mm:w-[1400px] lg:w-[1150px] md:w-[768px] 2xl:px-0 xl:px-0 md:px-0 lg:px-0 px-4">
            <h1 class="text-bold text-3xl text-center">Главные жанры</h1>
            <div class="2xl:inline-flex xl:inline-flex lg:inline-flex md:inline-flex 2xl:gap-8 xl:gap-8 lg:gap-6 md:gap-4 pt-6 justify-center mb:hidden">
                <?
                if($count > 0){
                    for($i = 1; $rows; ++$i){
                        if($i > 8){
                            foreach($rows as $row){
                                ?>
                                <a class="flex items-center gap-4 2xl:inline xl:inline lg:inline md:inline pb-2 px-4 2xl:px-0 xl:px-0 lg:px-0 md:px-0" href="/genre/<?echo $row['title']?>">
                                <div class="grid content-center">
                                    <div class="grid place-content-center"><img class="2xl:w-24 2xl:h-24 xl:w-24 xl:h-24 lg:w-16 lg:h-16 md:w-12 md:h-12 w-16 h-16" src="/public/images/genres/<?=$row['image']?>"></div>
                                    <div class="2xl:text-lg xl:text-lg lg:text-base md:text-base text-lg font-bold text-center" type="submit"><?=$row['title']?></div></a>  
                                </div>     
                                <?
                            }
                            break;
                        }
                    }
                }
                ?>
            </div>
            <section class="pt-4 mx-4 2xl:mx-0 xl:mx-0 lg:mx-0 md:mx-0">
                <?
                    foreach($categories as $category){
                        ?>
                        <div class="pt-4 pb-8 border-b-2 border-gray-400">
                                <p class="text-3xl"><?echo $category['title']?></p>
                            <div class="pt-6 2xl:pt-2 xl:pt-2 lg:pt-2 md:pt-2 2xl:flex xl:flex lg:flex md:flex inline 2xl:gap-6 xl:gap-6 lg:gap-4 md:gap-2">
                            <?  
                            foreach($products as $product){
                                if($category['id'] == $product['category_id']){
                                ?>
                                    <div class="rounded-sm pt-2 w-[185px] 2xl:py-0 xl:py-0 lg:py-0 md:py-0 my-4">
                                        <div class="hover:scale-105 transition-all"><a class="flex 2xl:inline xl:inline lg:inline md:inline" href="/book/<?echo $product['id']?>"><img class="w-[185px] h-[270px] shadow-2xl rounded-md" src="/public/images/products/<?=$product['img']?>">
                                            <div class="pt-2 h-[150px] px-4 2xl:px-0 xl:px-0 lg:px-0 md:px-0">
                                                <div class="inline 2xl:flex xl:flex lg:flex md:flex 2xl:space-x-2 xl:space-x-2 lg:space-x-2 md:space-x-2 items-center">
                                                    <p class="text-md text-red-600 line-through mr-1 text-primary"><?=$product['price-full']?> ₽</p>
                                                    <p class="text-lg text-green-500 font-sans-bold"><?=$product['price-discount']?> ₽</p>
                                                </div>
                                                <p class="text-lg font-bold"><?=$product['title']?></p>
                                                <p class="text-base"><?=$product['author']?></p>
                                            </div>
                                        </a>
                                        </div>
                                        <div class="pt-4 grid grid-cols-3 gap-2">
                                            <button class="col-span-2 py-1 px-1 bg-none border-2 rounded-md border-[#747474] hover:bg-[#cc4bd7] hover:border-none hover:rounded-md transition-all" type="submit">В корзину</button>
                                            <button class="text-2xl hover:bg-[#de2454] hover:rounded-md" type="submit"><ion-icon name="heart-outline"></ion-icon></button>
                                        </div>
                                    </div><? 
                                }
                            }
                            ?>
                            </div> 
                        </div>                            
                        <?
                    }?> 
            </section>
            <div>
            </div>
        </div>
        <script src="/public/scripts/slider.js"></script>
    </main>
<? require __DIR__ . '/../../views/parts/footer.php'?>



