<?php $__env->startSection('title', 'Lapor ITERA'); ?>

<?php $__env->startSection('container'); ?>

  <section class="home">
    

    <div class="home-box">
    <h1 style="">Layanan Aspirasi Masyarakat ITERA</h1>
    <h2>Sampaikan laporan Kamu langsung kepada KM ITERA</h2>
    <a href="<?php echo e(route('auth.logout')); ?>">logout</a> 
    <div class="wrap">
     <div class="search">
        <input type="text" class="searchTerm" placeholder="Masukkan Kata Kunci Atau ID Laporan">
        <button type="submit" class="searchButton">
          <i class="fa fa-search" style=""></i>
       </button>
     </div>
   </div>

   <div class="lapor" >

     <button type="button" name="button" class="tambah"><i class="fa fa-plus"> </i> Buat Laporan</button>
   </div>
   </div>
  </section>

  <section class="containers">
    <h1 class="notop" style=" padding-bottom: 0.7em;">Cara Mengirim Laporan</h1>
    <div class="container">
      <div class="items">
        <div class="icon-wrapper">
          <i class="fa fa-pencil-square-o"></i>
        </div>
        <div class="project-name">
          <p >TULIS LAPORAN</p>
        </div>
      </div>
      <div class="items">
        <div class="icon-wrapper">
          <i class="fa fa-share"></i>
        </div>
        <div class="project-name">
          <p>PROSES VERIFIKASI</p>
        </div>
      </div>
      <div class="items">
        <div class="icon-wrapper">
          <i class="fa fa-comments"></i>
        </div>
        <div class="project-name">
          <p>TINDAK LANJUT</p>
        </div>
      </div>
      <div class="items">
        <div class="icon-wrapper">
          <i class="fa fa-check"></i>
        </div>
        <div class="project-name">
          <p>SELESAI</p>
        </div>
      </div>
    </div>
    <div class="lapor">
      <button type="button" name="button" class="tambah2" style="margin-top: 4.5em;"><i class="fa fa-plus"> </i> Buat Laporan</button>
    </div>
  </section>

  <section class="hangat">
    <h1 class="notop" style="text-align: left; padding-top: 5em; padding-left: 3em">Laporan Terhangat</h1>

    <div class="box">
      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="box-post">
            <div class="title">
              <a href=""><?php echo e($value->judul); ?></a>
            </div>
            <div class="isi">
              <p><?php echo e($value->isi); ?></p>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

  </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\IF3111-1920\resources\views/index.blade.php ENDPATH**/ ?>