<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Totally</title>
    <link rel="stylesheet" href="style.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <header id="navbar">
        <div class="wrapper navbar-wrapper">
            <h1 class="navbar-logo">
                <img src="img/logo.svg" alt="TOTALLY">
            </h1>
            <nav class="navbar-pc-menu">
                <ul class="menu-left">
                    <li><a href="#">All</a></li>
                    <li><a href="#">NEW</a></li>
                    <li><a href="#">VINTAGE</a></li>
                    <li><a href="#">CATEGORY</a></li>
                    <li><a href="#">LOOKBOOK</a></li>
                    <li><a href="#">BLOG</a></li>
                </ul>
                <ul class="menu-right">
                    <li><a href="#">LOGIN</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </nav>
            <div class="scroll-wrapper">
                <nav class="navbar-mobile-menu">
                    <ul>
                        <li><a href="#">All</a></li>
                        <li><a href="#">NEW</a></li>
                        <li><a href="#">VINTAGE</a></li>
                        <li><a href="#">CATEGORY</a></li>
                        <li><a href="#">LOOKBOOK</a></li>
                        <li><a href="#">BLOG</a></li>
                        <li><a href="#">LOGIN</a></li>
                        <li><a href="#">CONTACT</a></li>
                    </ul>
                </nav>
            </div>
            
        </div>
    </header>

    <!-- Main contents -->
    <div id="main" class="wrapper">
        <div class="product-img">
            <img src="img/item.jpg" alt="product image">
        </div>
        <div class="product-detail">
            <h2>TOTALLY Short Sleeve Shirt</h2>
            <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p class="price">￥9,999 +tax</p>

            <?php
                $table_lists = [
                    ["White", "S"],
                    ["White", "M"],
                    ["White", "L"]
                ]; 
            ?>

            <div id="form">
                <form action="#" method="post">
                    <table>
                        <tr>
                            <th>Color</th>
                            <th>Size</th>
                            <th></th>
                        </tr>
                        <?php foreach ($table_lists as $list): ?>
                            <tr>
                                <?php foreach($list as $value): ?>
                                    <td class="item_info"><?= $value ?></td>
                                <?php endforeach; ?>
                                <td class="quantity">
                                    <select name="quantity" id="quantity">
                                        <?php for ($i=1 ; $i <= 3 ; $i++ ): ?>
                                            <option value="<?= $i ?>"><?= $i ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <input type="submit" class="button" value="ADD TO CART">
                </form>
            </div>
            

            <table class="size-reference">
                <tr>
                    <th>Size</th>
                    <th>Chest</th>
                    <th>Weist</th>
                    <th>Height</th>
                </tr>
                <tr>
                    <th>S</th>
                    <td>99 ～ 99</td>
                    <td>99 ～ 99</td>
                    <td>99 ～ 99</td>
                </tr>
                <tr>
                    <th>M</th>
                    <td>99 ～ 99</td>
                    <td>99 ～ 99</td>
                    <td>99 ～ 99</td>
                </tr>
                <tr>
                    <th>L</th>
                    <td>99 ～ 99</td>
                    <td>99 ～ 99</td>
                    <td>99 ～ 99</td>
                </tr>
            </table>

        </div>
    </div>

    <!-- Footer -->
    <footer>
        <small>&copy;TOTALLY</small>
    </footer>
</body>
</html>