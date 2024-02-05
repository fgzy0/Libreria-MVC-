<?  require __DIR__ . '/../../views/parts/header.php';?>

<main class="mx-auto pb-10 xl:w-[1250px] mm:w-[1400px] lg:w-[1150px] md:w-[768px] 2xl:px-0 xl:px-0 md:px-0 lg:px-0 px-4">
    <div class="2xl:flex xl:flex lg:flex md:flex inline justify-center space-x-5 mx-auto py-8">
        <? require __DIR__ . '/../../views/parts/profileNav.php';?>
        <div class="px-10 pt-4">
            <div class="flex space-x-5 items-center mb-6">
                <h1 class="text-4xl font-bold">Заказы</h1>
                <p class="">1 заказ</p>
            </div>
            <div class="flex space-x-5">
                    <a class="hover:text-[#DE4A0B]" href="#">Активные</a>
                    <a class="hover:text-[#DE4A0B]" href="#">Завершенные</a>
                    <a class="hover:text-[#DE4A0B]" href="#">Отмененные</a>
                </div>
            <div class="mt-6">
                <div class="mt-4 flex space-x-5">
                    <div>
                        <img class="2xl:w-[185px] 2xl:h-[270px] w-auto h-auto" src="/public/images/products/0.15680800 16829255129780525522133.jpg">
                    </div>
                    <div>
                        <h1 class="text-xl">Война миров (Герберт Уэллс)</h1>
                        <p>Цена: 649 ₽</p>
                        <p>Статус: активный</p>
                        <button type="submit" class="mt-4 py-2 px-2 text-base bg-[#BC3029] rounded-md hover:bg-red-700">Отменить заказ</button>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</main>
<?  require __DIR__ . '/../../views/parts/footer.php';?>
