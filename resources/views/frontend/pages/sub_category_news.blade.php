@extends('frontend.frontend_master')

@section('Tittle', 'All category news')


@section('body')

<section class="all-category-inner">
    <div class="container">
        <br>
        <br>
        <div><h1 >{{ $sub_category->rCategory->category_name }}</h1></div>
        <div class="headding-border bg-color-2"></div>
        <br>
        <div class="row">
            @if(count($post_data))
            @foreach ($post_data as $item)
               <div class="col-md-4 col-sm-4">
                <!-- sports -->
                <div class="sports-inner">
                    <h2 >{{ $item->rSubCategory->sub_category_name }}</h2>
                    
                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                        <!-- post title -->
                        <h3><a href="#">{{ $item->post_tittle }}</a></h3>
                        <!-- post image -->
                        <div class="post-thumb">
                            <a href="#">
                                <img src="{{ asset('frontend/images/'.$item->post_photo) }}" class="img-responsive" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="post-title-author-details">
                        <div class="post-editor-date">
                            <!-- post date -->
                            <div class="post-date">
                                <i class="pe-7s-clock"></i>@php $time = strtotime($item->updated_at); $date = date('d F, Y',$time); @endphp
                                {{ $date }}
                            </div>
                            <!-- post comment -->
                            <div class="post-author-comment"><i class="pe-7s-comment"></i> {{ $item->visitors }} </div>
                        </div>
                        <p>{!! $item->post_detail !!}<a href="{{ route('sub_category_news',$item->id) }}">Read more...</a></p>
                    </div>
                </div>
                    <!-- pagination -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="pagination">
                        
                        {{ $post_data->links() }}
                    </ul>
                </div>
            </div>
        </div>
                        
                   
                
            </div> 
            @endforeach
            @else
            
                <span class="text-danger">No Post found</span>
           @endif
        
    </div>
</section>

@endsection