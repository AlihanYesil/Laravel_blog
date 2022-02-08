@extends('include.master')
@section('title',$articles->title)
@section('bg',$articles->img)

@section('content')


        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <!-- Post preview-->
                        <div class="card">
                            <div class="card-header">
                              <span class="text-info"> Görüntülenme Sayısı : {{ $articles->hit }}</span>
                            </div>
                        </div>

                        <article class="mb-4">
                            <div class="container px-4 px-lg-5">
                                <div class="row gx-4 gx-lg-5 justify-content-center">




                                  {{ $articles->content }}



                                    </div>

                                </div>

                            </div>
                            @include('widgets.kategoriler')

                    </div>


            </div>

        </div>

@endsection
