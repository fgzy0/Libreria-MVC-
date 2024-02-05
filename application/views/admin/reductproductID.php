<?
require __DIR__ . '/../../views/parts/admin-header.php';

foreach($products as $product){
    ?>
    <main class="w-whead mx-auto pb-10 xl:w-[1600px] mm:w-[1400px] lg:w-[1150px] md:w-[768px]">
    <div class="text-black dark:text-white w-[500px] mx-[550px]">
        <h1 class="text-3xl">Редактирование продукта: <?=$product["title"]?></h1>
        <form action="/reductproduct" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$product["id"]?>">
            <input type="hidden" name="img" value="<?$product["img"]?>">
            <div class="flex space-x-5 pt-4 justify-between">
                <div class="w-[200px]">
                    <label for="title">Название:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="text" name="title" value="<?=$product["title"]?>">
                </div>
                <div class="w-[200px]">
                    <label for="author">Автор:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="text" name="author" value="<?=$product["author"]?>">
                </div>
            </div>
            <div class="flex space-x-5 pt-4 justify-between">
                <div class="w-[200px]">
                    <label for="date">Дата выпуска:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="date" name="date" value="<?=$product["date"]?>">
                </div>
                <div class="w-[200px]">
                    <label for="description">Описание:</label>
                    <textarea class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="text" name="description"><?=$product["description"]?></textarea>
                </div>
            </div>
            <div class="flex space-x-5 pt-4 justify-between">
                <div class="w-[200px]">
                    <label for="price-full">Полная цена:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="number" name="price-full" value="<?=$product["price-full"]?>">
                </div>
                <div class="w-[200px]">
                    <label for="discount-price">Цена со скидкой:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="number" name="discount-price" value="<?=$product["price-discount"]?>">
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
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="text" name="pages" value="<?=$product["pages-quantity"]?>">
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
                <div class="pt-4 text-xl">
                    <h1>Отображается?</h1>
                    <input type="radio" name="featured" value="Да" <?echo ($product["featured"]=="Да") ? "checked" : ""; ?>>
                    <label for="featured">Да</label>
                    <input type="radio" name="featured" value="Нет" <?echo ($product["featured"]=="Нет") ? "checked" : ""; ?>>
                    <label for="featured">Нет</label>
                </div>
                <div class="pt-4 text-xl">
                    <h1>Активна?</h1>
                    <input type="radio" name="active" value="Да" <?echo ($product["active"]=="Да") ? "checked" : ""; ?>>
                    <label for="active">Да</label>
                    <input type="radio" name="active" value="Нет" <?echo ($product["active"]=="Нет") ? "checked" : ""; ?>>
                    <label for="active">Нет</label>
                </div>
            </div>
            <div class="pt-4">
                <button class="px-2 py-2 bg-[#de2454] rounded-md hover:bg-[#c41240]" type="submit">Сохранить</button>
            </div>
        </form>
    </div>
</main>
    <?
}
?>

