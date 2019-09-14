<div class="col-md-4">
        <div class="card mb-4 shadow-sm">
              <img src="<?php echo e($postItem->img_url); ?>" style="width:100%;height:auto;" alt="">
         
          <div class="card-body">
            <p class="card-text"><?php echo e($postItem->excerpt); ?></p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <a href="/blog/<?php echo e($postItem->id); ?>">
                <button type="button" class="btn btn-sm btn-outline-secondary">Lasīt vairāk</button>
              </a>
              
            
            
            
            </div>
            </div>
          </div>
        </div>
      </div><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\_laravel\resources\views/partials/blog-post.blade.php ENDPATH**/ ?>