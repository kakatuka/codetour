<style type="text/css" media="screen">
    h2.b_title {
    background: #003867;
    color: #fff;
    padding: 10px 15px;
    font-size: 18px;
}
</style>
<div class="container Breadcrumbs">
    <ol vocab="" typeof="BreadcrumbList">
        <li property="itemListElement" typeof="ListItem">
            <a property="item" typeof="WebPage" href="<?php base_url();?>"><span property="name">Du lịch</span></a>
            <meta property="position" content="1" />
        </li>
        ›<li property="itemListElement" typeof="ListItem">
            <a property="item" typeof="WebPage" href="<?php echo $this->date['name_cate'][0]['href']?>"><span property="name"><?php echo $this->date['name_cate'][0]['name']?></span></a>
            <meta itemprop="position" content="1" />
        </li>›<li property="itemListElement" typeof="ListItem">
            <a property="item" typeof="WebPage" href="#" ><span property="name"><?php echo $this->data['data_product']['name'] ?></span></a>
            <meta itemprop="position" content="2" />
        </li>
    </ol>
</div>
<div class="container body-content">
    <div class="col-md-9 col-sm-9 col-xs-12 left-col">
        <div class="tour-entry">
            <div class="page-title" id="page-title">
                <h1><?php echo $this->data['data_product']['name'] ?></h1><span class="cbg"></span>
            </div>
            <div class="content_listour" id="content_listour">
                <div class="sharebtn">
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 col-content-tour">
                <div id="maincontent" class="container clearfix" style="position: relative; padding-left: 0px; padding-right: 0px;">
                    <div class="col-md-3 col-sm-12 tour-left">
                        <div id="sidebar" class="" style="">
                            <div class="sidebar__inner" style="position: relative;">
                                <div class="tour-price">
                                    <span>Giá: </span><span class='pricetext_dis'><?php echo number_format($this->data['data_product']['price'] )?> đ</span>
                                    <span class="pricetext"><?php echo number_format($this->data['data_product']['price_market'] )?> đ</span>
                                </div>
                                <div class="trip-info">
                                    <table cellspacing="0" cellpadding="0" border="0" class="table table-striped">
                                        <tr>
                                            <td>Khởi hành: </td>
                                            <td><?php echo date('d/m/Y',strtotime($this->data['data_product']['start_date'])) ?> </td>
                                        </tr>
                                        <tr>
                                            <td>Ngày về:</td>
                                            <td>
                                               <?php echo date('d/m/Y',strtotime($this->data['data_product']['end_date']))?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Thời gian:</td>
                                            <td><?php echo $this->data['data_product']['day'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Khởi hành từ:</td>
                                            <td>
                                               <?php echo $this->data['data_product']['tour_start'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Phương tiện:</td>
                                            <td>
                                                <span class="depdate  pt_oto"><?php echo $this->data['data_product']['tour_car'] ?></span> 
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="tour-support">
                                    <span class="hotlinetext">HOTLINE TƯ VẤN & ĐẶT TOUR</span>
                                    <a href='tel:<?php echo $_web['settings']['hotline']?>'>
                                        <span class="glyphicon glyphicon-phone" aria-hidden="true">
                                        </span><?php echo $_web['settings']['hotline']?><span> Ms. Thúy Duy </span>
                                     </a>
                                     <a href='tel:<?php echo $_web['settings']['phone_hn'] ?>'>
                                        <span class="glyphicon glyphicon-phone" aria-hidden="true">
                                        </span><?php echo $_web['settings']['phone_hn'] ?><span> Ms.Thanh Nhàn</span></a>
                                </div>
                                <div class="book-tour">
                                  <!--   <span>(Số chỗ còn nhận 3)</span> -->
                                    <a href="javascript:void(0)" class="btn booktour" style="background:red;">Đặt tour</a>
                                </div>
                                <div class="tourinfotab">
                                    <ul class="nav nav-tabs">
                                        <li  class="li_1 active"><a data-toggle="tab" href="#menu0" class="showtab">Lịch trình tour</a></li>
                                        <li  class="li_2 "><a data-toggle="tab" href="#menu1" class="showtab">Giá & bao gồm</a></li>
                                        <li  class="li_3 "><a data-toggle="tab" href="#menu2" class="showtab">Điều khoản</a></li>
                                        <li  class="li_4 "><a data-toggle="tab" href="#menu3" class="showtab">Liên hệ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="content-tour" class="col-md-9 col-sm-12 tour-right content-tour">
                        <!--slider-->
                        <!-- #endregion Slider End -->
                        <!--TOUR INFO-->
                        <div id="detailtabs" class="tour-content">
                            <div class="tour-detail">
                                <div class="tab-content">
                                    <div id="menu0" class="tab-pane fade in active">
                                        <div class="tab-cap">
                                            <span>Lịch trình tour</span>
                                        </div>
                                        <div class="tour-schedule">
                                            <div class="schedule-cap">
                                                <?php echo html_entity_decode($this->data['data_product']['full_info']);?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <div class="tab-cap">
                                            <span>Giá &amp; bao gồm</span>
                                        </div>
                                        <div style="display: inline-block; width: 100%; padding-left: 15px;">
                                             <?php echo html_entity_decode($this->data['data_product']['dichvu']);?>
                                        </div>
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                        <div class="tab-cap">
                                            <span>ĐIỀU KHOẢN</span>
                                        </div>
                                        <div style="display: inline-block; width: 100%; padding-left: 15px; padding-right: 15px;">
                                            <div class="table-info">
                                                 <?php echo html_entity_decode($this->data['data_product']['dieukhoan']);?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu3" class="tab-pane fade">
                                        <div class="tab-cap" style="padding-bottom: 15px;">
                                            <span>LIÊN HỆ</span>
                                        </div>
                                        <div style="display: inline-block; width: 100%; padding-left: 15px; padding-right: 15px;">
                                            <?php echo html_entity_decode($_web['settings']['conten']);?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-title" id="page-title" style="margin-top: 15px;">
                    <h1>Tour liên quan</h1><span class="cbg"></span>
                </div>
                <div id="exTab2" class="tabslienquan">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#1" data-toggle="tab">Theo tuyến điểm</a>
                        </li>
                        <!-- <li>
                            <a href="#2" data-toggle="tab">Ngày khởi hành</a>
                        </li>
                        <li>
                            <a href="#3" data-toggle="tab">Giá tour</a>
                        </li> -->
                    </ul>
                    <div class="tab-content ">
                        <div class="tab-pane active" id="1">
                            <?php 
                                if (!empty($this->data['product_lien_quan'])) {
                                   foreach ($this->data['product_lien_quan'] as $key => $value) {
                                    ?>
                                    <div class="col-xs-12 col-sm-6 col-md-6 tour-item-fix">
                                        <div class="tour-imgdiv">
                                            <a href="<?php echo base_url() .  $value['alias'] . "-" .  $value['id'] . ".htm"; ?>" title="<?php echo $value['name'] ?>">
                                                <img src="<?php echo getImage($value['image'],160,130,1);?>" alt="<?php echo $value['name'] ?>" />
                                            </a>
                                            <a href="" title="ĐẶT TOUR" class="btn-booknow">Đặt tour</a>
                                        </div>
                                        <div class="tour-cont">
                                            <a href="<?php echo base_url() .  $value['alias'] . "-" .  $value['id'] . ".htm"; ?>" class="tour-tit">
                                                <?php 
                                                  $diemden = json_decode($value['tour_end'] ,true);
                                                    if (!empty($diemden)) {
                                                      foreach ($diemden as $key => $value1) {
                                                        echo $value1.' <span class="line-br"> - </span>';
                                                      }
                                                    }
                                                ?> 
                                            </a>
                                            <div class="schedule">
                                                <span>Khởi hành: <?php echo date('d/m/Y',strtotime( $value['start_date'])) ?>  </span>
                                                <span class="depdate pt_oto"><?php echo $value['start_day'] ?></span>
                                                <span class="days"><?php echo $value['day'] ?><span>
                                            </div>
                                            <div class="tour-price">
                                                <span class="prtext">Giá: <span class='oldprice'><?php echo number_format($value['price'] )?> đ</span></span>
                                                <span class='prdis'><span></span><span>-100,000 đ</span></span>
                                            </div>
                                            <div class='payoline'><span>Thanh toán online chỉ: </span><span><?php echo number_format($value['price_market'] )?> đ</span></div>
                                        </div>
                                    </div>
                                <?php
                               }
                            }
                          ?>
                        </div>
                        <div class="tab-pane" id="2">         
                           
                        </div>
                        <div class="tab-pane" id="3">
                        </div>
                        <div class="tab-pane" id="3">

                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                var a = new StickySidebar('#sidebar', {
                    topSpacing: 90,
                    bottomSpacing: 90,
                    containerSelector: '#maincontent',
                    innerWrapperSelector: '.sidebar__inner',
                    resizeSensor: true,
                    stickyClass: 'is-affixed',
                });
                </script>
            </div>
        </div>
        <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "Review",
            "itemReviewed": {
                "@type": "Thing",
                "name": ""
            },
            "author": {
                "@type": "Person",
                "name": " đánh giá"
            },
            "reviewRating": {
                "@type": "Rating",
                "ratingValue": ,
                "bestRating": 5
            },
            "publisher": {
                "@type": "Organization",
                "name": "du lịch Fiditour"
            }
        }
        </script>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-12 right-col">
        <div class="right-menu">
            <div class="flat-menutitle">
                <span><?php echo $this->date['name_cate'][0]['name']?></span>
            </div>
            <ul class="flat-menus">
                <?php
                    if ($this->data['listNamecate']) {
                        foreach ($this->data['listNamecate'] as $key => $value) {
                            ?>
                             <li class="singleli">
                                <a href="<?php echo $value['link']?>" class="" target="" rel=""><span class="triangle-left"></span><?php echo $value['title']?></a>
                            </li>
                            <?php
                        }
                    }
                  ?>
            </ul>
        </div>
    </div>
</div>
<script >
    $(document).ready(function(){
        $('.booktour').click(function(){
          $('#myModal').modal('show');
        });
        $('.li_1').click(function(){
            $('#menu0').addClass('active in');
            $('#menu1').removeClass('active');
            $('#menu2').removeClass('active');
            $('#menu3').removeClass('active');
        });
    
        $('.li_2').click(function(){
            $('#menu1').addClass('active in');
            $('#menu0').removeClass('active');
            $('#tmenu2').removeClass('active');
            $('#tmenu3').removeClass('active');
        });
        $('.li_3').click(function(){
            $('#menu2').addClass('active in');
            $('#menu0').removeClass('active');
            $('#menu1').removeClass('active');
            $('#menu3').removeClass('active');
        });
        $('.li_4').click(function(){
            $('#menu3').addClass('active in');
            $('#menu0').removeClass('active');
            $('#menu1').removeClass('active');
            $('#menu2').removeClass('active');
        });
    });
</script>
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="text-align: center;">ĐẶT TOUR</h4>
          <button type="button" class="close" data-dismiss="modal" style=" margin-top: -30px;width: 30px; height: 30px;  background: #105096;border-radius: 50%;  color: #fff;">&times;</button>
        </div>
        <div class="modal-body">
        <form action="" method="POST">
            <?php
                if ($this->data['data_product']['price_market']>0) {
                    $price = number_format($this->data['data_product']['price_market']);
                }else{
                    $price = number_format($this->data['data_product']['price']);
                }
            ?>
            <input type="hidden" name="title"     value="<?php echo $this->data['data_product']['name'] ?>">
            <input type="hidden" name="price"     value=" <?php echo $price ?>">
            <input type="hidden" name="dateStart" value="<?php echo date('d/m/Y',strtotime($this->data['data_product']['start_date'])) ?> ">
            <input type="hidden" name="dateline"  value="<?php echo $this->data['data_product']['day'] ?>">
            <input type="hidden" name="start"     value="<?php echo $this->data['data_product']['tour_start'] ?>">
            <h2 class="b_title">THÔNG TIN LIÊN HỆ</h2>
              <div class="form-group">
                <label for="exampleInputEmail1">Họ và tên <span style="color:red">*</span></label>
                <input type="text" name="name" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Số điện thoại <span style="color:red">*</span></label>
                <input type="number" name="phone" class="form-control" required>
              </div>
               <div class="form-group">
                <label for="exampleInputPassword1">Email <span style="color:red">*</span></label>
                <input type="email" name="email" class="form-control" required>
              </div>
               <div class="form-group">
                <label for="exampleInputPassword1">Địa chỉ <span style="color:red">*</span></label>
                <input type="text" name="address" class="form-control" required>
              </div>
              <h2 class="b_title">SỐ LƯỢNG NGƯỜI ĐI TOUR</h2>
              <div class="form-group">
                <label for="exampleInputPassword1">Người lớn <span style="color:red">*</span></label>
                <input type="number" name="ngLon" min="1" class="form-control" required value="1">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Trẻ em</label>
                <input type="number" name="tBe" min="0" class="form-control" value="0">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Trẻ nhỏ</label>
                <input type="number" name="tNho" class="form-control" min="0" value="0">
              </div>
              <button type="submit" class="btn btn-danger">Submit</button>
        </form>
        </div>
      </div>
    </div>
  </div>