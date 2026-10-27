<?php

require_once 'db.php';

// Basic Form Handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $bur_title = htmlspecialchars($_POST['bur_title']);
  $bur_items = htmlspecialchars($_POST['bur_items']);
  $sand_title = htmlspecialchars($_POST['sand_title']);
  $sand_items = htmlspecialchars($_POST['sand_items']);
  $mexi_title = htmlspecialchars($_POST['mexi_title']);
  $mexi_items = htmlspecialchars($_POST['mexi_items']);
  $itali_title = htmlspecialchars($_POST['itali_title']);
  $itali_items = htmlspecialchars($_POST['itali_items']);

  $update_id = $_POST['update_id'];
  
  


  
$query = $pdo->exec("UPDATE `categories` SET 
    `bur_title`    = '$bur_title',
    `bur_items`    = '$bur_items', 
    `sand_title`    = '$sand_title', 
    `sand_items`    = '$sand_items',
    `mexi_title`    = '$mexi_title',
    `mexi_items`    = '$mexi_items', 
    `itali_title`    = '$itali_title', 
    `itali_items`    = '$itali_items' 
    WHERE id= '".$update_id."'");

 if ($query) {
        echo "<script>alert('Update Success.');</script>";
        header("Location: categories.php");
    } else {
        echo "Error saving.";
    }

}

    







  $query = $pdo->prepare("SELECT * FROM `categories` WHERE `id` = '1'");
  $query->execute();
  $fetch_data = $query->fetch(PDO::FETCH_ASSOC);

  $id = $fetch_data['id'];
  $bur_title = $fetch_data['bur_title'];
  $bur_items = $fetch_data['bur_items'];
  $sand_title = $fetch_data['sand_title'];
  $sand_items = $fetch_data['sand_items'];
  $mexi_title = $fetch_data['mexi_title'];
  $mexi_items = $fetch_data['mexi_items'];
  $itali_title = $fetch_data['itali_title'];
  $itali_items = $fetch_data['itali_items'];


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
<div class="row" >
    <div class="col-md-6">
    <div class="col py-3">
            <section class=container>
                <h1>burger</h1>
                <input type="hidden" id="update_id" name="update_id" value="<?php print $id; ?>">
                <input type="text" id="bur_title" name="bur_title" placeholder="title" value="<?php print $bur_title; ?>" required>
                <input type="text" id="bur_items" name="bur_items" placeholder="items" value="<?php print $bur_items; ?>" required> 
            </section>

        


    </div>
    <div class="col py-3">
            <section class=container>
                <h1>sandwiches</h1>
                <input type="hidden" id="update_id" name="update_id" value="<?php print $id; ?>">
                <input type="text" id="sand_title" name="sand_title" placeholder="title" value="<?php print $sand_title; ?>" required>
                <input type="text" id="sand_items" name="sand_items" placeholder="items" value="<?php print $sand_items; ?>" required> 
            </section>

        


    </div>

    </div>

    <div class="col-md-6">
    <div class="col py-3">
            <section class=container>
                <h1>mexican</h1>
                <input type="hidden" id="update_id" name="update_id" value="<?php print $id; ?>">
                <input type="text" id="mexi_title" name="mexi_title" placeholder="title" value="<?php print $mexi_title; ?>" required>
                <input type="text" id="mexi_items" name="mexi_items" placeholder="items" value="<?php print $mexi_items; ?>" required> 
            </section>

        


    </div>
    <div class="col py-3">
            <section class=container>
                <h1>italian</h1>
                <input type="hidden" id="update_id" name="update_id" value="<?php print $id; ?>">
                <input type="text" id="itali_title" name="itali_title" placeholder="title" value="<?php print $itali_title; ?>" required>
                <input type="text" id="itali_items" name="itali_items" placeholder="items" value="<?php print $itali_items; ?>" required> 
            </section>

        


    </div>
    
    </div>
    <button type="submit">UPDATE</button>
                </form>     

    </div>
  </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>
</html>