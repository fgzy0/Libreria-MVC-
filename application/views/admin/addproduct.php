<?

require __DIR__ . '/../../views/parts/admin-header.php';


    ?>
    <main class="w-whead mx-auto pb-10 xl:w-[1600px] mm:w-[1400px] lg:w-[1150px] md:w-[768px]">
    <div class="text-black dark:text-white w-[500px] mx-[550px]">
        <h1 class="text-3xl">Добавить товар:</h1>
        <form action="/addnewproduct" method="post" enctype="multipart/form-data">
            <div class="flex space-x-5 pt-4 justify-between">
                <div class="w-[200px]">
                    <label for="title">Название товара:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="text" name="title">
                </div>
                <div class="w-[200px]">
                    <label for="author">Автор:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="text" name="author">
                </div>
            </div>
            <div class="flex space-x-5 pt-4 justify-between">
                <div class="w-[200px]">
                    <label for="date">Дата выпуска:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="date" name="date">
                </div>
                <div class="w-[200px]">
                    <label for="description">Описание:</label>
                    <textarea class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="text" name="description"></textarea>
                </div>
            </div>
            <div class="flex space-x-5 pt-4 justify-between">
                <div class="w-[200px]">
                    <label for="fullprice">Полная цена:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="number" name="fullprice">
                </div>
                <div class="w-[200px]">
                    <label for="discountprice">Цена со скидкой:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="number" name="discountprice">
                </div>
            </div>
            <div class="flex space-x-5 pt-4 justify-between">
                <div class="w-[200px]">
                    <label for="category">Категория:</label>
                    <select class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" name="category">
                        <?
                        foreach($categories as $category){
                            ?>
                                <option value="<?=$category['id']?>"><?=$category['title']?></option>
                            <?
                        }
                        ?>
                    </select>
                </div>
                <div class="w-[200px]">
                    <label for="pages">Количество страниц:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="number" name="pages">
                </div>
            </div>
            <div class="flex space-x-5 pt-4 justify-between">
                <div class="w-[200px]">
                    <label for="genre">Жанр:</label>
                    <select class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" name="genre">
                        <?
                        foreach($genres as $genre){
                            ?>
                            <option value="<?=$genre['title']?>"><?=$genre['title']?></option>
                            <?
                        }
                        ?>
                    </select>
                </div>
                <div class="w-[200px]">
                    <label for="price-full">Количество:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="number" name="quantity" value="<?=$product["quantity"]?>">
                </div>
            </div>
            <div class="flex space-x-5 pt-4 justify-between">
                <div class="w-[200px]">
                    <label for="img">Изображение товара:</label>
                    <input type="file" name="img">
                </div>
            </div>
            <div class="flex space-x-5 pt-4 justify-between">
                <div class="text-xl">
                    <h1>Показывается?</h1>
                    <input type="radio" name="featured" value="Да">
                    <label for="Yes">Да</label>
                    <input type="radio" name="featured" value="Нет"> 
                    <label for="No">Нет</label>
                </div>
                <div class="text-xl">
                    <h1>Активна?</h1>
                    <input type="radio" name="active" value="Да">
                    <label for="Yes">Да</label>
                    <input type="radio" name="active" value="Нет"> 
                    <label for="No">Нет</label>
                </div>
            </div>
            <div class="pt-4">
                <button class="px-2 py-2 bg-[#de2454] rounded-md hover:bg-[#c41240]" type="submit">Сохранить</button>
            </div>
        </form>
    </div>
</main>
<?
?>
