<!DOCTYPE html>
<html lang="vi">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <base href=".">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Quản trị hệ thống</title>
      <link rel="shortcut icon" href="favicon.png">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link href="css/admin.css" rel="stylesheet">
      <link href="css/introjs.min.css" rel="stylesheet">
      <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/intro.min.js"></script>
      <script type="text/javascript" src="js/admin.js"></script>
      <!--Hỗ trợ IE nhận dạng thẻ HTML5-->
      <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <nav class="navbar navbar-inverse" role="navigation">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><i class="fa fa-cogs"></i> Quản trị hệ thống</a>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sang Nguyen<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                     <li><a href="#"><i class="fa fa-user"></i> Chỉnh sửa tài khoản</a></li>
                     <li><a href="#"><i class="fa fa-power-off"></i> Đăng xuất</a></li>
                  </ul>
               </li>
            </ul>
         </div>
         <!-- /.navbar-collapse -->
      </nav>
      <div class="clearfix">
         <div id="sidebar-bg"></div>
         <div id="sidebar" role="navigation">
            <div class="panel panel-default" id="step1">
               <div class="panel-heading">
                  <h3 class="panel-title">
                     <i class="fa fa-th"></i><span> Danh mục quản lý</span>
                     <b class="fa fa-plus-sign visible-xs pull-right"></b>
                  </h3>
               </div>
               <ul id="menu" class="list-group">
                  <li class="list-group-item">
                     <a href="post.php">
                     <i class="fa fa-edit"></i> <span>Tin tức</span>
                     </a>
                  </li>
                  <li class="list-group-item">
                     <a href="product.php">
                     <i class="fa fa-fire"></i><span>Sản phẩm</span>
                     </a>
                  </li>
                  <li class="list-group-item">
                     <a href="type_product.php">
                     <i class="fa fa-bars"></i> <span>Loại sản phẩm</span>
                     </a>
                  </li>
                  <li class="list-group-item">
                     <a href="contact.php">
                     <i class="fa fa-envelope-o"></i> <span>Phản hồi<span class="badge pull-right">1</span></span>
                     </a>
                  </li>
                  <li class="list-group-item">
                     <a href="slider.php">
                     <i class="fa fa-picture-o"></i> <span>Slider</span>
                     </a>
                  </li>
                  <li class="list-group-item">
                     <a href="user.php">
                     <i class="fa fa-user"></i> <span>Tài khoản</span>
                     </a>
                  </li>
                  <li class="list-group-item">
                     <a href="setting.php">
                     <i class="fa fa-wrench"></i> <span>Cấu hình</span>
                     </a>
                  </li>
                  <li class="list-group-item">
                     <a href="javascript:void(0)" id="start-intro">
                     <i class="fa fa-question"></i> <span>Hướng dẫn</span>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <div id="main">
      <ol class="breadcrumb" id="step2">
         <li><a href="index.php"><i class="fa fa-home"></i> Trang quản trị</a></li>
         <li class="active"><a href="post.php">Bài viết</a></li>
      </ol>
      <div class="col-xs-12">
         <form id="admin-form" method="post" action="" role="form">
            <div class="col-xs-12">
               <div class="form-group">
                  <!-- Single button -->
                  <div class="btn-group" id="step3">
                     <select id="task" name="task" class="form-control">
                        <option>Tác vụ</option>
                        <option value="delete">Xóa bài viết</option>
                        <option value="deactive">Ẩn bài viết</option>
                        <option value="active">Hiện bài viết</option>
                     </select>
                  </div>
                  <a href="#" class="btn btn-submit"><small><i class="fa fa-plus"></i></small> Thêm mới</a>
                  <div class="btn-group pull-right hidden-xs" id="div-search">
                     <input id="search" name="search" type="text" value="" class="form-control" placeholder="Tìm kiếm">
                     <span class="fa fa-search"></span>
                  </div>
               </div>
               <table class="table table-bordered table-hover" id="step4">
                  <thead>
                     <tr>
                        <th><input id="check_all" type="checkbox"></th>
                        <th class="hidden-xs">ID</th>
                        <th>Bài viết</th>
                        <th class="hidden-sm hidden-xs">Ngày đăng</th>
                        <th>Sửa</th>
                        <th>Tình trạng</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>
                           <input name="id[]" type="checkbox" value="1">
                        </td>
                        <td class="hidden-xs">1</td>
                        <td>
                           <a href="new-post.php">SH4TinyMCE</a>
                        </td>
                        <td class="hidden-sm hidden-xs">2014-06-19 01:05:13</td>
                        <td>
                        <a href="new-post.php"><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Sửa bài viết"></i></a>
                        </td>
                        <td>
                           <i class="fa fa-check text-success" data-toggle="tooltip" data-placement="top" title="Đang hiển thị"></i>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <input name="id[]" type="checkbox" value="2">
                        </td>
                        <td class="hidden-xs">2</td>
                        <td>
                           <a href="new-post.php">Cuộc đời truyền kỳ của Đức Pháp Vương Gyalwang Drukpa</a>
                        </td>
                        <td class="hidden-sm hidden-xs">2014-06-19 01:05:13</td>
                        <td>
                        <a href="new-post.php"><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Sửa bài viết"></i></a>
                        </td>
                        <td>
                           <i class="fa fa-times text-danger" data-toggle="tooltip" data-placement="top" title="Đã ẩn với người dùng"></i>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <input name="id[]" type="checkbox" value="3">
                        </td>
                        <td class="hidden-xs">3</td>
                        <td>
                           <a href="new-post.php">Tìm MH370 giữa biển rác của đại dương</a>
                        </td>
                        <td class="hidden-sm hidden-xs">2014-06-19 01:05:13</td>
                        <td>
                        <a href="new-post.php"><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Sửa bài viết"></i></a>
                        </td>
                        <td>
                           <i class="fa fa-check text-success" data-toggle="tooltip" data-placement="top" title="Đang hiển thị"></i>
                        </td>
                     </tr>
                  </tbody>
               </table>
               <div class="text-right" >
                  <ul class="pagination" id="step5">
                     <li class="disabled"><span>«</span></li>
                     <li class="active"><span>1</span></li>
                     <li><a href="#">2</a></li>
                     <li><a href="#">3</a></li>
                     <li><a href="#">»</a></li>
                  </ul>
               </div>
               <div id="step6">
               <p><strong><i class="fa fa-bookmark"></i>Ghi chú: </strong></p>
               <p class="note-items"><i class="fa fa-check text-success"></i> Hiển thị với người dùng.</p>
               <p class="note-items"><i class="fa fa-times text-danger"></i> Ẩn với người dùng</p>
               </div>
            </div>
         </form>
      </div>
      </div>
         <!--END #main-->
      </div>
   </body>
</html>