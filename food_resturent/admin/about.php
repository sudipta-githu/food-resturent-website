<?php

require_once 'db.php';
require_once 'auth.php';

// Basic Form Handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $title = htmlspecialchars($_POST['title']);
  $subtitle = htmlspecialchars($_POST['subtitle']);
  $contant = htmlspecialchars($_POST['contant']);
  $food_items = htmlspecialchars($_POST['food_items']);
  $branch = htmlspecialchars($_POST['branch']);
 
  $update_id = $_POST['update_id'];
  
  


  
$query = $pdo->exec("UPDATE `about` SET 
    `title`    = '$title',
    `subtitle`    = '$subtitle', 
    `contant`    = '$contant', 
    `food_items`    = '$food_items', 
    `branch`    = '$branch'
    WHERE id= '".$update_id."'");

 if ($query) {
        echo "<script>alert('Update Success.');</script>";
        header("Location: about.php");
    } else {
        echo "Error saving.";
    }

}

    







  $query = $pdo->prepare("SELECT * FROM `about` WHERE `id` = '1'");
  $query->execute();
  $fetch_data = $query->fetch(PDO::FETCH_ASSOC);

  $id = $fetch_data['id'];
  $title = $fetch_data['title'];
  $subtitle = $fetch_data['subtitle'];
  $contant = $fetch_data['contant'];
  $food_items = $fetch_data['food_items'];
  $branch = $fetch_data['branch'];
 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
        <style>
     body {
      overflow-x: hidden;
    }

    .sidebar {
      width: 250px;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      background: #212529;
      padding-top: 20px;
    }

    .sidebar a {
      color: #adb5bd;
      text-decoration: none;
      display: block;
      padding: 12px 20px;
      transition: 0.3s;
    }

    .sidebar a:hover {
      background: #343a40;
      color: #fff;
    }

    .content {
      margin-left: 250px;
      padding: 20px;
    }

    .sidebar .menu-title {
      color: white;
      font-size: 20px;
      font-weight: bold;
      padding: 0 20px 20px;
    }

    .menus{
      font-weight:600;
      
    }

    .container{
    background:#fff;
    padding:25px;
    border-radius:12px;
    box-shadow:0 0 15px rgba(0,0,0,.1);
    margin:20px;
}

.container input{
    width:100%;
    padding:12px;
    margin-bottom:15px;
    border:1px solid #ddd;
    border-radius:8px;
    outline:none;
    transition:.3s;
}

.container input:focus{
    border-color:#0d6efd;
    box-shadow:0 0 5px rgba(13,110,253,.3);
}

button[type="submit"] {
    background: #0d6efd;
    color: white;
    border: none;
    padding: 12px 35px;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    display: block;
    margin: 20px auto;
    width: 25%;
    margin-left: 50px;
}

button[type="submit"]:hover {
    background: #0b5ed7;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(13, 110, 253, 0.3);
}

.fa-trash{
    color:#dc3545;
}
    .col-md-6 {
        flex: 0 0 auto;
        width: 40%;
    }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row flex-nowrap">

        <?php require_once 'nav.php'; ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    

    
    <div class="col py-3">
            <section class=container>
                <h1>about</h1>
                <input type="hidden" id="update_id" name="update_id" value="<?php print $id; ?>">
                <input type="text" id="title" name="title" placeholder="title" value="<?php print $title; ?>" required>
                <input type="text" id="subtitle" name="subtitle" placeholder="subtitle" value="<?php print $subtitle; ?>" required> 
                <input type="text" id="contant" name="contant" placeholder="contant" value="<?php print $contant; ?>" required> 
                <input type="text" id="food_items" name="food_items" placeholder="food_items" value="<?php print $food_items; ?>" required> 
                <input type="text" id="branch" name="branch" placeholder="branch" value="<?php print $branch; ?>" required> 
            </section>

        


    </div>
    
    <button type="submit">UPDATE</button>
                </form>     

    </div>
  </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>
</html>