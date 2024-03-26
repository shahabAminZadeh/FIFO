@extends('site.master')
@section('main_content')

    <section class="blog-section p-tb-100 bg-black">
        <div class="container">
            <div class="row">
                @foreach($Posts as $Post)
                <div class="col-sm-12 col-md-6 col-lg-4 pb-30 blog-grid-item">
                    <div class="blog-card blog-card-maincolor">
                        <div class="blog-card-thumb">
                            <a href="blog-details.html">
                                <img style="width: 250px" src="{{asset('/uploads/'.$Post->image)}}" alt="blog">
                            </a>
                        </div>
                        <div class="blog-card-content">
                            <ul class="blog-entry">
                                <li><i class="flaticon-calendar-1"></i>{{$Post->created_at}}</li>
                                <li><i class="flaticon-man-user"></i>{{$Post->writer}}</li>
                            </ul>
                            <h3><a href="{{route('blog_single',['Post'=>$Post->id])}}">{{$Post->title}}</a></h3>
                            <p>{{$Post->body}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center">
                <a href="#" class="btn load-more-btn">
                    <span class="load-more-text">مشاهده بیشتر</span>
                    <span class="load-more-icon"><i class="icofont-refresh"></i></span>
                </a>
            </div>
        </div>
    </section>








@endsection
