<?php
require_once __DIR__ . '/../admin/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="food_fevicon_1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css" integrity="sha512-t7Few9xlddEmgd3oKZQahkNI4dS6l80+eGEzFQiqtyVYdvcSG2D3Iub77R20BdotfRPA9caaRkg1tyaJiPmO0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<div class="container">

    <?php require_once 'nav.php'; ?>

</div>

<div class="container">
    <div class="row">
        <?php
                $query = $pdo->prepare("SELECT * FROM `home`");
                $query->execute();
                $fetch_list = $query->fetchAll(PDO::FETCH_ASSOC);
                foreach($fetch_list AS $fetch){
                
                ?>
        <div class="col-md-6">
            <h5><?= $fetch['title']; ?></h5>
            <h1><?= $fetch['subtitle']; ?></h1>
            <p><?= $fetch['contant']; ?></p>
            <button>Order Now</button>
        </div>



        <div class="col-md-6">
            <img src="../photo/hero-four_img1.png" alt="">
        </div>
        <?php
                }
              ?>
    </div>
    
</div>

<div class="container">
    <div class="row">
        <?php
                $query = $pdo->prepare("SELECT * FROM `categories`");
                $query->execute();
                $fetch_list = $query->fetchAll(PDO::FETCH_ASSOC);
                foreach($fetch_list AS $fetch){
                
                ?>
        <div class="col-md-6">
         <h1>Our Categories</h1>
        </div>
        <div class="col-md-6">
          <button>See More</button>  
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-4">
                   <i class="fa-solid fa-burger"></i>
                </div>
                <div class="col-md-8">
                    <h4><?= $fetch['bur_title']; ?></h4>
                    <p><?= $fetch['bur_items']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-4">
                    <i class="bi bi-fork-knife"></i>
                </div>
                <div class="col-md-8">
                    <h4><?= $fetch['sand_title']; ?></h4>
                    <p><?= $fetch['sand_items']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-4">
                    <i class="bi bi-fork-knife"></i>
                </div>
                <div class="col-md-8">
                    <h4><?= $fetch['mexi_title']; ?></h4>
                    <p><?= $fetch['mexi_items']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-4">
                    <i class="bi bi-fork-knife"></i>
                </div>
                <div class="col-md-8">
                    <h4><?= $fetch['itali_title']; ?></h4>
                    <p><?= $fetch['itali_items']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
                }
              ?>

<div class="container">
    <div class="row">
        <?php
                $query = $pdo->prepare("SELECT * FROM `about`");
                $query->execute();
                $fetch_list = $query->fetchAll(PDO::FETCH_ASSOC);
                foreach($fetch_list AS $fetch){
                
                ?>
        <div class="col-md-6">
            <img src="../photo/about-6.png" alt="">
        </div>
        <div class="col-md-6">
            <i class="bi bi-fork-knife"></i>
            <h3>About us</h3>
            <h1><?= $fetch['title']; ?></h1>
            <p><?= $fetch['contant']; ?></p>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="../photo/icon.png" alt="">
                        </div>
                        <div class="col-md-8">
                            <h2><?= $fetch['food_items']; ?></h2>
                            <p>Total Food Item</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="../photo/Group-1171275398.png" alt="">
                        </div>
                        <div class="col-md-8">
                            <h2><?= $fetch['branch']; ?></h2>
                            <p>Branch office</p>
                        </div>
                    </div>
                </div>
            </div>
            <button>read more</button>
        </div>
    </div>
</div>
<?php
                }
              ?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Get 25% Discount</h1>
            <button>read more</button>
        </div>
        <div class="col-md-6">
            <img src="../photo/offer-img1.png" alt="">
            <img src="../photo/bn-img-6.pn" alt="">
        </div>
    </div>
</div>



<section class="container ourblog">
    <div>
        <h1>WHY WE’RE YOUR BEST CHOICE</h1>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-md-3">
            <i class="bi bi-lungs"></i>
            <h4>Hygienic Food</h4>
            <p>We are passionate about serving fresh, flavorful</p>
        </div>
        <div class="col-md-3">
            <i class="fa-regular fa-hand"></i>
            <h4>Fresh Environment</h4>
            <p>We are passionate about serving fresh, flavorful</p>
        </div>
        <div class="col-md-3">
            <i class="fa-solid fa-user"></i>
            <h4>Skilled Chefs</h4>
            <p>We are passionate about serving fresh, flavorful</p>
        </div>
        <div class="col-md-3">
            <i class="fa-solid fa-face-smile"></i>
            <h4>Event & Party</h4>
            <p>We are passionate about serving fresh, flavorful</p>
        </div>
    </div>
