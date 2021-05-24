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
    <title>Каталог</title>
    <!-- link style -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/catalog.css">
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
            <span><a class="position red" href="catalog.php">Каталог</a></span>
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
        <div class="card-with-goods">
            <?php foreach ($products as $key=>$product) : ?>
                <div class="goods">
                    <form action="basket_create.php" method="post">
                        <img src="images/<?php echo $product['img']?>" alt="photo goods">
                        <p id="name-goods"><?php echo $product['title']?></p>
                        <p id="code"><?php echo $product['code']?></p>
                        <p id="stan-by"><?php echo $product['description']?></p>
                        <p id="price"><?php echo $product['price']?>&euro;</p>
                        <input type="hidden" name="id" value="<?php echo $key?>">
                        <input type="hidden" name="img" value="<?php echo $product['img']?>">
                        <input type="hidden" name="name-goods" value="<?php echo $product['title']?>">
                        <input type="hidden" name="code" value="<?php echo $product['code']?>">
                        <input type="hidden" name="stan-by" value="<?php echo $product['description']?>">
                        <input type="hidden" name="price" value="<?php echo $product['price']?>">
                        <button type="submit" name="add_basket" value="<?php echo $key?>">Додати в корзину</button>
                    </form>
                </div>
            <?php endforeach ?>
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
    <script src="./common.js"></script>
</body>

</html>