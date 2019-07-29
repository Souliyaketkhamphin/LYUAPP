<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
    <img src="lyu.jpg" class="rounded-circle" alt="Cinque Terre" width="100" height="100">

  <center h1 class="text-primary">ຍິນດີຕ້ອນຮັບສູ່ລະບົບຂາອອກ-ຂາເຂົ້າສູນກາງຊາວໜຸ່ມ ຊປປລ</h1>
  <p class="text-success"> Lao People's Revolutionary Youth Union</p>
</div>
<div class="col-sm-4">
       <h3>ຍິນດີຕ້ອນຮັບທ່ານ</h3>


       <div id="mySidenav" class="sidenav">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
       <a href="Main.php">ໜ້າຫຼັກ</a>
       <a href="inDocForm.php">ປ້ອນເອກະສານເຂົ້າ</a>
       <a href="OutDocForm.php">ປ້ອນເອກະສານອອກ</a>
       <a href="DatabaseForm.php">ຖານຂໍ້ມູນ</a>
       <a href="ContactForm.php">ຕິດຕໍ່ພວກເຮົາ</a>
       <a href="Devoloper.php">Devoloper</a>
       <a href="#">ເພີ່ມເຕີມ...</a>
       <div>
         <ul><a href="#">111111111111111</a>
         </ul>
       </div>
      </div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
     <script>
     function openNav() {
       document.getElementById("mySidenav").style.width = "250px";
     }

     function closeNav() {
       document.getElementById("mySidenav").style.width = "0";
     }
     </script>

</body>
</html>
