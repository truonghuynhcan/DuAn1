<?php
if (isset($_GET['id_sach'])) {
  $id_sach = $_GET['id_sach'];
  $sach = sach_detail($id_sach);
  $anh = anh_getAll($sach['Id']);
}
?>
<section class="shop-contents">
  <div class="section-padding">
    <div class="container">
      <div class="product-details">
        <div class="row">
          <div class="col-md-6">
            <div class="item-gallery horizontal">
              <div class="tabs">
                <div role="tabpanel" class="media">

                  <ul class="nav nav-tabs media-left" role="tablist">
                    <?php
                    // Duyệt qua mảng các đường dẫn hình ảnh và tạo các tab liên kết đến từng hình ảnh
                    for ($i = 0; $i < 3; $i++) {
                      $isActive = ($i === 0) ? 'active' : ''; // Xác định tab đầu tiên là active
                      $tabId = 'item' . ($i + 1); // Tạo id cho mỗi tab
                    
                      $src = 'upload/sach/' . $anh[$i]["DuongDan"];
                      $alt = $anh[$i]["TenAnh"];

                      echo '<li role="presentation" class="' . $isActive . '">';
                      echo '<a href="#' . $tabId . '" aria-controls="' . $tabId . '" role="tab" data-toggle="tab" aria-expanded="true">';
                      echo '<img src="' . $src . '" alt="' . $alt . '">';
                      echo '</a></li>';
                    }
                    ?>
                  </ul>
                  <div class="tab-content media-body">
                    <?php
                    // Duyệt qua mảng đường dẫn hình ảnh để hiển thị nội dung của từng tab
                    for ($i = 0; $i < 3; $i++) {
                      $isActive = ($i === 0) ? 'active' : ''; // Xác định tab đầu tiên là active
                      $tabId = 'item' . ($i + 1); // Tạo id cho mỗi tab
                    
                      $src = 'upload/sach/' . $anh[$i]["DuongDan"];
                      $alt = $anh[$i]["TenAnh"];

                      echo '<div role="tabpanel" class="tab-pane ' . $isActive . '" id="' . $tabId . '">';
                      echo '<img src="' . $src . '" alt="' . $alt . '">';
                      echo '</div>';
                    }
                    ?>
                  </div>
                </div>
              </div><!-- /.item-gallery -->
            </div>
          </div>

          <div class="col-md-6">
            <div class="about-product">
              <h3 class='item-title'>
                <?= $sach['TenSach'] ?>
              </h3>
              <div class="top-meta">
                <a href="#">
                  <?= $sach['DanhGia'] ?> Đánh Giá
                </a>
                <a href="#">Viết Đánh Giá</a>
              </div><!-- /.top-meta -->

              <div class="rating" style="width:100%">
                <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o"
                  data-fractions="5" />
              </div><!-- /.rating -->
              <br>
              <div class="col-md-6" style="font-family:Arial">
                Nhà xuất bản : <strong style="font-family:Helvetica">
                  <?= $sach['NhaXuatBan'] ?>
                </strong>
              </div>
              <div class="col-md-6" style="font-family:Arial">
                Tác giả:<strong style="font-family:Helvetica">
                <?= $sach['TacGia'] ?></strong> <br>
                Thể loại:<strong style="font-family:Helvetica">
                  <?= $sach['TheLoai'] ?>
                </strong>
              </div>

              <div class="item-price">
                <div class="current-price"><span class="currency"></span><span class="price">
                    <?= number_format($sach['DonGia'] * (1 - $sach['GiamGia'] / 100), 0, ",", ".") ?> VND
                  </span></div>
                <!-- /.current-price -->
                <div class="previous-price"><span class="currency"></span><span class="price">
                    <?= number_format($sach['DonGia'], 0, ",", ".") ?> VND
                  </span></div>
                <!-- /.previous-price -->
              </div><!-- /.item-price -->

              <p class="description">
                <?= $sach['MoTa'] ?>
              </p><!-- /.short-description -->

              <div class="buttons">
                <button class="add-to-cart"
                  onclick="addToCart(<?= $sach['Id'] ?> ,' <?= $sach['TenSach'] ?>' , <?= $sach['DonGia'] ?>, 1)">Thêm vào giỏ
                  hàng<i class="fa fa-shopping-cart"></i></button>
                <button class="wish-list"><i class="fa fa-heart"></i></button>
              </div>
            </div><!-- /.about-product -->
          </div>
        </div>
        <div class="clearfix"></div>

        <div class="product-tabs">
          <div class="tabs">
            <div role="tabpanel">

              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"
                    aria-expanded="true">Mô tả</a></li>
                <li role="presentation" class=""><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"
                    aria-expanded="false">Đánh giá (<span class="count">14</span>)</a></li>
              </ul>

              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                  <p class="description">
                    <?= $sach['MoTaChiTiet'] ?>
                  </p><!-- /.description -->
                </div><!-- /.tab-pane -->

                <div role="tabpanel" class="tab-pane fade" id="tab2">
                  <div class="review parent media">
                    <div class="author-avatar media-left">
                      <img src="images/shop/avatar/1.jpg" alt="Author Avatar">
                    </div><!-- /.author-avatar -->

                    <div class="review-top media-body">
                      <h4 class="author-name">
                        <a href="#">Anna Ward</a>
                      </h4><!-- /.author-name -->

                      <div class="meta-info">
                        <span>
                          <time datetime="2016-06-06 21:33">5 June, 2016 at 21:33 </time>
                        </span>
                        <span>
                          <a href="#" class="reply">Reply</a>
                        </span>
                      </div><!-- /.meta-info -->

                      <div class="rating">
                        <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star"
                          data-empty="fa fa-star-o" data-fractions="5" />
                      </div><!-- /.rating -->
                    </div><!-- /.review-top -->
                    <p class="description">
                      In short, I scarcely could realise it more, and in real life I should scarcely realise it so well,
                      the attention of each of us being too apt to concentrate itself upon some dynamic quality
                      Then what strength to his young men, and what gravity and power to his old! How quickly a race
                      like this would possess itself of the earth, and brook no rivals but the forces of nature!
                      Whatever they do simply because it is they is impressive and important, and every movement, every
                      gesture, is world changing
                    </p>

                    <div class="review children media">
                      <div class="author-avatar media-left">
                        <img src="images/shop/avatar/2.jpg" alt="Author Avatar">
                      </div><!-- /.author-avatar -->

                      <div class="review-top media-body">
                        <h4 class="author-name">
                          <a href="#">Melissa Ramirez</a>
                        </h4><!-- /.author-name -->

                        <div class="meta-info">
                          <span>
                            <time datetime="2016-06-06 21:33">5 June, 2016 at 21:33 </time>
                          </span>
                          <span>
                            <a href="#" class="reply">Reply</a>
                          </span>
                        </div><!-- /.meta-info -->

                        <div class="rating">
                          <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star"
                            data-empty="fa fa-star-o" data-fractions="5" />
                        </div><!-- /.rating -->
                      </div><!-- /.review-top -->
                      <p class="description">
                        Then what strength to his young men, and what gravity and power to his old! How quickly a race
                        like this would possess itself of the earth, and brook no rivals but the forces of nature!
                        Whatever they do simply because it is they is impressive and important, and every movement,
                        every gesture, is world changing
                      </p>
                    </div><!-- /.review -->
                  </div><!-- /.review -->

                  <div class="review parent media">
                    <div class="author-avatar media-left">
                      <img src="images/shop/avatar/3.jpg" alt="Author Avatar">
                    </div><!-- /.author-avatar -->

                    <div class="review-top media-body">
                      <h4 class="author-name">
                        <a href="#">Sara Beck</a>
                      </h4><!-- /.author-name -->

                      <div class="meta-info">
                        <span>
                          <time datetime="2016-06-06 21:33">5 June, 2016 at 21:33 </time>
                        </span>
                        <span>
                          <a href="#" class="reply">Reply</a>
                        </span>
                      </div><!-- /.meta-info -->

                      <div class="rating">
                        <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star"
                          data-empty="fa fa-star-o" data-fractions="5" />
                      </div><!-- /.rating -->
                    </div><!-- /.review-top -->
                    <p class="description">
                      In short, I scarcely could realise it more, and in real life I should scarcely realise it so well,
                      the attention of each of us being too apt to concentrate itself upon some dynamic quality
                      Then what strength to his young men, and what gravity and power to his old! How quickly a race
                      like this would possess itself of the earth, and brook no rivals but the forces of nature!
                      Whatever they do simply because it is they is impressive and important, and every movement, every
                      gesture, is world changing
                    </p>
                  </div><!-- /.review -->

                </div><!-- /.tab-pane -->

                <div role="tabpanel" class="tab-pane fade" id="tab3">

                </div><!-- /.tab-pane -->
              </div><!-- /.tab-content -->
            </div><!-- /.tab-panel -->
          </div><!-- /.tabs -->
        </div><!-- /.product-tabs -->
      </div><!-- /.product-details -->
    </div><!-- /.container -->
  </div><!-- /.section-padding -->
