<?
require __DIR__ . '/../../views/parts/admin-header.php';
foreach($products as $product){
    ?>
    <main class="w-whead mx-auto pb-10 xl:w-[1600px] mm:w-[1400px] lg:w-[1150px] md:w-[768px]">
    <div class="text-black dark:text-white w-[500px] mx-[550px]">
        <h1 class="text-3xl">Удаление товара: <?=$product["title"]?></h1>
        <form method="post" action="/deleteproduct">
            <input type="hidden" name="id" value="<?=$product["id"]?>">
            <button class="mt-4 px-2 py-2 bg-[#de2454] rounded-md hover:bg-[#c41240]" type="submit">Удалить</button>
        </form>
    </div>
    </main>
    <?
}
?>

