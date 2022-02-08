<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                  Kategoriler
                </button>

                @foreach ($categoryWidget as $veri )


               <a class="list-group-item list-group-item-action @if (Request::segment(3)==$veri->slug) list-group-item-danger  @endif"  href="{{route('category',$veri->slug)}}">{{ $veri->name }}
                <span class="badge float-end  bg bg-secondary">{{ $veri->satir()}}</span></a>


                @endforeach


              </div>
        </div>
    </div>
    </div>
