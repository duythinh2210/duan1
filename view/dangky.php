<section>
  <div id="login">
    <h3 class="login-title">Đăng Ký Hệ Thống</h3>
    <p>Bạn đã có tài khoản? <a href="index.php?pg=dangnhap" style="color:blue">Đăng Nhập</a></p>
    <form action="index.php?pg=dangky" method="POST" id="form-login">
      <!-- Các trường nhập liệu cho đăng ký -->
      <div class="form-group-login">
        <input type="text" name="hoten" id="hoten" class="email-ip" placeholder="Họ tên " required />
      </div>
      <div class="form-group-login">
        <input type="email" name="email" id="email" class="email-ip" placeholder="Email " required />
      </div>
      <div class="form-group-login">
        <input type="tel" name="dienthoai" id="dienthoai" class="email-ip" placeholder="Số điện thoại " required />
      </div>
      <div class="form-group-login">
        <input type="text" name="username" id="username" class="email-ip" placeholder="Tên đăng nhập " required />
      </div>
      <div class="form-group-login">
        <input type="password" name="password" id="password" placeholder="Mật khẩu " required />
        <i class="far fa-eye eye"></i>
        <i class="far fa-eye-slash eye eye-none"></i>
      </div>
      <div class="btn-login pt-1">
        <button type="submit">Đăng ký</button>
      </div>
    </form>
  </div>
</section>
