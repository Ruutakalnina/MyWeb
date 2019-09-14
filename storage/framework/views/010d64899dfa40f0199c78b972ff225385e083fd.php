<?php $__env->startSection('saturs'); ?>

<a href="/blog/1">
<div class="jumbotron jumbotron-fluid">
  <div class="container-fluid col-md-10 offset-md-2">
    <img class="card-img-top img-fluid" src="img/Acai.jpg" alt="Card image">
    <h1 class="display-4 text-dark">Unlike any berry - Acai bowl</h1>
  </div>
</div>
</a>


<div class="album py-5 bg-light">
    <div class="container">
      <div class="row">

        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

         <?php echo $__env->make('partials.blog-post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\_laravel\resources\views/pages/blog.blade.php ENDPATH**/ ?>