</section>

<section class="related-products text-center">
  <div class="section-padding">
    <div class="container">
      <div class="section-top text-center">
        <h2 class="section-title">NHỮNG SẢN PHẨM TƯƠNG TỰ <span></span></h2>
      </div><!-- /.section-top -->

      <div id="related-slider" class="related-slider">
        <?php
        $sanphamtuongtu = getBooksInSameCategory($sach['Id']);
        // $sanphamtuongtu = timSachCungLoai($sach['TheLoai']);
        foreach ($sanphamtuongtu as $sach): ?>
          <?php
          $anh = anh_getAll($sach['Id'])[0];
          $src = 'upload/sach/' . $anh['DuongDan'];
          $alt = $anh['TenAnh']
            ?>

          <div class="item">
            <a class="fancybox" href="<?= $src ?>">
              <div class="item-thumbnail">
                <img src="<?= $src ?>" alt="<?= $alt ?>">
                <span class="ribbon sale">Giảm giá</span>
              </div>
            </a>

            <div class="item-details">
              <h3 class="item-title"><a href="index.php?pg=detail&id_sach=<?= $sach['Id'] ?>">
                  <?= $sach['TenSach'] ?>
                </a></h3><!-- /.item-title -->
              <div class="item-price">
                <span class="currency">VND</span><!-- /.currency -->
                <span class="price">
                  <?= $sach['DonGia'] ?>
                </span><!-- /.price -->
              </div><!-- /.item-price -->

              <div class="previous-price">
                <span class="currency">VND</span><!-- /.currency -->
                <span class="price">
                  <?= $sach['DonGia'] ?>
                </span><!-- /.price -->
              </div><!-- /.previous-price -->
              <!-- <a href="#" class="btn" onclick="addToCart(<?= $sp['Id'] ?> ,' <?= $sp['TenSach'] ?>' , <?= $sp['DonGia'] ?>, 1)">Thêm vào giỏ</a>/.btn -->
              <button class="add-to-cart btn"
                onclick="addToCart(<?= $sach['Id'] ?> ,' <?= $sach['TenSach'] ?>' , <?= $sach['DonGia'] ?>, 1)">Thêm vào giỏ<i
                  class="fa fa-shopping-cart"></i></button>

            </div>
          </div>
        <?php endforeach; ?>
      </div><!-- /#related-slider -->
    </div><!-- /.container -->
  </div><!-- /.section-padding -->
</section>