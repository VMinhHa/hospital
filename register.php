<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/form.css">
</head>
<body>
  <div class="container">
    <div class="logo">
      <a href="./index.php">
        <img src="./images/logo.png" alt="">
      </a>
    </div>
    <div class="row justify-content-md-center">
      <div class="col-8">
        <div class="main-form">
          <form action="" class="needs-validation" novalidate method="POST">
            <h2>ĐĂNG KÝ</h2>
            <div class="form-group ">
              <label for="uname">Tên Đăng Nhập:</label>
              <input type="text" class="form-control" id="uname" placeholder="Nhập tên đăng nhập" name="user" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
              <label for="pwd">Mật Khẩu:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="password" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="form-group">
              <label for="txtname">Họ Tên:</label>
              <input type="text" class="form-control" id="txtname" placeholder="Nhập họ tên" name="name" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="form-group">
              <label for="txtsdt">Số điện thoại:</label>
              <input type="text" class="form-control" id="txtsdt" placeholder="Nhập số điện thoại" name="sdt" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="form-group">
              <label for="txtemail">Email:</label>
              <input type="email" class="form-control" id="txtemail" placeholder="Nhập email" name="email" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="btn-form">
              <button type="submit" class="btn btn-primary btn-sign">Đăng Ký</button>
            </div>
          </form>
        </div>

      </div>
    </div>
    </div>
  </div>

</body>
</html>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>