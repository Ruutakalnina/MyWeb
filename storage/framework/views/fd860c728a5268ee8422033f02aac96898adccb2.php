<?php $__env->startSection('saturs'); ?>

<div class="jumbotron jumbotron-fluid ">
    <div class="container-fluid col-md-10 offset-md-2">
        <img class="card-img-top img-fluid" src="img/Main.jpg" alt="Responsive image"> 
        <h1 class="display-4">Koko&Nut Co.</h1>
        <p class="lead">smoothie bowls</p>
        <hr class="my-4">
        <p>Vitamīniem bagātas smūtiju bļodas! 
          KoKo&Nut Co. smūtiju bļodu sastāvā ir zemenes, mellenes, avenes, ananāsi, mango, banāni un citi garšīgi sezonas augļi, kuri tiek papildināti ar dažādām sēkliņām, kokosriekstu skaidiņām, augļiem, ogām, ziediem un citām piedevām.</p>
        <a class="btn btn-secondary btn-md" href="/blog" role="button">Uzzināt vairāk</a>
    </div>
</div>


<div class="container container fluid">
        <div class="row">
            <div class="menu-header">
                <h1 class="display-4 text-center col-md-2 offset-md-6">Menu</h1>
                    <div class="d-flex justify-content-center align-self-stretch col-md-10 offset-md-2 col-xs-5 offset-xs-2">
                         <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
                            <?php echo $__env->make('partials.blog-post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

                    </div>   
                    
                  <a class="btn btn-secondary btn-md col-md-2 offset-md-6" href="/blog" role="button">Lasīt vairāk</a>
         </div>
    </div>
</div>



<div id="carousel-with-lb" class="carousel slide carousel-multi-item" data-ride="carousel">

  
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-with-lb" data-slide-to="0" class="active secondary-color"></li>
      <li data-target="#carousel-with-lb" data-slide-to="1" class="secondary-color"></li>
      <li data-target="#carousel-with-lb" data-slide-to="2" class="secondary-color"></li>
    </ol>
    <!--/.Indicators-->
  
    <!--Slides and lightbox-->
  
    <div class="carousel-inner mdb-lightbox" role="listbox">
      <div id="mdb-lightbox-ui"></div>
      <!--First slide-->
      <div class=" carousel-item active text-center">
  
        <figure class="col-md-2 d-md-inline-block">
            <img src="img/9.jpg"
              class="img-fluid">
          </a>
        </figure>
  
        <figure class="col-md-2 d-md-inline-block">
            <img src="img/2.jpg"
              class="img-fluid">
          </a>
        </figure>
  
        <figure class="col-md-2 d-md-inline-block">
            <img src="img/3.jpg"
              class="img-fluid">
          </a>
        </figure>
  
        <figure class="col-md-2 d-md-inline-block">
            <img src="img/4.jpg"
              class="img-fluid">
          </a>
        </figure>
  
      </div>
      <!--/.First slide-->
  
      <!--Second slide-->
      <div class="carousel-item text-center">
  
        <figure class="col-md-2 d-md-inline-block">
            <img src="img/5.jpg"
              class="img-fluid">
          </a>
        </figure>
  
        <figure class="col-md-2 d-md-inline-block">
            <img src="img/6.jpg"
              class="img-fluid">
          </a>
        </figure>
  
        <figure class="col-md-2 d-md-inline-block">
            <img src="img/10.jpg"
              class="img-fluid">
          </a>
        </figure>
  
        <figure class="col-md-2 d-md-inline-block">
            <img src="img/12.jpg"
              class="img-fluid">
          </a>
        </figure>
  
      </div>
      <!--/.Second slide-->
  
      <!--Third slide-->
      <div class="carousel-item text-center">
  
        <figure class="col-md-2 d-md-inline-block">
            <img src="img/1.jpg"
              class="img-fluid">
          </a>
        </figure>
  
        <figure class="col-md-2 d-md-inline-block">
            <img src="img/8.jpg"
              class="img-fluid">
          </a>
        </figure>
  
        <figure class="col-md-2 d-md-inline-block">
            <img src="img/11.jpg"
              class="img-fluid">
          </a>
        </figure>
  
        <figure class="col-md-2 d-md-inline-block">
            <img src="img/7.jpg"
              class="img-fluid">
          </a>
        </figure>
  
      </div>
      <!--/.Third slide-->
  
    </div>
    <!--/.Slides-->
  
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\_laravel\resources\views/pages/welcome.blade.php ENDPATH**/ ?>