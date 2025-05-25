<header class="main-header">
  <div class="header-container">
    <div class="logo">
      <img src="../assets/images/logo.png" alt="XShop Logo">
    </div>

    <div class="nav">
      <ul class="nav-links">
        <li class="menu-item">
          <a href="#">NIKE</a>
          <ul class="submenu">
            <li><a href="#">Air Force 1</a></li>
            <li><a href="#">Nike Jordan</a></li>
            <li><a href="#">Nike SB Force 58</a></li>
            <li><a href="#">Nike Dunk</a></li>
            <li><a href="#">M2K</a></li>
            <li><a href="#">Nike Fashion</a></li>
            <li><a href="#">ONLINE GIÁ SỐC</a></li>
          </ul>
        </li>

        <li class="menu-item">
          <a href="#">ADIDAS</a>
          <ul class="submenu">
            <li><a href="#">Alpha Bounce</a></li>
            <li><a href="#">Centennial 85</a></li>
            <li><a href="#">Forum</a></li>
            <li><a href="#">Samba + Campus</a></li>
            <li><a href="#">Yeezy Boost</a></li>
            <li><a href="#">Adidas Fashion</a></li>
          </ul>
        </li>

        <li class="menu-item menu_hangkhac">
          <a href="#">HÃNG KHÁC</a>
          <ul class="submenu">
            <li><a href="#">Converse</a></li>
            <li><a href="#">Vans</a></li>
            <li><a href="#">MLB</a></li>
            <li><a href="#">NewBalance</a></li>
            <li><a href="#">Balenciaga</a></li>
            <li><a href="#">Dép</a></li>
          </ul>
        </li>
        <li class="menu_thanhly"><a href="#">THANH LÝ</a></li>
        <li><a href="#" class="flash-sale">FLASH⚡SALE</a></li>
      </ul>
    </div>

    <div class="nav-icons">
      <form action="#" method="GET" class="search-form">
        <div class="search-container">
          <input type="text" name="search" placeholder="Tìm kiếm sản phẩm" required>
          <button type="submit" class="search-btn">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </div>
      </form>
      <a href="#" class="nav-icon"><i class="fa-solid fa-cart-shopping fa-2x"></i></a>
      <a href="../views/my_orders.php" class="nav-icon"><i class="fa-solid fa-bag-shopping fa-2x"></i></a>
    </div>
  </div>
</header>

<style>
.main-header {
  background: #fff;
  padding: 0;
  border-bottom: 1px solid #e0e0e0;
}

.header-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  max-width: 750px;
  width: 100%;
  padding: 4px 4px;
}

.logo {
  flex: 0 0 auto;
  margin-right: 18px;
}

.logo img {
  height: 44px;
  display: block;
}

.nav {
  flex: 1 1 0%;
  display: flex;
  justify-content: center;
}

.nav-links {
  display: flex;
  gap: 12px;
  align-items: center;
  list-style: none;
  margin: 0;
  padding: 0;
}

.nav-links li {
  font-weight: bold;
  font-size: 1rem;
  text-align: center;
  white-space: nowrap;
}

.nav-icons {
  flex: 0 0 auto;
  display: flex;
  align-items: center;
  gap: 18px;
}

.search-form {
  margin-right: 0;
}

.search-container {
  position: relative;
  display: flex;
  align-items: center;
}

.search-form input[type="text"] {
  padding: 8px 15px;
  border: 2px solid #e0e0e0;
  border-radius: 20px;
  width: 240px;
  font-size: 15px;
  transition: all 0.3s ease;
  outline: none;
  background: #fafafa;
}

.search-form input[type="text"]:focus {
  border-color: #333;
  box-shadow: 0 0 5px rgba(0,0,0,0.1);
}

.search-btn {
  position: absolute;
  right: 8px;
  background: none;
  border: none;
  padding: 6px;
  cursor: pointer;
  color: #666;
  transition: color 0.3s ease;
}

.search-btn:hover {
  color: #333;
}

.nav-icon {
  color: #111;
  transition: color 0.3s ease;
}

.nav-icon:hover {
  color: #666;
}

@media (max-width: 1100px) {
  .header-container {
    flex-direction: column;
    gap: 10px;
    padding: 10px 10px;
  }
  .nav {
    width: 100%;
    justify-content: center;
  }
  .nav-links {
    gap: 30px;
  }
  .search-form input[type="text"] {
    width: 150px;
  }
}

.submenu {
  position: absolute;
  left: 0;
  top: 100%;
  background: #fff;
  min-width: 180px;
  max-width: 250px;
  box-shadow: 0 4px 16px rgba(0,0,0,0.08);
  border-radius: 8px;
  padding: 10px 0;
  z-index: 100;
  display: none;
}

.menu-item:hover .submenu {
  display: block;
}

.submenu li {
  font-size: 1rem;
  font-weight: 500;
  padding: 8px 22px;
  white-space: nowrap;
  transition: background 0.2s;
  text-align: left;
}

.submenu li a {
  color: #222;
  text-decoration: none;
  display: block;
}

.submenu li:hover {
  background: #f5f5f5;
}

.menu_hangkhac,
.menu_thanhly {
  min-width: 90px;
}
</style>
