@extends('include.master')
@section('title',$category->name)

@section('content')


        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <!-- Post preview-->
               @if(count($articles)>0)

                        @foreach ($articles as $veri2 )


                        <div class="post-preview">
                            <a href="{{ route('single',[$veri2->get->slug,$veri2->slug]) }}">
                                <h2 class="post-title">{{ $veri2->title }}</h2>
                                <img src="{{$veri2->img }}"/>
                                <h3 class="post-subtitle">{{ $veri2->content }}</h3>
                            </a>
                            <p class="post-meta"> Kategori:<a href="#!">{{ $veri2->get->name}}</a>
                                <span class="float-end">{{ $veri2->created_at->diffForHumans() }}</span>
                            </p>

                        </div>
                        @if (!$loop->last)
                        <hr>
                        @endif

                        @endforeach
                        <div class="d-flex justify-content-center">
                            {{ $articles->links('pagination::bootstrap-4')}}
                        </div>
                        @else
                        <div class="alert alert-danger">
                            <h1>BU KATEGORİ AİT YAZI YOK</h1>

                        </div>
                        @endif



                        <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                    </div>

            @include('widgets.kategoriler')
            </div>
        </div>

@endsection
