<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container"><br><br><br><br>
  <h2>ກະລຸນາປ້ອນລະຫັດຜ່ານຂອງທ່ານ</h2><br>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">ຊື່:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter your name" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">ລະຫັດ:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter your password" name="pswd">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> ຈົດຈຳໄວ້
      </label>
    </div>
    <button type="submit" class="btn btn-primary">ຕົກລົງ</button>
  </form>
</div>

</body>
</html>
