<?php

require_once 'db.php';

// Basic Form Handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $title = htmlspecialchars($_POST['title']);
  $subtitle = htmlspecialchars($_POST['subtitle']);
  $contant = htmlspecialchars($_POST['contant']);
  $image = htmlspecialchars($_POST['image']);

  $update_id = $_POST['update_id'];
  
  $target_dir = "uploads/";

$rename_file = rand().basename($_FILES["image"]["name"]);

$target_file = $target_dir . $rename_file;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

if (empty($update_id)) {
  
  $query = $pdo->exec("INSERT INTO `page`
    
    (
        `title`,
        `subtitle`,
        `contant`,
        `image`
        

        ) VALUES (
        
        '$title',
        '$subtitle',
        '$contant',
        '$target_file'
        


        )");

    if ($query) {
        echo "<script>alert('Success.');</script>";
        header("Location: page.php");
    } else {
        echo "Error saving.";
    }

}else{
  
$query = $pdo->exec("UPDATE `page` SET 
    `title`    = '$title',
    `subtitle` = '$subtitle',
    `contant`  = '$contant',
    `image`    = '$image' 
    WHERE id= '".$update_id."'");

 if ($query) {
        echo "<script>alert('Update Success.');</script>";
        header("Location: page.php");
    } else {
        echo "Error saving.";
    }

}

    
}

// delete
if(!empty($_GET['delete_id'])){

 $delete_id = $_GET['delete_id'];

    // Delete customer from database
    $query = $pdo->prepare("DELETE FROM `page` WHERE `id` = '$delete_id' ");
    if ($query->execute()) {
         echo "<script>alert('Delete Success.');</script>";
        header("Location: menu.php");
    } else {
        echo "Error deleting customer.";
    }
}

if(!empty($_GET['id'])){

$id = $_GET['id'];


  $query = $pdo->prepare("SELECT * FROM `page` WHERE `id` = '$id'");
  $query->execute();
  $fetch_data = $query->fetch(PDO::FETCH_ASSOC);

  $title = $fetch_data['title'];
  $subtitle = $fetch_data['subtitle'];
  $contant = $fetch_data['contant'];
  $image = $fetch_data['image'];

}else {
  $id = '';
  $title = '';
  $subtitle = '';
  $contant = '';
  $image = '';

}
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
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"enctype="multipart/form-data">
                <input type="hidden" id="update_id" name="update_id" value="<?php print $id; ?>">
                <input type="text" id="title" name="title" placeholder="title" value="<?php print $title; ?>" required>
                <input type="text" id="subtitle" name="subtitle" placeholder="subtitle" value="<?php print $subtitle; ?>" required> 
                <input type="text" id="contant" name="contant" placeholder="contant" value="<?php print $contant; ?>" required>
                <label for="file-upload">Choose a file:</label>
                <input type="file" id="image" name="image" required>            
                <button type="submit">Save</button>
            </form>     
            </section>

        <div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">SL</th>
                <th scope="col">Title</th>
                <th scope="col">subtitle</th>
                <th scope="col">contant</th>
                <th scope="col">image</th>
                <th scope="col">action</th>
              </tr>
            </thead>

            <?php
                $sl = 1;
                $query = $pdo->prepare("SELECT * FROM `page`");
                $query->execute();
                $fetch_list = $query->fetchAll(PDO::FETCH_ASSOC);
                foreach($fetch_list AS $fetch)
                {
            ?>
            <tbody>
            <tr>
            <td><?php print $sl++; ?></td>
            <td><?php print $fetch['title']; ?></td>
            <td><?php print $fetch['subtitle']; ?></td>
            <td><?php print $fetch['contant']; ?></td>
            <td><?php print $fetch['image']; ?></td>
            <td>
                <a href="menu.php?id=<?php print $fetch['id']; ?>"><i class="fa-regular fa-pen-to-square pen"></i></a>
                <a href="menu.php?delete_id=<?php print $fetch['id']; ?>"><i class="fa-solid fa-trash trash"></i></a>
            </td>
            </tr>
        <?php } ?>
            </tbody>
        </table>
        </div>


    </div>

  </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>
</html>