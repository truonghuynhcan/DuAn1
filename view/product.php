<?php 
if (isset( $_GET['Id_TheLoai'])) {
  $Id_TheLoai = $_GET['Id_TheLoai'];
} 
else{$Id_TheLoai=1;};
$listsp = product_cat($Id_TheLoai);
?>
<body>
  <section class="page-name-sec page-name-sec-01">
    <div class="section-padding">
      <div class="container">
        <h3 class="page-title">DANH MỤC SẢN PHẨM THEO LOẠI </h3><!-- /.page-title -->

        <div class="row">
          <div class="col-sm-7">
            <p class="description">
             
            </p><!-- /.description -->
          </div>

          <div class="col-sm-5">
            <ol class="breadcrumb text-right">
              <li><a href="#">Home</a></li>
              <li><a href="#">Shop</a></li>
              <li class="active">3Column</li>
            </ol><!-- /.breadcrumb -->
          </div>

        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.page-name-sec -->

  <section class="shop-contents">
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-8 pull-right">

            <div class="product-filter">
              <div class="row">
                <div class="col-md-4">
                  <span class="filter-text">Hiển thị sản phẩm </span>
                </div>

                <div class="col-md-8 text-right">
                  <div class="category-select">
                    <!-- <span class="filter-title">Sort by:</span>/.filter-title -->
                    <!-- <select data-select-like-alignement="never" class="category drop-select">
                      <option value="">Name</option>
                      <option value="2">Size</option>
                      <option value="3">Color</option>
                      <option value="4">Brand</option>
                    </select> -->
                  </div><!-- /.category-select -->
                  <div class="show-item">
                    <!-- <span class="filter-title">Show:</span>/.filter-title -->
                    <!-- <select id="item-number" data-select-like-alignement="never" class="item-number drop-select">
                      <option value="">12</option>
                      <option value="2">16</option>
                      <option value="3">20</option>
                      <option value="4">24</option>
                    </select> -->
                  </div><!-- /.show-item -->

                  <div class="filter-view">
                    <!-- <span class="filter-title">View:</span>/.filter-title -->
                    <!-- <ul role="tablist">
                      <li class="grid-view active" id="grid-top"><a href="#grid" role="tab" data-toggle="tab"><i class="fa fa-th-large"></i></a></li>
                      <li id="list-top" class="list-view"><a href="#list" role="tab" data-toggle="tab"><i class="fa fa-th-list"></i></a></li>
                    </ul> -->
                  </div><!-- /.filter-view -->
                </div><!-- /.col-md-8 -->
              </div>
            </div><!-- /.product-filter -->

            <div class="shop-products">
              <div class="row">
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade active in text-center" id="grid">
                  <?php foreach ($listsp as $sp) {  ?>  
                  <div class="col-sm-4">
                      <div class="item">
                        <div class="item-thumbnail" style="width: 16.4rem; height:17.6rem; overflow: hidden;">
                          <a class="fancybox" href="images/home08/featured/1.jpg">
                            <img src="upload/sach/<?php echo layhinhSach($sp['Id']);?>" alt="" height="100%" >
                          </a>
                        </div><!-- /.item-thumbnail -->
                        
                        <div class="item-content">
                          <div class="buttons">
                            <button class="add-to-cart">Thêm vào giỏ <i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                          </div><!-- /.buttons -->
                          <h3 class="item-title">
                            <a href="index.php?pg=detail&id_sach=<?php echo $sp['Id'];?>"><?php echo $sp['TenSach'];?></a>
                          </h3><!-- /.item-title -->
                          <div class="item-price">
                            <span class="price"><?php echo number_format($sp['DonGia'],0,",",".");?> VND</span> 
                          </div><!-- /.item-price -->
                          <div class="rating">
                            <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                          </div><!-- /.rating -->

                        </div><!-- /.item-content -->
                      </div><!-- /.item -->
                    </div>
                    <?php } ?>

               

                  </div><!-- /.tab-pane -->

              
                </div><!-- /.tab-content -->
              </div><!-- /.row -->
            </div><!-- /.shop-products -->

            <div class="pagination pagination-02 text-center">
              <a href="#" class="prev"><i class="ti-angle-double-left"></i></a>
              <a href="#" class="active">1</a>
              <a href="#">2</a>
             
              <a href="#" class="next"><i class="ti-angle-double-right"></i></a>
            </div><!-- /.pagination -->
          </div>

          <div class="col-md-4">
            <aside class="sidebar right-sidebar pull-left">
              <h3 class="widget-title"> <span></span></h3>
              <div class="widget widget_search_by_categories">
                <div class="heading">
                  <h3 class="heading-title">Thể loại</h3><!-- /.heading-title -->
                  <div class="widget-details">
                    <ul class="category-menu">
                    <?php
                        $dstheloai = catelogry_get();
                        foreach ($dstheloai as $theloai): ?>
                      <li class="menu-item">
                        <a href="index.php?pg=product&Id_TheLoai=<?=$theloai['Id']?>" style="text-transform:capitalize;"><?=$theloai['TenTheLoai']?></a>
                      </li>
                      <?php endforeach;?>

                    </ul>
                  </div><!-- /.widget-details -->
                </div><!-- /.heading -->
              </div><!-- /.widget -->

            </aside><!-- /.sidebar -->
          </div>

        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.shop-contents -->

 