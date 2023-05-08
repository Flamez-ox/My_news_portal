@extends('frontend.frontend_master')

@section('Tittle', 'Videos')


@section('body')
<br>
<br>
<br>
<section class="all-category-inner">
    <div class="container">
        <h1 class=""> VIDEO GALLERIES</h1>
        <div class="headding-border bg-color-4"></div>
        <div class="row">
                @foreach ($video as $item)
                <div class="col-sm-6 col-md-6">
                    <div class="international">
                        <div class="post-wrapper wow fadeIn effects" data-wow-duration="1s">
                            <!-- post title -->
                            <h3><a href="#"> {{ $item->caption }} </a></h3>
                            <!-- post image -->
                            <div class="post-thumb">
                                <a href="#">
                                    <iframe class= "img-responsive" width="500" height="300" src="{{ $item->video_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    <div class="overlay">
                                        <a href="#" class="expand"><i class="fa fa-play"></i></a>
                                        <a class="close-overlay hidden">x</a>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="post-title-author-details">
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> @php $time = strtotime($item->created_at); $date = date('d F, Y',$time); @endphp
                                    {{ $date }}
                                </div>
                            </div>
                        </div>
                       
                        
                    </div>
                    <!-- /.international -->
                </div> 
                @endforeach
           
            
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="pagination">
                            
                            {{ $video->links() }}
                        </ul>
                    </div>
                </div>
            </div>
    </div>
</section>
@endsection