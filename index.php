 <?php include 'setting.php'; ?>
 <html lang="vi">
     <head>
     <meta charset="UTF-8">
     <title><? echo $hovaten; ?> - Trang Cá Nhân</title>
     <link rel="icon" href="<? echo $anhchinh; ?>" type="image/png">
     <link href="<? echo $anhchinh; ?>" rel="icon" type="image/x-icon">
     <link href="<? echo $anhchinh; ?>" rel="icon" sizes="192x192">
     <link href="<? echo $anhchinh; ?>" rel="apple-touch-icon">
     <meta name="description" content="Liên Hệ Với Tôi Nếu Bạn Cần Tạo 1 Website Bán Hàng, Website Dịch Vụ Mạng Xã Hội, Website Bán Tài Khoản,v.v..
     Mạnh Dev Code Siêu Phẩm Và Cực Đẹp Mắt Nha">
     <meta property="og:image" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap">
     <link rel="stylesheet" href="/csschauthebao/giaodien.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
     </head>
     <body>
     <div class="container mt-3 mb-3">
     <div class="justify-content-center">
     <div class="text-center">
     <img src="<? echo $anhchinh; ?>" style="border: 0.357rem solid rgb(39, 124, 173);border-radius: 0.428rem;box-shadow: 0 4px 24px 0 rgb(34 41 47 / 10%);object-fit: cover;width: 160px;height: 160px;background: #fff;padding: 0.375rem;" class="img-raised rounded-circle img-fluid">
     <h5 class="mt-4" title="Hồ Sơ Đã Được Xác Nhận Đầy Đủ Thông Tin Tại <? echo $linkweb; ?>"><? echo $hovaten; ?> <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
     <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
     </svg></h5>
     <p>(<? echo $bietdanh; ?>)</p>
     <div class="text-center">
     <button type="submit" name="btn_tiktok" class="btn btn-outline-primary">
     <a href="<? echo $linkfb; ?>" target="_blank"> <i class="fab fa-facebook-f" aria-hidden="true"></i>
     Facebook</a></button>
     <button type="submit" name="btn_tiktok" class="btn btn-outline-primary">
     <a href="<? echo $linkzalo; ?>" target="_blank"> <i class="fas fa-phone-alt" aria-hidden="true"></i>
     Zalo</a></button>
     <button type="submit" name="btn_tiktok" class="btn btn-outline-primary">
     <a href="<? echo $linkweb; ?>" target="_blank"><i class="fas fa-globe"></i>
     Website</a></button>
     </div>
     </div>
     </div>
 
     <div class="row mt-4">
     <div class="col-md-6 mb-3">
     <div class="card shadow keyvip">
     <div class="card-header header"><h4 class="text-center">Thông Tin Liên Hệ</h4></div>
     <div class="card-body">
     <div class="table-responsive">
     <table class="table">
     <tbody>
     <tr>
     <th><i class="fab fa-facebook-f"></i> Facebook</th>
     <th>
     <a href="<? echo $linkfb; ?>" target="_blank"><? echo $linkfb; ?></a>
     </th>
     </tr>
     <tr>
     <th><i class="fas fa-phone-alt"></i> Zalo</th>
     <th>
     <a href="<? echo $linkzalo; ?>" target="_blank"><? echo $linkzalo; ?></a>
     </th>
     </tr>
     <tr>
     <th><i class="fas fa-globe"></i> Web</th>
     <th>
     <a href="#" target="_blank">***</a>
     </th>
     </tr>
     <tr>
     <th><i class="fas fa-link"></i> Link</th>
     <th>
     <a href="<? echo $linkweb; ?>" target="_blank"><? echo $linkweb; ?></a>
     </th>
     </tr>
     </tbody>
     </table>
     </div>
     </div>
     </div>
     </div>
 
     <div class="col-md-6 mb-3">
     <div class="card shadow keyvip">
     <div class="card-header header"><h4 class="text-center">Thông Tin Khác</h4></div>
     <div class="card-body">
     <div class="table-responsive">
     <table class="table">
     <tbody>
     <tr>
     <th><i class="fas fa-mars"></i> Giới Tính:</th>
     <th><span style="color:#0000EE;"><? echo $gioitinh; ?></span></th>
     </tr>
     <tr>
     <th><i class="fas fa-user-cog"></i> Ngày Sinh:</th>
     <th><span style="color:#0000EE;"><? echo $ngaysinh; ?></span></th>
     </tr>
     <tr>
     <th><i class="fas fa-user-graduate"></i> Sở Thích:</th>
     <th><span style="color:#0000EE;"></span><? echo $sothich; ?></th>
     </tr>
     <tr>
     <th><i class="fas fa-house-user"></i> Sống Tại:</th>
     <th><span style="color:#0000EE;">***</span></th>
     </tr>
     </tbody>
     </table>
     </div>
     </div>
     </div>
     </div>
     <div class="col-md-12 mb-3">
     <div class="card shadow keyvip">
     <div class="card-header header"><h4 class="text-center">Thông Tin Ngân Hàng</h4></div>
     <div class="card-body">
     <tbody>
     <ul>
     <li><strong>VIETCOMBANK</strong> <? echo $vietcombank; ?> </li>
     </ul>
     <ul>
     <li><strong>MOMO:</strong> <? echo $momo; ?> </li>
     </ul>
     <ul>
         <li><strong>Ngân Hàng Khác :</strong> <? echo $nganhangkhac; ?></li>
         </ul>
     <ul>
     <li><strong>MB BANK:</strong> <? echo $mbbank; ?></li>
     </ul>
     </div>
     </div>
     </div>
     </div>
     <style>
     li{
     padding-left:15px;
     position:relative;
     list-style-type: none
     }
     li:before{
         content:'';
         width:6px;
         height:6px;
         position:absolute;
         top:8px;
         left:0;
         background:#007674;
         border-radius:50%;
         -moz-border-radius:50%;
         -webkit-border-radius:50%;
         display:inline-block
     }
 
     .keyvip {
         border: 1px solid #007fff;
     }
     </style>
     <div class="col-md-12">
     <div class="card shadow keyvip">
     <div class="card-header header"><h4 class="text-center">Tiểu Sử</h4></div>
     <div class="card-body">
     <p>
         <? echo $tieusu; ?>
     </p>
     <p></p>
     </div>
     </div>
     </div>
     </div>
     </div>
     <script>
     function manhdz(element) {
     var $temp = $("<input>");
     $("body").append($temp);
     $temp.val($(element).text()).select();
     document.execCommand("copy");
     swal("Thành Công", "Copy Thành Công", "success");
     $temp.remove();
     
     }
     </script> 
     <footer class="text-center"><br>
         <img src="https://thaituan.us/DDT155M.png" class="mb-3">
             <div class="container-fluid">
                         <span class="mr-1">
                             © Bản Quyền Thuộc <a href="/"><? echo $tencopyright; ?> </a>
                             Đã Đăng Ký Bản Quyền.
                         </span>
             </div>
         </footer>
     </body>
     </html>