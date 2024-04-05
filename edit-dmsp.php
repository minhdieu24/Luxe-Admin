<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Chỉnh biểu tượng web -->
  <link href="./icon/Logo.svg" rel="shortcut icon" />
  <title>Luxe - Admin</title>
  <!-- GG Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet" />
  <!-- Styles -->
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/responsinve.css" />

  <!-- Scripts -->
  <script src="./js/scripts.js"></script>
  <!-- FONT AWESOME - THƯ VIỆN ICON -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body>
  <div class="edit-dmsp">
    <!-- Header -->
    <header>
      <div class="container">
        <div class="top-bar">
          <!-- Logo -->
          <a href="./" class="logo-nav">
            <img src="./icon/Logo.svg" alt="Luxe" />
            <h1 class="logo-title">Luxe</h1>
          </a>
          <!-- nav = navigation giống div nhưng có ngữ nghĩa -->
          <!-- Navigation -->
          <nav class="navbar">
            <ul>
              <li><a href="#!">Trang chủ</a></li>
              <li><a href="#!">Sản phẩm</a></li>
              <li><a href="#!">Khuyến mãi</a></li>
              <li><a href="#!">Đơn hàng</a></li>
              <li><a href="#!">Khách hàng</a></li>
              <li><a href="#!">Nhân viên</a></li>
              <li><a href="#!">Thống kê</a></li>
            </ul>
          </nav>

          <!-- Action -->
          <div class="top-act">
            <button class="top-act-btn">
              <img src="./icon/user.svg" alt="" />
            </button>
          </div>
        </div>
      </div>
    </header>
    <!-- Page Title -->
    <section id="page-title-DMSP">
      <div class="container">
        <div class="home-title-DMSP">
          <div style="display: flex; align-items: center; margin-right: 60%">
            <img src="./icon/diamond-2.svg" alt="" />
            <h1 class="title">CẬP NHẬT DANH MỤC SẢN PHẨM</h1>
          </div>
          <img class="thng-tin-label-item" src="./icon/back-button.png" id="groupIcon"
            title="Trỏ về trang quản lý danh mục sản phẩm" width="50px" />

        </div>
      </div>
    </section>

    <!-- Main content -->
    <form action="">

      <section id="main-cate-edit-content">

        <footer class="update-info-DMSP-frame">

          <div class="input-editDMSP-frame">
            <div class="category-input-frame">
              <div class="input-DM-frame">
                <label for="TenDMSP" class="form-DMSP-label">Tên danh mục </label>
                <input type="text" id="TenDMSP" name="TenDMSP" class="input-ten-dm" required />
              </div>
              <div class="info-cate-add__inner--iamge">
                <label for="HinhAnhDMSP" class="form-DMSP-label">Hình ảnh <span style="color:red">*</span></label>
                <input type="file" id="HinhAnhDMSP" name="HinhAnhDMSP" class="file-procat" required>
              </div>
            </div>

            <div class="category-input-note">
              <label for="MoTaDMSP" class="form-DMSP-label">Mô tả (nếu có)
              </label>
              <textarea class="form-input-DMSP-note" rows="{15}" cols="{20}">
              </textarea>
            </div>

          </div>
          <input type="submit" value="Cập nhật" class="cap-nhat-button" id="update-button">
          <!-- ---- -->
          <!-- <div class="cap-nhat-button" id="update-button">
          <h3 class="cap-nhat--text">Cập nhật</h3>
        </div> -->
        </footer>

        <div id="thmDanhMc" class="popup-overlay" style="display: none">
          <div class="alert-add-dmsp">
            <header class="alert-add-dmsp--text">
              Đã cập nhật danh mục sản phẩm thành thông
            </header>
            <img class="alert-add-dmsp--img" loading="lazy" alt="" src="./icon/tick-icon.svg" />
          </div>
        </div>
      </section>
    </form>

  </div>

  <script>
    var groupIcon = document.getElementById("groupIcon");
    if (groupIcon) {
      groupIcon.addEventListener("click", function (e) {
        window.location.href = "qly-dmsp.php"; //nhấn nút back quay lại qly loại sp
      });
    }

    //hiện popup thông báo thành công
    var UpdateButton = document.getElementById("update-button");
    if (UpdateButton) {
      UpdateButton.addEventListener("click", function () {
        var popup = document.getElementById("thmDanhMc");
        if (!popup) return;
        var popupStyle = popup.style;
        if (popupStyle) {
          popupStyle.display = "flex";
          popupStyle.zIndex = 100;
          popupStyle.backgroundColor = "rgba(113, 113, 113, 0.3)";
          popupStyle.alignItems = "center";
          popupStyle.justifyContent = "center";
        }
        popup.setAttribute("closable", "");

        var onClick =
          popup.onClick ||
          function (e) {
            if (e.target === popup && popup.hasAttribute("closable")) {
              popupStyle.display = "none";
            }
          };
        popup.addEventListener("click", onClick);
      });
    }
  </script>
</body>

</html>