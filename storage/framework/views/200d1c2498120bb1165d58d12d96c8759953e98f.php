<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php echo $__env->yieldContent('title'); ?></title>
  </head>

  <body>
  <div id="myHeader" class="header" style="margin: 0; background-color: #262626;">
    <header>
      <img href="/" class="logo" src="<?php echo e(asset('image/logo.png')); ?>" style="width: 15%" alt="">
      <nav>
        <ul class="nav__links">
          <li> <a href="/">Home</a> </li>
          <li> <a href="/laporan">Buat Laporan</a> </li>
        </ul>
      </nav>
      <a class="lain" href="/register" >DAFTAR</a>
      <a href="/login"><button type="button" name="button">MASUK</button> </a> 
    </header>
  </div>


    <div class="login">
        <h1 style="padding-top: 2.5em;">REGISTER</h1>
        <form class="form-login" action="<?php echo e(route('register')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input id="email" name="email" class="inputLogin <?php echo e($errors->has('email') ? 'isinvalid' : ''); ?>" type="email" placeholder="Email" required value="<?php echo e(old('email')); ?>"></input>
        <?php if($errors->has('email')): ?>
            <div class="invalid-feedback">
            <?php echo e($errors->first('email')); ?>

            </div>
        <?php endif; ?>

        <input id="name" name="name" class="inputLogin <?php echo e($errors->has('name') ? 'isinvalid' : ''); ?>" type="text" placeholder="Nama" required value="<?php echo e(old('name')); ?>"> </input>
        <?php if($errors->has('name')): ?>
            <div class="invalid-feedback">
            <?php echo e($errors->first('name')); ?>

            </div>
        <?php endif; ?>
        
        <input id="password" name="password" class="inputLogin <?php echo e($errors->has('password') ? 'isinvalid' : ''); ?>" type="password" placeholder="Password (Min. 6 Karakter)" required > </input>
        <?php if($errors->has('password')): ?>
            <div class="invalid-feedback">
            <?php echo e($errors->first('password')); ?>

            </div>
        <?php endif; ?>

        <input class="inputLogin" name="password_confirmation" type="password" placeholder="Confirm Password <?php echo e($errors->has('password_confirmation') ? 'isinvalid' : ''); ?>" required> </input>
        <button type="submit" class="submitButton"> REGISTER </button>
        <a href="/login" style=""> Sudah Punya Akun? <b>LOGIN</b> </a>
        </form>
    </div>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\IF3111-1920\resources\views/register.blade.php ENDPATH**/ ?>