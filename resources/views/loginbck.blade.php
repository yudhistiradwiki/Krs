<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign in & Sign up Form</title>
  <link rel="stylesheet" href="theme/login/style.css" />
</head>

<body>
  <main>
    <div class="box">
      <div class="inner-box">
        <div class="forms-wrap">
          <form action="/login" method="POST" autocomplete="off" class="sign-in-form">
            <div class="logo">
              <img src="theme/login/img/logopei.png">
              <h4>sisfo<font color="orange">PEI</font>
              </h4>
            </div>

            <div class="heading">
              <h2>Selamat Datang</h2>
              <h6>Belum menjadi mahasiswa PEI?</h6>
              <a href="#" class="toggle">Daftar</a>
            </div>
            <div class="actual-form">
                <div class="input-wrap">
                  <input name="email" type="email" class="input-field">
                  <label>Alamat Email</label>
                </div>

                <div class="input-wrap">
                  <input name="password" type="password" class="input-field">
                  <label>Kata Sandi</label>
                </div>

                <button type="submit" class="sign-btn"> Masuk </button>

                <p class="text">
                  Lupa kata sandi?
                  <a href="#">Ganti kata sandi</a> sekarang.
                </p>
            </div>
          </form>

          <form action="/login" method="POST" class="sign-up-form">
            <div class="logo">
              <img src="theme/login/img/logopei.png">
              <h4>sisfo<font color="orange">PEI</font>
              </h4>
            </div>

            <div class="heading">
              <h2>Halo!</h2>
              <h6>Sudah memiliki akun?</h6>
              <a href="#" class="toggle">Masuk</a>
            </div>

            <div class="actual-form">
              <div class="input-wrap">
                <input type="text" minlength="4" class="input-field" autocomplete="off" required />
                <label>Nama Lengkap</label>
              </div>

              <div class="input-wrap">
                <input type="email" class="input-field" autocomplete="off" required />
                <label>Alamat Email</label>
              </div>

              <div class="input-wrap">
                <input type="password" minlength="4" class="input-field" autocomplete="off" required />
                <label>Kata Sandi</label>
              </div>

              <input type="submit" value="Daftar" class="sign-btn" />

              <p class="text">
                Dengan mendaftar saya setuju dengan
                <a href="#">kebijakan privasi</a> dan
                <a href="#">persyaratan layanan</a> menjadi mahasiswa PEI
              </p>
            </div>
          </form>
        </div>

        <div class="carousel">
          <div class="images-wrapper">
            <img src="theme/login/img/coba1.png" class="image img-1 show" alt="" />
            <img src="theme/login/img/coba2.png" class="image img-2" alt="" />
            <img src="theme/login/img/coba3.png" class="image img-3" alt="" />
          </div>

          <div class="text-slider">
            <div class="text-wrap">
              <div class="text-group">
                <h2>Ambil KRS secara online</h2>
                <h2>Melihat data nilai KHS</h2>
                <h2>Mahasiswa dapat akses online</h2>
              </div>
            </div>

            <div class="bullets">
              <span class="active" data-value="1"></span>
              <span data-value="2"></span>
              <span data-value="3"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Javascript file -->

  <script src="theme/login/app.js"></script>
</body>

</html>
