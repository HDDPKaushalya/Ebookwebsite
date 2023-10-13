<?php
// The amounts of products to show on each page
$num_products_on_each_page = 6;
// The current page - in the URL, will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
// Select products ordered by the date added
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY book_id ASC LIMIT ?,?');
// bindValue will allow us to use an integer in the SQL statement, which we need to use for the LIMIT clause
$stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the products from the database and return the result as an Array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

$total_products = $pdo->query('SELECT * FROM products')->rowCount();

?>

<?=template_header('Products')?>

<div class="topSpacer">

</div>

<link rel = "stylesheet" href = "Components/CSS/products/products.css">
<div class="products content-wrapper">
    <h1></h1>
    <h1>ALL THE EBOOKS</h1>
    <p>Total E-Books: <?=$total_products?></p>
    <div class="products-wrapper">
        <?php foreach ($products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['book_id']?>" class="product">
            <img src="Components/images/BookCovers/<?=$product['img']?>" width="300px" height="auto" alt="<?=$product['book_name']?>">
            <span class="name"><?=$product['book_name']?></span>
            <span class="price">
                &dollar;<?=$product['book_price']?>
                
            </span>
        </a>
        <?php endforeach; ?>
    </div>
    <div class="buttons">
        <?php if ($current_page > 1): ?>
        <a href="index.php?page=products&p=<?=$current_page-1?>">Back</a>
        <?php endif; ?>
        <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($products)): ?>
        <a href="index.php?page=products&p=<?=$current_page+1?>">Next</a>
        <?php endif; ?>
    </div>
</div>





<?=template_footer()?>



