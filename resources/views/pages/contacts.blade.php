@extends('layouts.main')

@section('saturs')
    

<div class="container-fluid ">
        <div class="row mx-0">
        <div class="col mx-0">    
            <div class="mapouter"><div class="gmap_canvas"><iframe width="1080" height="376" id="gmap_canvas" src="https://maps.google.com/maps?q=republikas%20laukums%203&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450" frameborder="0" style="border:0" scrolling="no" allowfullscreen></iframe>
                                </div>
            </div>
       </div>
       </div>
</div>


    <form action="/submitform" method="get">
      <div class="form-group col-md-8 offset-md-2">
        <label for="exampleInputPassword1">Vārds</label>
        <input name="yourname" type="text" class="form-control" >
        </div>


      <div class="form-group col-md-8 offset-md-2">
        <label for="exampleInputEmail1">Epasta adrese</label>
        <input name="youremail" type="email" class="form-control" id="inputEmail4" data-validation="email">
      </div>
      
      <div class="form-group col-md-8 offset-md-2">
        <label for="exampleFormControlTextarea1">Jūsu ziņa</label>
        <textarea name="yourmessage" class="form-control" rows="3"></textarea>
      </div>

      <button type="submit" class="btn btn-primary col-md-2 offset-md-8">Nosūtīt</button>
    </form>


<div class="jumbotron">
  <p class="lead">Rūta Kalniņa</p>
  <hr class="my-4">
  <p>Pēc izglītības esmu ekonomiste un esmu strādājusi ar eksporta konsultāciju projektiem. Kā papildus pienākums šajā darbā bija mājaslapu izveide Wordpresā un man tas tik ļoti iepatikās, ka šogad izlēmu, ka vēlos mācīties programmēt un strādāt IT nozarē. Mani hobiji - ceļošana, tautiskās dejas.</p>
  
</div>


<script>
    $.validate({
      language: lvLang
    });
  </script>


@endsection