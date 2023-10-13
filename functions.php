<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'ebookstore';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
// Template header, feel free to customize this
function template_header($title) {
echo <<<EOT
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
                        <li class="catg"><span><a href = "index.php?page=products" style = "text-decoration: none;">All</span></li>
                        <li class="catg"><span><a href = "index.php?find=1" style = "text-decoration: none;">Romance</a></span></li>
                        <li class="catg"><span><a href = "index.php?find=2" style = "text-decoration: none;">Novels</a></span></li>
                        <li class="catg"><span><a href = "index.php?find=3" style = "text-decoration: none;">Philosophy</a></span></li>
                        <li class="catg"><span><a href = "index.php?find=4" style = "text-decoration: none;">Knowledge</a></span></li>
                        <li class="catg"><span><a href = "index.php?find=5" style = "text-decoration: none;">others</a></span></li>
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

        <!--End of Navigation Bar-->

        <main>
EOT;
}
// Template footer
function template_footer() {
$year = date('Y');
echo <<<EOT
        </main>
        <footer>
            <div class="container-fluid top_footer">
                <div class="row">
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 footer_column">
                        <div class="footer_logo_sec align_center">
                            <div class="logo align_center">
                                <a href = "index.php" style = "text-decoration: none;"><img src="Components/icons/logo.png" alt="logo" width="64px"></a>
                            </div>
                            <div class="footer_logo_title align_center">
                                <h1>EBOOKS</h1>
                            </div>
                        </div>
                        <h6>No 69, Krunkenhouse street, Berlin.</h6>
                        <h6>066 666 6669</h6>
                        <h6>heisenbergEBOOK69@gmail.com</h6>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 footer_column">
                        <h4>Site Map</h4>
                        <a href="Details.html"><h6>About Us</h6></a>
                        <a href="Details.html"><h6>Customer Care</h6></a>
                        <a href="index.php?page=Help"><h6>Help</h6></a>
                        <a href="Details.html"><h6>Privacy Policy</h6></a>
                        <a href="Details.html"><h6>Contact</h6></a>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 footer_column">
                        <h4>Join Our Newsletter Now</h4>
                        <h6>Get E-mail updates on our new book arrivals & latest special offers.</h6>
                        <div class="news_subscr_container">
                            <form action="">
                                <label for="user_email"></label>
                                <input type="email" id="user_email" class="email_input_box" placeholder="Enter your Email">
                                <script>
                                    function newsLetter(){
                                        alert("you have been regeiesterd, Welcome :)");
                                    }
                                </script>
                                <input type="submit" onclick="newsLetter()" class="subscr_button">
                                 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid bottom_footer">
                <div class="row">
                    <div class="footer_column">
                        <div class="footer_social">
                            <a href="index.php?page=error"><img src="Components/icons/fb_icon.png" width="24px"></a>
                            <a href="index.php?page=error"><img src="Components/icons/instagram_icon.png" width="24px"></a>	
                            <a href="index.php?page=error"><img src="Components/icons/linkedin_icon.png" width="24px"></a>
                            <a href="index.php?page=error"><img src="Components/icons/twitter_icon.png" width="24px"></a>
                            <a href="index.php?page=error"><img src="Components/icons/pinterest_icon.png" width="24px"></a>
                        </div>
                        <h6>Copyright ©2023 All rights reserved | eBooks</h6>
                    </div>
                </div>
            </div>
        </footer>
        <!--End of page footer section -->

        
        <script>

            var nav_bar = document.querySelector('.nav_bar');
            window.addEventListener('scroll', () => {
                nav_bar.classList.toggle('color_inside', window.scrollY > 520 );
            });

            var menu_icon = document.getElementById("menu_icon");
            var menu_items = document.getElementById("menu_items");

            menu_icon.onclick = function() {
                menu_items.classList.toggle("hideMenu");
            }
            menu_items.onclick = function() {
                menu_items.classList.toggle("hideMenu");
            }



            var catg_selector = document.getElementById("catg_selector");
            var setCatg = document.getElementById("setCatg");
            var catg = document.getElementsByClassName("catg");
            var catg_list = document.getElementById("catg_list");
            var dropdown_arrow = document.getElementById("dropdown_arrow");

            catg_selector.onclick = function() {
                catg_list.classList.toggle("hide");
                dropdown_arrow.classList.toggle("rotate");
            }

            for(catgitem of catg) {
                catgitem.onclick = function() {
                    setCatg.innerHTML = this.textContent;
                    dropdown_arrow.classList.toggle("rotate");
                }
            }

            var catg_selector_2 = document.getElementById("catg_selector_2");
            var setCatg_2 = document.getElementById("setCatg_2");
            var catg_2 = document.getElementsByClassName("catg_2");
            var catg_list_2 = document.getElementById("catg_list_2");
            var dropdown_arrow_2 = document.getElementById("dropdown_arrow_2");

            catg_selector_2.onclick = function() {
                catg_list_2.classList.toggle("hide");
                dropdown_arrow_2.classList.toggle("rotate");
            }

            for(catgitem_2 of catg_2) {
                catgitem_2.onclick = function() {
                    setCatg_2.innerHTML = this.textContent;
                    dropdown_arrow_2.classList.toggle("rotate");
                }
            }

        </script>

        
        <script src="Components/Bootstrap/js/bootstrap.js"></script>

    </body>

</html>
EOT;
}
?>


