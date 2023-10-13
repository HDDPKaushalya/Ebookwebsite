<?php
// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
    // Prepare statement and execute, prevents SQL injection
    $stmt = $pdo->prepare('SELECT * FROM products WHERE book_id = ?');
    $stmt->execute([$_GET['id']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if (!$product) {
        // Simple error to display if the id for the product doesn't exists (array is empty)
        exit('Product does not exist!');
    }
} 

else {
    // Simple error to display if the id wasn't specified
    exit('Product does not exist!');
}
?>

<?=template_header('Product')?>

<h1 style = "padding: 40px"></h1>

<link rel = "stylesheet" href = "Components/CSS/products/products.css">
<div class="product content-wrapper">
    <img src="Components/images/BookCovers/<?=$product['img']?>" width="350px" height="auto" alt="<?=$product['book_name']?>">
    <div>
        <h1 class="name"><?=$product['book_name']?></h1>

        <div class="description">
            <?=$product['book_author']?>
        </div>

        <span class="price">
            &dollar;<?=$product['book_price']?>
            
        </span>
        <form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value="<?=$product['book_id']?>">
            <input type="submit" value="Add To Cart">
            
        </form>
        
        <style> 

        </style>

        <div class="description" style = "text-align:justify;">
            <?=$product['book_description']?>
        </div>

        
    </div>
</div>

<?=template_footer()?>



