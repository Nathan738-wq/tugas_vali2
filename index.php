<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous"></script>
    <title> Nat</title>
</head>
<body>
    <header>
        <input type ="checkbox" name ="" id ="chk1">
        <div class="logo"><h1>Nat Web</h1></div>
            <div class="search-box">
                <form>
                    <input type ="text" name ="search" id ="srch" placeholder="Search">
                    <button type ="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <ul>
                <li><a href="index.php?modul=home">Home</a></li>
                <li><a href="index.php?modul=product">Product</a></li>
                <li><a href="index.php?modul=blog">Blog</a></li>
                <li><a href="index.php?modul=contact">Contact</a></li>
                <li>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </li>
            </ul>
            <div class="menu">
                <label for="chk1">
                    <i class="fa fa-bars"></i>
                </label>
            </div>
    </header>
    <div id="main-content">
    <?php
    if(isset($_GET['modul'])){
        $pages = $_GET['modul'];
    }else{
        $pages = "home";
    }
    if(!isset($_GET['modul']) || $pages=="home"){
    ?>
    <div id="Content-home">
    <h1>
        Home
    </h1>
    <p>Nathan itu ingin masuk ugm<br>
  Nathan hari minggu pergi ke luar<br>
   besok hari jumat<br>
    serapan menggunakn roti dan susu<br>
   </p>
</div>
<?php
    }
    if($pages == "product"){
        ?>
    <div id="Content-product">
        <h1>
            Product
        </h1>
        <p>Nathan itu ingin masuk ugm<br>
      Nathan hari minggu pergi ke luar<br>
       besok hari jumat<br>
        serapan menggunakn roti dan susu<br>
    </p>
    <ul>
                <li><a href="index.php?modul=Produk1">Olahraga</a></li>
                <li><a href="index.php?modul=Produk2">Elektronik</a></li>
                <li><a href="index.php?modul=Produk3">barang</a></li>
    </ul>
</div>
<?php
    }
    if($pages == "blog"){
        ?>
        <div id="Content-blog">
    <h1>
        Blog
    </h1>
    <p>Nathan itu ingin masuk ugm<br>
  Nathan hari minggu pergi ke luar<br>
   besok hari jumat<br>
    serapan menggunakn roti dan susu<br>
   </p>
</div>
 <?php
    }
    if($pages == "contact"){
        ?>
        <div id="gatau">
    <div class="container mt-5" id="Content-contact">
        <div class="text-center">
            <h1 class="display"><strong>Crud App</strong></h1>
        </div>
        <div class="main row justify-content-center">
            <form action="" id="student-form" class="row justify-content-center mb-4" autocomplete="off">
                <label for="firstName" >First Name</label>
                <div class="input-group coll-10 mb-3">
                    <input type="text" class="form-control" id="firstName" placeholder="Eneter First Name " name="name"   onkeyup="validateName()">
                    <span id="name-error"></span>
                </div>
                <label for="lastName">Last Name</label>
                <div class="input-group coll-10 mb-3">
                    <input type="text" class="form-control" id="lastName" placeholder="Eneter last Name " name="name"   onkeyup="validatelastName()">
                    <span id="name-error1"></span>
                </div>
                <label for="rollNo">Roll No</label>
                <div class="input-group coll-10 mb-3">
                    <input type="text" class="form-control" id="rollNo" placeholder="Eneter Roll No " name="phone" type="tel"   onkeyup="validatePhone()">
                    <span id="phone-error"></span>

                </div>
                <div class="col-15">
                    <input type="submit" value="Submit" class="btn btn-success add-btn">
                </div>
            </form>
            <div class="col-13  mt-5">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Roll No</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="student-list">
                        <tr>
                            <td>Dear</td>
                            <td>Programmer</td>
                            <td>25</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm edit">edit</a>
                                <a href="#" class="btn btn-danger btn-sm delete">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="script.js"></script>

<?php    
}
if($pages == "aboutme"){
    ?>
    <div id="Content-aboutme">
        <h1>
            Hello
        </h1>x
        <p>Udin
    </p>
<?php
}
if($pages == "Produk1"){
    ?>
    <div id="Content-contact">
        <h1>
            Produk Olahraga
        </h1>
        <label>bola basket</label><br>
        <label>bola sepak</label><br>
        <label>bola voli</label><br>
    </div>
    <a href="index.php?modul=product">Kembali</a>
    <?php
}
if($pages == "Produk2"){
    ?>
    <div id="Content-contact">
        <h1>
            Produk Elektronik
        </h1>
        <label>Kipas</label><br>
        <label>televisi</label><br>
        <label>kulkas</label><br>
    </div>
    <a href="index.php?modul=product">Kembali</a>
    <?php
}
if($pages == "Produk3"){
    ?>
    <div id="Content-contact">
        <h1>
            Produk Furniture
        </h1>
        <label>Kursi</label><br>
        <label>Meja</label><br>
        <label>Papan</label><br>
    </div>
    <a href="index.php?modul=product">Kembali</a>
    <?php
}
?>
</div>
</body>
</html>
