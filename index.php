<!DOCTYPE html>
<?php session_start();

$searchName=$_GET["name"];


?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>食在安心校園失物招領系統</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- gLightbox gallery-->
    <link rel="stylesheet" href="vendor/glightbox/css/glightbox.min.css">
    <!-- Range slider-->
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="vendor/swiper/swiper-bundle.min.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
  </head>
  <body>
    <div class="page-holder">
      <!-- navbar-->
      <header class="header bg-white">
        <div class="container px-lg-3">
          <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.html"><h3 class="fw-bold text-uppercase text-dark">食在安心校園遺失物管理系統</h3></a>
            <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto">
                <!-- <li class="nav-item">
                  <a class="nav-link" href="index.html">Home</a>-->
               <!-- </li> -->
               <?php if($_SESSION["level"]=='0'){ ?>                       
                <li class="nav-item">
                  <!-- Link--><a class="nav-link active" href="index.php">拾獲貼文</a>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">尋物啟示清單</a>
                  <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown"><a class="dropdown-item border-0 transition-link" href="index.html">Homepage</a><a class="dropdown-item border-0 transition-link" href="shop.html">Category</a><a class="dropdown-item border-0 transition-link" href="detail.html">Product detail</a><a class="dropdown-item border-0 transition-link" href="cart.html">Shopping cart</a><a class="dropdown-item border-0 transition-link" href="checkout.html">Checkout</a></div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">發布貼文</a>
                  <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown"><a class="dropdown-item border-0 transition-link" href="index.html">Homepage</a><a class="dropdown-item border-0 transition-link" href="shop.html">Category</a><a class="dropdown-item border-0 transition-link" href="detail.html">Product detail</a><a class="dropdown-item border-0 transition-link" href="cart.html">Shopping cart</a><a class="dropdown-item border-0 transition-link" href="checkout.html">Checkout</a></div>
                </li>
              </ul>
              <ul class="navbar-nav ms-auto">               
                <li class="nav-item"><a class="nav-link" href="login/logout.php"> <i class="fas fa-user me-1 text-gray fw-normal"></i><?php  echo $_SESSION["name"];?> , 登出</a></li>
                <?php }else if($_SESSION["level"]=='1'){ ?>
                  <li class="nav-item">
                  <!-- Link--><a class="nav-link active" href="index.php">拾獲物管理</a>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">尋物啟示管理</a>
                  <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown"><a class="dropdown-item border-0 transition-link" href="index.html">Homepage</a><a class="dropdown-item border-0 transition-link" href="shop.html">Category</a><a class="dropdown-item border-0 transition-link" href="detail.html">Product detail</a><a class="dropdown-item border-0 transition-link" href="cart.html">Shopping cart</a><a class="dropdown-item border-0 transition-link" href="checkout.html">Checkout</a></div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">貼文審核</a>
                  <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown"><a class="dropdown-item border-0 transition-link" href="index.html">Homepage</a><a class="dropdown-item border-0 transition-link" href="shop.html">Category</a><a class="dropdown-item border-0 transition-link" href="detail.html">Product detail</a><a class="dropdown-item border-0 transition-link" href="cart.html">Shopping cart</a><a class="dropdown-item border-0 transition-link" href="checkout.html">Checkout</a></div>
                </li>
              </ul>
              <ul class="navbar-nav ms-auto">               
                <li class="nav-item"><a class="nav-link" href="login/logout.php"> <i class="fas fa-user me-1 text-gray fw-normal"></i><?php  echo $_SESSION["name"];?> , 登出</a></li>
                <?php }else{?>

                  <li class="nav-item">
                  <!-- Link--><a class="nav-link active" href="index.php">拾獲貼文</a>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">尋物啟示清單</a>
                  <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown"><a class="dropdown-item border-0 transition-link" href="index.html">Homepage</a><a class="dropdown-item border-0 transition-link" href="shop.html">Category</a><a class="dropdown-item border-0 transition-link" href="detail.html">Product detail</a><a class="dropdown-item border-0 transition-link" href="cart.html">Shopping cart</a><a class="dropdown-item border-0 transition-link" href="checkout.html">Checkout</a></div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">發布貼文</a>
                  <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown"><a class="dropdown-item border-0 transition-link" href="index.html">Homepage</a><a class="dropdown-item border-0 transition-link" href="shop.html">Category</a><a class="dropdown-item border-0 transition-link" href="detail.html">Product detail</a><a class="dropdown-item border-0 transition-link" href="cart.html">Shopping cart</a><a class="dropdown-item border-0 transition-link" href="checkout.html">Checkout</a></div>
                </li>
              </ul>
              <ul class="navbar-nav ms-auto">               
               
                <li class="nav-item"><a class="nav-link" href="login/login.php"> <i class="fas fa-user me-1 text-gray fw-normal"></i>登入</a></li>
              <?php }?>
              </ul>
            </div>
          </nav>
        </div>
      </header>
      
      <div class="container">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">遺失物清單</h1>
              </div>
              <div class="col-lg-6 text-lg-end">
                <nav aria-label="breadcrumb">
                  <!-- <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                    <li class="breadcrumb-item"><a class="text-dark" href="index.html">遺失物系統</a></li>
                    <li class="breadcrumb-item active" aria-current="page">遺失物系統</li>
                  </ol> -->
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="py-5">
          <div class="container p-0">
            <div class="row">
              <!-- SHOP SIDEBAR-->
              <div class="col-lg-3 order-2 order-lg-1">
                <h5 class="text-uppercase mb-4">類別</h5>
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase fw-bold">衣物</strong></div>
                <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                  <li class="mb-2" class="nav-item dropdown"><a class="reset-anchor" href="#!">外套</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="index.php?name=上衣">上衣</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="index.php?name=褲子">褲子</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="index.php?name=襪子">襪子</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="index.php?name=鞋子">鞋子</a></li>
                </ul>
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase fw-bold">配件</strong></div>
                <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                  <li class="mb-2"><a class="reset-anchor" href="index.php?name=帽子">帽子</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="index.php?name=眼鏡">眼鏡</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="index.php?name=飾品">飾品</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="index.php?name=手錶">手錶</a></li>
                 
                </ul>
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase fw-bold">證件</strong></div>
                <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal mb-5">
                  <li class="mb-2"><a class="reset-anchor" href="index.php?name=學生證">學生證</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="index.php?name=身份證">身份證</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="index.php?name=駕照">駕照</a></li>
                </ul>
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase fw-bold">3C產品</strong></div>
                <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal mb-5">
                  <li class="mb-2"><a class="reset-anchor" href="index.php?name=手機">手機</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="index.php?name=耳機">耳機</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="index.php?name=電腦">電腦</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="index.php?name=平板">平板</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="index.php?name=滑鼠">滑鼠</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="index.php?name=音響">音響</a></li>
                </ul>
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase fw-bold">包包</strong></div>
                <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal mb-5">
                  <li class="mb-2"><a class="reset-anchor" href="index.php?name=肩包">肩包</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="index.php?name=腰包">腰包</a></li>
                </ul>
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase fw-bold">隨身物品</strong></div>
                <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal mb-5">
                  <li class="mb-2"><a class="reset-anchor" href="index.php?name=錢包">錢包</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="index.php?name=雨傘">雨傘</a></li>
                </ul>
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase fw-bold">文教用品</strong></div>
                <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal mb-5">
                  <li class="mb-2"><a class="reset-anchor" href="index.php?name=鉛筆盒">鉛筆盒</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="index.php?name=文具">文具</a></li>
                </ul>
                




                <h6 class="text-uppercase mb-4">Price range</h6>
                <div class="price-range pt-4 mb-5">
                  <div id="range"></div>
                  <div class="row pt-2">
                    <div class="col-6"><strong class="small fw-bold text-uppercase">From</strong></div>
                    <div class="col-6 text-end"><strong class="small fw-bold text-uppercase">To</strong></div>
                  </div>
                </div>
                <h6 class="text-uppercase mb-3">Show only</h6>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="checkbox" id="checkbox_1">
                  <label class="form-check-label" for="checkbox_1">Returns Accepted</label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="checkbox" id="checkbox_2">
                  <label class="form-check-label" for="checkbox_2">Returns Accepted</label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="checkbox" id="checkbox_3">
                  <label class="form-check-label" for="checkbox_3">Completed Items</label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="checkbox" id="checkbox_4">
                  <label class="form-check-label" for="checkbox_4">Sold Items</label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="checkbox" id="checkbox_5">
                  <label class="form-check-label" for="checkbox_5">Deals &amp; Savings</label>
                </div>
                <div class="form-check mb-4">
                  <input class="form-check-input" type="checkbox" id="checkbox_6">
                  <label class="form-check-label" for="checkbox_6">Authorized Seller</label>
                </div>
                <h6 class="text-uppercase mb-3">Buying format</h6>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="radio" name="customRadio" id="radio_1">
                  <label class="form-check-label" for="radio_1">All Listings</label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="radio" name="customRadio" id="radio_2">
                  <label class="form-check-label" for="radio_2">Best Offer</label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="radio" name="customRadio" id="radio_3">
                  <label class="form-check-label" for="radio_3">Auction</label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="radio" name="customRadio" id="radio_4">
                  <label class="form-check-label" for="radio_4">Buy It Now</label>
                </div>
              </div>
              <?php
              $searchtxt = $_GET["searchtxt"];
              ?>
              <!-- SHOP LISTING-->
              <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="row mb-3 align-items-center">
                  <div class="col-lg-6 mb-2 mb-lg-0">
                    <!--<p class="text-sm text-muted mb-0">Showing 1–12 of 53 results</p>-->
                  </div>
                  <div class="col-lg-6">
                    <ul class="list-inline d-flex align-items-center justify-content-lg-end mb-0">
                      <li class="list-inline-item">
                          <form action="index.php" method=get>
                          <div class="input-group">
                          <input type=hidden name="method" value="query">
                          <input class="form-control form-control-lg" aria-describedby="button-addon2" type=text name="searchtxt" value=<?php echo $searchtxt ?>>
                          <button class="btn btn-dark" id="button-addon2" type="submit" value="搜尋">搜尋</button>
                          </div>
                          </form>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- PRODUCT-->
                  <!--  Modal -->
                  
                 
                <?php
	              //$link=mysql_connect("localhost","root","12345678");
	              $link=mysqli_connect("localhost","root","12345678","sa");
	              // 佛心 for mac - 使用以下兩個步驟
	              // $link=mysqli_connect("localhost","root");
	              // mysqli_select_db($link, "temp");
                if(isset($searchName)){
                $sql="select * from item where item_label like '%$searchName%'";
                }
	              else if(empty($searchtxt))
	              {
	              $sql="select * from item";
		            }
	              else
	              {
		            $sql="select * from item where item_name like '%$searchtxt%' or item_place like '%$searchtxt%' or item_text like '%$searchtxt%' or item_time like '%$searchtxt%' ";
		            }
                $all="select * from item";
                $all_rs=mysqli_query($link,$all);
                $rs=mysqli_query($link,$sql);
	              //$rs=mysql_query($sql,$link);

	              ?>
                <div class="row">
                  <!-- PRODUCT-->
                  <?php
                    while($record=mysqli_fetch_row($rs))
                    {
                      $name=$record[1];
                      $text=$record[2];
                      $time=$record[3];
                      $place=$record[4];
                      $label=$record[5];
                      $img=$record[6];
                      $confirm = $record[7];
                      ?>
                      <div class="modal fade" id="<?php echo $name?>" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content overflow-hidden border-0">
            <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
                <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" style="background: url(<?php echo $img?>)" href="<?php echo $img?>" data-gallery="gallery1" data-glightbox="<?php echo $name?>"></a></div>
                <div class="col-lg-6">
                  <div class="p-4 my-md-4">
                    
                    <h2 class="h4"><?php echo $name?></h2>
                    <p class="text-muted"><?php echo $text?></p>
                    <p class="text-mb mb-4">遺失時間：<?php echo $time?></p>
                    <div class="row align-items-stretch mb-4 gx-0">
                      <div class="col-sm-7">
                      <p class="text-mb mb-4">遺失地點：<?php echo $place?></p>
                      <p class="text-mb mb-4">標籤：<?php echo $label?></p>
                      </div>
                    </div><a class="btn btn-sm btn-outline-dark" href="cart.html">認領</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><?php ?>

                    <div class='col-lg-4 col-sm-6'>
                    <div class='product text-center'>
                      <div class='mb-3 position-relative'>
                        <div class='badge text-white bg-primary'><?php if($confirm==0){ echo "未認證"; } ?></div><a class='d-block' href='#'><img class='img-fluid w-100' src="<?php echo $img ?>" alt='...'></a>
                        <div class='product-overlay'>
                          <ul class='mb-0 list-inline'>
                    
                            <li class='list-inline-item m-0 p-0'><a class='btn btn-sm btn-outline-dark' href='cart.html'>認領</a></li>
                            <li class='list-inline-item mr-0'><a class='btn btn-sm btn-outline-dark' href="#<?php echo $name?>" data-bs-toggle='modal'><i class='fas fa-expand'></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <h6> <a class='reset-anchor' href='detail.html'><?php echo $name?></a></h6>
                    </div>
                  </div>
                  <?php
                    }
                  ?>
                </div>
                <!-- PAGINATION-->
                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center justify-content-lg-end">
                    <li class="page-item mx-1"><a class="page-link" href="#!" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <li class="page-item mx-1 active"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item mx-1"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item mx-1"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item ms-1"><a class="page-link" href="#!" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="bg-dark text-white">
        <div class="container py-4">
          <div class="row py-5">
            <div class="col-md-4 mb-3 mb-md-0">
              <h6 class="text-uppercase mb-3">Customer services</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="#!">Help &amp; Contact Us</a></li>
                <li><a class="footer-link" href="#!">Returns &amp; Refunds</a></li>
                <li><a class="footer-link" href="#!">Online Stores</a></li>
                <li><a class="footer-link" href="#!">Terms &amp; Conditions</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
              <h6 class="text-uppercase mb-3">Company</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="#!">What We Do</a></li>
                <li><a class="footer-link" href="#!">Available Services</a></li>
                <li><a class="footer-link" href="#!">Latest Posts</a></li>
                <li><a class="footer-link" href="#!">FAQs</a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <h6 class="text-uppercase mb-3">Social media</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="#!">Twitter</a></li>
                <li><a class="footer-link" href="#!">Instagram</a></li>
                <li><a class="footer-link" href="#!">Tumblr</a></li>
                <li><a class="footer-link" href="#!">Pinterest</a></li>
              </ul>
            </div>
          </div>
          <div class="border-top pt-4" style="border-color: #1d1d1d !important">
            <div class="row">
              <div class="col-md-6 text-center text-md-start">
                <p class="small text-muted mb-0">&copy; 2021 All rights reserved.</p>
              </div>
              <div class="col-md-6 text-center text-md-end">
                <p class="small text-muted mb-0">Template designed by <a class="text-white reset-anchor" href="https://bootstrapious.com/p/boutique-bootstrap-e-commerce-template">Bootstrapious</a></p>
                <!-- If you want to remove the backlink, please purchase the Attribution-Free License. See details in readme.txt or license.txt. Thanks!-->
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- JavaScript files-->
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="vendor/glightbox/js/glightbox.min.js"></script>
      <script src="vendor/nouislider/nouislider.min.js"></script>
      <script src="vendor/swiper/swiper-bundle.min.js"></script>
      <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
      <script src="js/front.js"></script>
      <!-- Nouislider Config-->
      <script>
        var range = document.getElementById('range');
        noUiSlider.create(range, {
            range: {
                'min': 0,
                'max': 2000
            },
            step: 5,
            start: [100, 1000],
            margin: 300,
            connect: true,
            direction: 'ltr',
            orientation: 'horizontal',
            behaviour: 'tap-drag',
            tooltips: true,
            format: {
              to: function ( value ) {
                return '$' + value;
              },
              from: function ( value ) {
                return value.replace('', '');
              }
            }
        });
        
      </script>
      <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite - 
        //   see more here 
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {
        
            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function(e) {
            var div = document.createElement("div");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot 
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
        
      </script>
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </div>
  </body>
</html>