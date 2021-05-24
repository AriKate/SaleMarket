<?php
session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'products';
$conn = new mysqli($host, $user, $pass, $db_name);
$sql = "SELECT * FROM products";
$products = [];
foreach ($conn->query($sql) as $row) {
    $products[] = $row;
}
$list = array();
$sum = 0;
$count_products = 0;
if(isset($_SESSION['basket'])){
    $count_products = count($_SESSION['basket']);

    foreach ($_SESSION['basket'] as $key => $product){
        $list[$key] = $product;
        $sum+= $product['price'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Головна сторінка Sale Market</title>
    <!-- link style -->
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/media.css">
    <!--  -->
    <link rel="stylesheet" href="./slick/slick.css" />
    <link rel="stylesheet" href="./slick/slick-theme.css" />
</head>

<body>
    <div class="wrap">
        <header>
            <div class="search-header">
                <img src="./images/loupe 2.png" alt="images loupe">
            </div>
            <div class="name-site-header">
                <img src="./images/Salemarket.png" alt="logo Salemarket">
            </div>
            <div class="basket-header">
                <img class="basket__icon" src="./images/basket.png" alt="basket-header">
                <div><b style="color: red"><?php echo $count_products?></b> товарів</div>
            </div>
        </header>

        <div class="menu">
            <span><a class="position red" href="index.php">Головна</a></span>
            <span><a class="position white" href="catalog.php">Каталог</a></span>
            <span><a class="position white" href="information.php">Інформаційна сторінка</a></span>
            <span><a class="position white" href="#">Контакти</a></span>
        </div>
        <div class="basket__box">
            <div class="basket__title"><span class="close"></span><b>Корзина  сума замовлення: <?php echo $sum?>€</b></div>
            <?php foreach ($list as $key=>$item) : ?>
                <div class="basket__item">
                    <img class="basket__img" src="images/<?php echo $item['img']?>">
                    <form action="basket_create.php" method="post">
                        <div class="basket__item_box">
                            <div><h3><?php echo $item['name']?></h3></div>
                            <div><h3>Кількість:<?php echo $item['count']?></h3></div>
                            <div><h3><?php echo $item['price']?>€</h3></div>
                            <button type="submit" id="<?php echo $key?>" name="delete" value="<?php echo $key?>"><span class="remove"></span></button>
                        </div>
                    </form>
                </div>
            <?php endforeach ?>
        </div>
        <div class="sliders">
            <p>Брендовий одяг по доступних цінах тільку у <span id="for-us">НАС</span></p>
            <div class="slider single-item">
                <?php foreach ($products as $product) : ?>
                    <div>
                        <img src="images/<?php echo $product['img']?>" alt="">
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="why-for-us">
            <p>Чому Вам варто вибрати саме нас?</p>
            <p id="text-for-us">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="maps">
            <p>
                Наше місцезнаходження
            </p>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.6518394474606!2d30.519837015386408!3d50.44758537947499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce56b2456d3b%3A0xd062ae171b57e947!2z0YPQuy4g0JrRgNC10YnQsNGC0LjQuiwg0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1620994410078!5m2!1sru!2sua"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <span id="btn"><a href="catalog.php">Переглянути каталог</a></span>
        <div class="wrap-footer">
            <footer>
                <div class="footer-menu">
                    <span><a href="index.php">Головна</a></span>
                    <span><a href="catalog.php">Каталог</a></span>
                    <span><a href="information.php">Інформаційна сторінка</a></span>
                    <span><a href="#">Контакти</a></span>
                </div>
                <div class="info-footer">
                    <span><a href="#">Оплата</a></span>
                    <span><a href="#">Доставка</a></span>
                    <span><a href="#">Корзина</a></span>
                    <span><a href="#">Фото товарів</a></span>
                </div>
                <div class="forms-footer">
                    <p>Якщо залишилися запитання - залишіть ваш номер ми Вам передзвонимо</p>
                    <form id="form">
                        <input type="text" name="phone" placeholder="+380 (... .. .. ..)">
                        <p></p>
                        <button>Надіслати</button>
                    </form>
                </div>
            </footer>
        </div>
    </div>
    <!-- script -->
    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="./slick/slick.min.js"></script>
    <script src='./script/script.js'></script>
    <script src="./common.js"></script>
</body>

</html>