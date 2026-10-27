<?php
require_once __DIR__ . '/../admin/db.php';
?>

<section class="container">
    <div class="row">
        <div class="col-md-3">
            <img src="../photo/logo-white.png" alt="">
            <p><?= $company_info['about'] ?></p>
            <i class="fa-brands fa-facebook"></i><a href=""><?= $company_info['facebook']; ?></a><br>
            <i class="fa-brands fa-instagram"></i><a href=""><?= $company_info['instagram']; ?></a>                
        </div>
        <div class="col-md-3">
            <h3>Contact Us</h3>
            <ul>
                <li><?= $company_info['location']; ?></li>
                <li><strong>+880<?= $company_info['mobile']; ?></strong></li>
                <li><p><strong><?= $company_info['email']; ?></strong></p></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h3>Quick Link</h3>
            <ul>
                <a href="shop.php"><li>Home Restaurant</li></a>
                <a href="shop.php"><li>About Us</li></a>
                <a href="shop.php"><li>Our Menu</li></a>
                <a href="shop.php"><li>Our Chefs</li></a>
                <a href="shop.php"><li>Our Gallery</li></a>
            </ul>
        </div>
        <div class="col-md-3">
            <h3>Opining time</h3>
            <ul>
                <li><?= $company_info['opentime']; ?></li>
                
            </ul>
        </div>
    </div>
</section>

<section class="ourblog">
    <p>© <span>Copyright</span> <strong class="">SUDIPTA</strong> <span>All Rights Reserved</span></p>
</section>

