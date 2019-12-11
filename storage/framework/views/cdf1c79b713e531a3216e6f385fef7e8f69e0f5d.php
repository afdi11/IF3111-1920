<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php echo $__env->yieldContent('title'); ?></title>
  </head>

  <body>

    <div id="myHeader" class="header" style="margin: 0;">
    <header>
      <img href="/" class="logo" src="<?php echo e(asset('image/logo.png')); ?>" style="width: 15%" alt="">
      <nav>
        <ul class="nav__links">
          <li> <a href="/">Home</a> </li>
          <li> <a href="/laporan">Buat Laporan</a> </li>
          <?php if(Auth::check()): ?>
          <li> <a href="/"> <?php echo e(Auth::user()->name); ?> </a> </li>
          <li><a href="<?php echo e(route('auth.logout')); ?>"><button type="button" name="button">LOG OUT</button></a></li>
        </ul>
      </nav>
      <?php else: ?>
      <a class="lain" href="/register" >DAFTAR</a>
      <a href="/login"><button type="button" name="button">MASUK</button> </a> 
      <?php endif; ?>
    </header>
  </div>

  <?php echo $__env->yieldContent('container'); ?>

  <script type="text/javascript">
  window.onscroll = function() {myFunction()};

  var header = document.getElementById("myHeader");
  var sticky = header.offsetTop;

  function myFunction() {
    if (window.pageYOffset > sticky) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }
  </script>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\IF3111-1920\resources\views/layout/main.blade.php ENDPATH**/ ?>