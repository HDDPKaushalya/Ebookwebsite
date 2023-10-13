<?php


//search
$search = false;
if(isset($_GET['find'])){
    
    $find = $_GET['find'];
    $search = true;

}


if($search){
    //$arr['book_name'] = '%' . $find . '%';
    //$stmt = $pdo->read('SELECT * FROM products WHERE book_name LIKE ":bookName"', $arr);
    if($find == 1){
        $stmt = $pdo->prepare('SELECT * FROM products WHERE book_type = 1 '); 
    }

    elseif($find == 2){
        $stmt = $pdo->prepare('SELECT * FROM products WHERE book_type = 2 '); 
    }

    elseif($find == 3){
        $stmt = $pdo->prepare('SELECT * FROM products WHERE book_type = 3 '); 
    }

    elseif($find == 4){
        $stmt = $pdo->prepare('SELECT * FROM products WHERE book_type = 4 '); 
    }

    elseif($find == 5){
        $stmt = $pdo->prepare('SELECT * FROM products WHERE book_type = 5 '); 
    }

    else{
    $stmt = $pdo->prepare('SELECT * FROM products WHERE (book_name LIKE "%' . $find . '%") ');
    }

}
else{
    // Get the trending products
    $stmt = $pdo->prepare('SELECT * FROM products WHERE book_trend_rank = 1');

}

$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-Books</title>
        
        <link rel="stylesheet" href="Components/Bootstrap/css/bootstrap.css" >
        
    </head>

    <!--Start of Navigation Bar-->
    <body>
    <link rel="stylesheet" href="Components/CSS/index/index_style.css" >
        <div class="nav_bar">
            <div class="logo align_center">
                <a href = "index.php" style = "text-decoration: none;"><img src="Components/icons/logo.png" alt="logo" width="64px"></a>
            </div>
            <div class="navtitle align_center">
                <a href = "index.php?page=products" style = "text-decoration: none;"><h1>HEISENBERG</h1></a>
            </div>
            <div class="searchBar_container align_center">
                <div id="catg_selector">
                    <div class="selectField">
                        <span id="setCatg">All</span>
                        <img id="dropdown_arrow" src="Components/icons/dropdown_arrow.png" width="12px" height="12px" >
                    </div>
                    <ul id="catg_list" class="hide">
                        <li class="catg"><span><a style = "text-decoration: none;" href = "index.php?page=products">All</span></li>
                        <li class="catg"><span><a style = "text-decoration: none;" href = "index.php?find=1">Romance</a></span></li>
                        <li class="catg"><span><a style = "text-decoration: none;" href = "index.php?find=2">Novels</a></span></li>
                        <li class="catg"><span><a style = "text-decoration: none;" href = "index.php?find=3">Philosophy</a></span></li>
                        <li class="catg"><span><a style = "text-decoration: none;" href = "index.php?find=4">Knowledge</a></span></li>
                        <li class="catg"><span><a style = "text-decoration: none;" href = "index.php?find=5">others</a></span></li>
                    </ul>
                </div>
                
                <div class="searchbar">
                    <form method = "get">
                        <input class="searchBar" type="text" size="30" placeholder="Search" name = "find">
                        
                    </form>
                    
                </div>

            </div>
            <img id="menu_icon" src="Components/icons/menu_icon.png" > 
            <ul id="menu_items" class="nav_items align_center hideMenu">
                <li><a id="custC" class="nav_link align_center" href="Details.html">Customer Care</a></li>
                <li><a id="help" class="nav_link align_center" href="index.php?page=Help">Help</a></li>
                <li><a class="align_center" href="index.php?page=products"><img class="nav_icon" src="Components/icons/library (1).png"></a></li>
                <li><a class="align_center" href="index.php?page=cart"><img class="nav_icon" src="Components/icons/bag.png"></a></li>
                <li><a class="align_center" href="index.php?page=Loginpage v1"><img class="nav_icon" src="Components/icons/officer.png"></a></li>
            </ul>
        </div>

        <!--End of Navigation Bar-->

        <main>
<!--Start of sliding images -->
<div class="carousel_container">
            <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="6000">
                        <img src="Components/images/book_collection.webp" class="d-block w-100" width="100%" alt="carousel_image_1">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="Components/images/ebook_reading.jpg" class="d-block w-100" width="100%" alt="carousel_image_2">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="Components/images/book_collection2.jpg" class="d-block w-100" width="100%" alt="carousel_image_3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
              
            </div>
</div>

        <!--End of sliding images -->
<link rel = "stylesheet" href = "Components/CSS/home/home.css">

<h1 id = "spacer"></h1>

<div class="recentlyadded content-wrapper">
    <h2>Most Popular E-books</h2>
    <div class="products">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['book_id']?>" class="product">
            <img src="Components/images/BookCovers/<?=$product['img']?>" width="300px" height="auto" alt="<?=$product['book_name']?>">
            <span class="name"><?=$product['book_name']?></span>
            <span class="price">
                &dollar;<?=$product['book_price']?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>

<div class="container library_nav_link">
    <a href="index.php?page=products">Explore all eBooks in our eBooks Library  &#8594</a>
</div>

<div class = "givespace"></div>
 


<?=template_footer()?>


