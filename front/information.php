<?php
session_start();
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
    <title>Інформаційна сторінка Sale Market</title>
    <!-- link style -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/info.css">
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
            <span><a class="position white" href="index.php">Головна</a></span>
            <span><a class="position white" href="catalog.php">Каталог</a></span>
            <span><a class="position red" href="information.php">Інформаційна сторінка</a></span>
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
        <div class="info-text">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
        </div>
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
    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="/common.js"></script>
</body>

</html>