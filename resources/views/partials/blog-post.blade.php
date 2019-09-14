<div class="col-md-4">
        <div class="card mb-4 shadow-sm">
              <img src="{{ $postItem->img_url }}" style="width:100%;height:auto;" alt="">
         
          <div class="card-body">
            <p class="card-text">{{$postItem->excerpt}}</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <a href="/blog/{{ $postItem->id }}">
                <button type="button" class="btn btn-sm btn-outline-secondary">Lasīt vairāk</button>
              </a>
              
            
            
            
            </div>
            </div>
          </div>
        </div>
      </div>