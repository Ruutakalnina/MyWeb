<?php $__env->startSection('saturs'); ?>
    

<div class="container-fluid ">
        <div class="row mx-0">
        <div class="col mx-0">    
            <div class="mapouter"><div class="gmap_canvas"><iframe width="1080" height="376" id="gmap_canvas" src="https://maps.google.com/maps?q=republikas%20laukums%203&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450" frameborder="0" style="border:0" scrolling="no" allowfullscreen></iframe>
                                </div>
            </div>
       </div>
       </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-7 offset-md-3">
    <form action="/submitform" method="get">
      <div class="form-group">
        <label for="exampleInputPassword1">Name</label>
        <input name="yourname" type="text" class="form-control" >
        </div>


      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input name="youremail" type="text" class="form-control">
      </div>
      
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Your message</label>
        <textarea name="yourmessage" class="form-control" rows="3"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>
</div>

<div class="jumbotron">
    <h1 class="display-4">Hello, world!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\_laravel\resources\views/pages/contact.blade.php ENDPATH**/ ?>