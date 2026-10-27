<?php

require_once 'db.php';

// Basic Form Handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $about = htmlspecialchars($_POST['about']);
  $location = htmlspecialchars($_POST['location']);
  $mobile = htmlspecialchars($_POST['mobile']);
  $email = htmlspecialchars($_POST['email']);
  $instagram = htmlspecialchars($_POST['instagram']);
  $facebook = htmlspecialchars($_POST['facebook']);
  $opentime = htmlspecialchars($_POST['opentime']);

  $update_id = $_POST['update_id'];
  
  


  
$query = $pdo->exec("UPDATE `company` SET 
    `about`    = '$about',
    `location` = '$location',
    `mobile`  = '$mobile',
    `email`  = '$email',
    `instagram`  = '$instagram',
    `facebook`  = '$facebook',
    `opentime`    = '$opentime' 
    WHERE id= '".$update_id."'");

 if ($query) {
        echo "<script>alert('Update Success.');</script>";
        header("Location: company.php");
    } else {
        echo "Error saving.";
    }

}

    







  $query = $pdo->prepare("SELECT * FROM `company` WHERE `id` = '1'");
  $query->execute();
  $fetch_data = $query->fetch(PDO::FETCH_ASSOC);

  $id = $fetch_data['id'];
  $about = $fetch_data['about'];
  $location = $fetch_data['location'];
  $mobile = $fetch_data['mobile'];
  $email = $fetch_data['email'];
  $instagram = $fetch_data['instagram'];
  $facebook = $fetch_data['facebook'];
  $opentime = $fetch_data['opentime'];


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

.container button{
    background:#0d6efd;
    color:#fff;
    border:none;
    padding:12px 25px;
    border-radius:8px;
    cursor:pointer;
    transition:.3s;
}

.container button:hover{
    background:#0b5ed7;
}

.fa-trash{
    color:#dc3545;
}
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row flex-nowrap">

        <?php require_once 'nav.php'; ?>

    <div class="col py-3">
            <section class=container>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="hidden" id="update_id" name="update_id" value="<?php print $id; ?>">
                <input type="text" id="about" name="about" placeholder="about" value="<?php print $about; ?>" required>
                <input type="text" id="location" name="location" placeholder="location" value="<?php print $location; ?>" required> 
                <input type="text" id="mobile" name="mobile" placeholder="mobile" value="<?php print $mobile; ?>" required>
                <input type="text" id="email" name="email" placeholder="email" value="<?php print $email; ?>" required>
                <input type="text" id="instagram" name="instagram" placeholder="instagram" value="<?php print $instagram; ?>" required>
                <input type="text" id="facebook" name="facebook" placeholder="facebook" value="<?php print $facebook; ?>" required>
                <input type="text" id="opentime" name="opentime" placeholder="opentime" value="<?php print $opentime; ?>" required>
                <button type="submit">UPDATE</button>
            </form>     
            </section>

        


    </div>

  </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>
</html>