</section>

<section class="container">
    <div class="">
        <div class="">
            <h2>CREATE AN BOOKING TABLE</h2>
            <div class="row">
                <div class="col-md-6">
                     <input type="text" placeholder="Enter your name">
                </div>
                <div class="col-md-6">
                   <input type="email" placeholder="Enter your Email">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" placeholder="Enter your Phone">
                </div>
                <div class="col-md-6">
                     <input type="date">
                </div>
            </div>
                 <div class="">
                    <select class="">
                        <option>01 People</option>
                        <option>02 People</option>
                        <option>03 People</option>
                        <option>04 People</option>
                    </select>
                </div>
                    <div>
                        <button>Book a Table</button>
                    </div>
        </div>
    </div>
</section>



<section class="container ourblog">
    <div>
        <h1>Explore Our Delicious Menu</h1>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-2">
                   <img src="../photo/menu-thumb1.png" alt="">
                </div>
                <div class="col-md-8">
                    <h5>Truffle Mac and Cheese</h5>
                    <p>Indulgent mac and cheese with truffle essence.</p>
                </div>
                <div class="col-md-2 text-end">
                    <div class="price text-danger fw-bold fs-4">
                        $25.50
                    </div>
                </div>   
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-2">
                   <img src="../photo/menu-thumb2.png" alt="">
                </div>
                <div class="col-md-8">
                    <h5>Truffle Mac and Cheese</h5>
                    <p>Indulgent mac and cheese with truffle essence.</p>
                </div>
                <div class="col-md-2 text-end">
                    <div class="price text-danger fw-bold fs-4">
                        $25.50
                    </div>
                </div>   
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-2">
                   <img src="../photo/menu-thumb3.png" alt="">
                </div>
                <div class="col-md-8">
                    <h5>Truffle Mac and Cheese</h5>
                    <p>Indulgent mac and cheese with truffle essence.</p>
                </div>
                <div class="col-md-2 text-end">
                    <div class="price text-danger fw-bold fs-4">
                        $25.50
                    </div>
                </div>   
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-2">
                   <img src="../photo/menu-thumb4.png" alt="">
                </div>
                <div class="col-md-8">
                    <h5>Truffle Mac and Cheese</h5>
                    <p>Indulgent mac and cheese with truffle essence.</p>
                </div>
                <div class="col-md-2 text-end">
                    <div class="price text-danger fw-bold fs-4">
                        $25.50
                    </div>
                </div>   
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-2">
                   <img src="../photo/menu-thumb5.png" alt="">
                </div>
                <div class="col-md-8">
                    <h5>Truffle Mac and Cheese</h5>
                    <p>Indulgent mac and cheese with truffle essence.</p>
                </div>
                <div class="col-md-2 text-end">
                    <div class="price text-danger fw-bold fs-4">
                        $25.50
                    </div>
                </div>   
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-2">
                   <img src="../photo/menu-thumb6.png" alt="">
                </div>
                <div class="col-md-8">
                    <h5>Truffle Mac and Cheese</h5>
                    <p>Indulgent mac and cheese with truffle essence.</p>
                </div>
                <div class="col-md-2 text-end">
                    <div class="price text-danger fw-bold fs-4">
                        $25.50
                    </div>
                </div>   
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-2">
                   <img src="../photo/menu-thumb7.png" alt="">
                </div>
                <div class="col-md-8">
                    <h5>Truffle Mac and Cheese</h5>
                    <p>Indulgent mac and cheese with truffle essence.</p>
                </div>
                <div class="col-md-2 text-end">
                    <div class="price text-danger fw-bold fs-4">
                        $25.50
                    </div>
                </div>   
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-2">
                   <img src="../photo/menu-thumb8.png" alt="">
                </div>
                <div class="col-md-8">
                    <h5>Truffle Mac and Cheese</h5>
                    <p>Indulgent mac and cheese with truffle essence.</p>
                </div>
                <div class="col-md-2 text-end">
                    <div class="price text-danger fw-bold fs-4">
                        $25.50
                    </div>
                </div>   
            </div>
        </div>
    </div>
</section>

