<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
    font-size: 1rem;
    line-height: 2.15;
    padding-left: .75em;
    padding-right: .75em;
    }
    .card-registration .select-arrow {
    top: 13px;
    }
    </style>
</head>
<body>
    <!-- <div class="container">
    <form action="index.php?act=signin" method="POST">
                    <div class="input-form">
                        <span>Tên Người Dùng</span>
                        <input type="text" name="user" required>
                    </div>
                    <div class="input-form">
                        <span>Số điện thoại</span>
                        <input type="text" name="tel" required>
                    </div>
                    <div class="input-form">
                        <span>Email</span>
                        <input type="email" name="email" required>
                    </div>
                    <div class="input-form">
                        <span>Mật Khẩu</span>
                        <input type="password" name="pass" required>
                    </div>
                    <div class="input-form">
                        <span>Address</span>
                        <input type="text" name="address" required>
                    </div>
                    <div class="input-form">
                        <input type="submit" value="Đăng Ký" name="dangky">
                        
                    </div>

                </form>
    </div> -->
    <section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="public/image/z4855581083292_70cc31f28c11e0b75fd1dc0f53330f3c.jpg"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Register</h3>
                <form action="index.php?url=signin" method="POST">
                <div class="form-outline mb-4">
                  <input type="text" name="user" id="form3Example8" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example8">User</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="tel" id="form3Example9" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example9">Telephone</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" name="email" id="form3Example90" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example90">Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="pass" id="form3Example8" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example8">Password</label>
                </div>
                           
                <div class="form-outline mb-4">
                  <input type="text" name="address" id="form3Example8" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example8">Address</label>
                </div>
        
                <div class="d-flex justify-content-end pt-3">
                  <button type="button" class="btn btn-light btn-lg">Reset all</button>
                  <button type="submit" name="dangky" class="btn btn-warning btn-lg ms-2">Sign In</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>