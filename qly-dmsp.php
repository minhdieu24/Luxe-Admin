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
        <img src="./icon/diamond-2.svg" alt="" />
        <h1 class="title">Quản lý loại sản phẩm</h1>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <section id="main-cate-content">
    <div class="main-cate-content--wrapper">
      <!----------- Thông tin danh mục ---------------->
      <div class="info-cate">
        <div class="info-cate-name">Thông tin sản phẩm</div>
        <div class="info-cate-add">
          <form action="">
            <div class="info-cate-add__inner">

              <div class="info-cate-add__inner--ten-input">
                <label for="TenDMSP" class="form-DMSP-label">Tên danh mục <span style="color:red">*</span></label>
                <input type="text" id="TenDMSP" name="TenDMSP" placeholder="Điền tên danh mục" class="form-DMSP-input"
                  required />
              </div>
              <div class="info-cate-add__inner--iamge">
                <label for="HinhAnhDMSP" class="form-DMSP-label">Hình ảnh <span style="color:red">*</span></label>
                <input type="file" id="HinhAnhDMSP" name="HinhAnhDMSP" class="file-procat" required>
              </div>
              <input type="submit" value="Thêm mới" class="button-them-moi">
              <!-- <button class="button-them-moi">
              <div class="them-moi">Thêm mới</div>
            </button> -->

            </div>
          </form>
        </div>
      </div>
      <!----------- Filter ---------------->
      <div class="filter-dmsp--wrapper">
        <select name="filterDMSP" id="filterDMSP" class="filter-DMSP">
          <option value="0">--Chọn điều kiện lọc--</option>
          <option value="1">Mã danh mục</option>
          <option value="2">Tên danh mục</option>
        </select>
        <input type="text" id="data" class="filter-input" />
        <input type="image" src="./icon/search.svg" alt="" class="filter-DMSP-btn" />
      </div>
      <!-- Table -->
      <table class="product-list">
        <thead>
          <tr>
            <th>Mã danh mục</th>
            <th>Tên danh mục</th>
            <th>Hình ảnh</th>
            <th>Tác vụ</th>
          </tr>
        </thead>
        <tbody>
          <!-- SP1 -->
          <tr>
            <td>ProCat1</td>
            <td>NHẪN</td>
            <td><img src="./img/item-1.png" alt="" /></td>
            <td>
              <div class="action">
                <img src="./icon/edit.svg" alt="" />
                <img src="./icon/delete.svg" alt="" />
              </div>
            </td>
          </tr>
          <!-- SP2 -->
          <tr>
            <td>ProCat2</td>
            <td>VÒNG TAY</td>
            <td><img src="./img/item-1.png" alt="" /></td>
            <td>
              <div class="action">
                <img src="./icon/edit.svg" alt="" />
                <img src="./icon/delete.svg" alt="" />
              </div>
            </td>
          </tr>
          <!-- SP3 -->
          <tr>
            <td>ProCat3</td>
            <td>DÂY CHUYỀN</td>
            <td><img src="./img/item-1.png" alt="" /></td>
            <td>
              <div class="action">
                <img src="./icon/edit.svg" alt="" />
                <img src="./icon/delete.svg" alt="" />
              </div>
            </td>
          </tr>
          <!-- SP4 -->
          <tr>
            <td>ProCat4</td>
            <td>BÔNG TAI</td>
            <td><img src="./img/item-1.png" alt="" /></td>
            <td>
              <div class="action">
                <img src="./icon/edit.svg" alt="" />
                <img src="./icon/delete.svg" alt="" />
              </div>
            </td>
          </tr>
        </tbody>
      </table>

      <!-- List -->
      <div class="cate-admin__pagination">
        <div class="pagination--container">
          <!-- --------- Mũi tên "<<" ------------>
          <button class="pagination--container__button" id="pagination_startBtn" disabled>
            <i class="fa-solid fa-angles-left"></i>
          </button>
          <!-- --------- Mũi tên "<" ------------>
          <button class="pagination--container__button prevNext" id="pagination_prev" disabled>
            <i class="fa-solid fa-angle-left"></i>
          </button>
          <!-- ---------Các số trang------------>
          <div class="cate-admin__pagination--numbers">
            <a href="#" class="link active">1</a>
            <a href="#" class="link">2</a>
            <a href="#" class="link">3</a>
            <a href="#" class="link">4</a>
            <!-- <a href="#" class="link">5</a> -->
          </div>
          <!-- --------- Mũi tên ">" ------------>
          <button class="pagination--container__button prevNext" id="pagination_next">
            <i class="fa-solid fa-angle-right"></i>
          </button>
          <!-- --------- Mũi tên ">>" ------------>
          <button class="pagination--container__button" id="pagination_endBtn">
            <i class="fa-solid fa-angles-right"></i>
          </button>
        </div>
      </div>
    </div>
  </section>
</body>

</html>