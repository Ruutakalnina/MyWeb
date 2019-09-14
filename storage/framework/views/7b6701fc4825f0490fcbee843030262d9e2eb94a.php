<?php $__env->startSection('saturs'); ?>

<div class="container">
    <div class="row">
          
          <img src="/<?php echo e($post->img_url); ?>" style="width:100%;height:auto;" alt="">

          <h1><?php echo e($post->title); ?></h1>
          <div class="body">
              <?php echo e($post->body); ?>

          </div>

          


    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\_laravel\resources\views/pages/singleblog.blade.php ENDPATH**/ ?>