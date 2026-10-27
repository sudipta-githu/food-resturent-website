<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    .home{
        color: #00ff40;
    }
    .hero{
        color: #d9ff00;
    }
    .company{
        color: #e100ff;
    }
    .blog{
        color: #0099ff;
    }
    .com{
        color: #00b7ff;
    }
    .log{
        color: #ff0000;
    }

    .bg-dark {
    background-color: rgb(0, 0, 0) !important;
}
</style>

</head>
<body>
    
</body>
</html>

<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline menus">Dashboard</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link align-middle px-0 home">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="categories.php" class="nav-link align-middle px-0 home">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">categories</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link align-middle px-0 home">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">about</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="menu.php" class="nav-link px-0 align-middle hero">
                            <i class="fs-4 bi bi-border-all"></i></i> <span class="ms-1 d-none d-sm-inline">Menu</span></a>
                    </li>
                    <li>
                        <a href="page.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle company">
                            <i class="fs-4 bi bi-building"></i></i> <span class="ms-1 d-none d-sm-inline">Page</span></a>                    
                    </li>
                    <li>
                        <a href="shop.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle blog">
                            <i class="fs-4 bi bi-pencil"></i> <span class="ms-1 d-none d-sm-inline">shop</span> </a>
                            
                    </li>
                    <li>
                        <a href="company.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle com">
                            <i class="bi bi-card-text"></i></i> <span class="ms-1 d-none d-sm-inline">company</span> </a>
                            
                    </li>
                    <li>
                        <a href="logout.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle log">
                            <i class="bi bi-box-arrow-left"></i></i> <span class="ms-1 d-none d-sm-inline">Log Out</span> </a>
                            
                    </li>
                </ul>
                
            </div>
        </div>