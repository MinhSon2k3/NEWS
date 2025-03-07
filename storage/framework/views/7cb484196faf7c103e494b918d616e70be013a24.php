 <!-- Navigation -->
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
     <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse"
                 data-target="#bs-example-navbar-collapse-1">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>
             <a class="navbar-brand" href="/">Laravel Tin Tức</a>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-nav">
                 <li>
                     <a href="gioithieu">Giới thiệu</a>
                 </li>
                 <li>
                     <a href="lienhe">Liên hệ</a>
                 </li>
             </ul>

             <form action="timkiem" method="get" class="navbar-form navbar-left" role="search">
                 <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                 <div class="form-group">
                     <input type="text" name="tukhoa" class="form-control" placeholder="Tim kiem">
                 </div>
                 <button type="submit" class="btn btn-default">Tìm kiếm</button>
             </form>

             <ul class="nav navbar-nav pull-right">
                 
                 <?php if(!Auth::check()): ?>
                 <li>
                     <a href="dangky">Đăng ký</a>
                 </li>
                 <li>
                     <a href="dangnhap">Đăng nhập</a>
                 </li>
                 <?php else: ?>
                 <li>
                     <a href="nguoidung">
                         <span class="glyphicon glyphicon-user"></span>
                         <?php echo e(Auth::user()->name); ?>

                     </a>
                 </li>

                 <li>
                     <a href="dangxuat">Đăng xuất</a>
                 </li>
                 <?php endif; ?>
             </ul>
         </div>

         <!-- /.navbar-collapse -->
     </div>
     <!-- /.container -->
 </nav><?php /**PATH D:\DACN\LaravelDemo\resources\views/layout/header.blade.php ENDPATH**/ ?>