<!-- Food Gallery Section Start -->

<div class="gallery">

    <div class="card">
      <img src="../photo/gallery-14.jpg" alt="">
      <div class="overlay">
        <h2>Burger</h2>
        <p>Fast Food</p>
      </div>
    </div>

    <div class="card">
      <img src="../photo/gallery-15.jpg" alt="">
      <div class="overlay">
        <h2>Salad</h2>
        <p>Healthy Food</p>
      </div>
    </div>

    <div class="card">
      <img src="../photo/gallery-16.jpg" alt="">
      <div class="overlay">
        <h2>Pizza</h2>
        <p>Italian Food</p>
      </div>
    </div>

    <div class="card">
      <img src="../photo/gallery-17.jpg" alt="">
      <div class="overlay">
        <h2>Chicken</h2>
        <p>Grill Item</p>
      </div>
    </div>
</div>

<!-- Food Gallery Section End -->

<section class="container">
    
        <div class="ourblog">
            <h1>INTRODUCING OUR CULINARY MASTER</h1>
        </div>
</section>


<!-- ===== Chef Section Start ===== -->

<!-- Section Title -->

<div class="chef-container">

    <!-- Chef Card 1 -->
    <div class="chef-card">

        <!-- Social Icons -->
        <div class="social-icons">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-linkedin-in"></i>
            <i class="fa-brands fa-instagram"></i>
        </div>

        <!-- Chef Image -->
        <img src="../photo/team-14.jpg" alt="">

        <!-- Chef Info -->
        <div class="chef-info">
            <h2>David Liam</h2>
            <p>CEO</p>
        </div>

    </div>

    <!-- Chef Card 2 -->
    <div class="chef-card">

    <!-- Social Icons -->
        <div class="social-icons">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-linkedin-in"></i>
            <i class="fa-brands fa-instagram"></i>
        </div>

        <img src="../photo/team-15.jpg" alt="">

        <div class="chef-info">
            <h2>Alex Mika</h2>
            <p>Executive Chef</p>
        </div>

    </div>

    <!-- Chef Card 3 -->
    <div class="chef-card">

    <!-- Social Icons -->
        <div class="social-icons">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-linkedin-in"></i>
            <i class="fa-brands fa-instagram"></i>
        </div>

        <img src="../photo/team-16.jpg" alt="">

        <div class="chef-info">
            <h2>John Smith</h2>
            <p>Executive Chef</p>
        </div>

    </div>

</div>

<!-- ===== Chef Section End ===== -->

<section class="container">
    
        <div class="ourblog">
            <h1><strong>DISCOVER OUR LATEST BLOG POSTS</strong></h1>
        </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="../photo/Frame-2-9.png" alt="">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                           <i class="fa-regular fa-user"></i> 
                        </div>
                        <div class="col-md-6">
                            <h6>Foodix</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <i class="fa-solid fa-comment"></i>
                        </div>
                        <div class="col-md-6">
                            <h6>No Comments</h6>
                        </div>
                    </div>
                </div>
            </div>
                <div>
                    <h4><strong>Smoked Paprika Sirloin</strong></h4>
                    <p>This steak dinner is the definition of “fine dining at home,” featuring a</p>
                </div>
        </div>
        <div class="col-md-4">
            <img src="../photo/Frame-2-3.png" alt="">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <div class="col-md-6">
                            <h6>Foodix</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <i class="fa-solid fa-comment"></i>
                        </div>
                        <div class="col-md-6">
                            <h6>No Comments</h6>
                        </div>
                    </div>
                </div>
            </div>
                <div>
                    <h4><strong>Sushi Assortment Italian</strong></h4>
                    <p>This sushi platter is a masterclass in delicate Japanese artistry featuring a vibrant</p>
                </div>
        </div>
        <div class="col-md-4">
            <img src="../photo/Frame-2-6.png" alt="">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <div class="col-md-6">
                            <h6>Foodix</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <i class="fa-solid fa-comment"></i>
                        </div>
                        <div class="col-md-6">
                            <h6>No Comments</h6>
                        </div>
                    </div>
                </div>
            </div>
                <div>
                    <h4><strong>Burger and Soft Drings</strong></h4>
                    <p>This burger is a culinary masterpiece featuring a perfectly seared, thick beef patty</p>
                </div>
        </div>
    </div>
</section>

    <?php require_once 'footer.php'; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>