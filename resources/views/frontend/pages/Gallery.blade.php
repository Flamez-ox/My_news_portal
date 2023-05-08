@extends('frontend.frontend_master')

@section('Tittle', 'Galleries')


@section('body')
<br>
<br>
<br>
<section class="all-category-inner">
    <div class="container">
        <h1 class=""> GALLERIES</h1>
        <div class="headding-border bg-color-4"></div>
        <div class="row">

            @foreach ($photo as $item)
                <div class="col-md-4 col-sm-4">
                <!-- sports -->
                <div class="sports-inner">
                    
                    
                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                        <!-- post title -->
                        <h3><a href="#">{{ $item->caption }}</a></h3>
                        <!-- post image -->
                        <div class="post-thumb">
                            <a href="#">
                                <img src="{{ asset('frontend/images/'.$item->photo) }}" class="img-responsive" alt="{{ $item->caption }}">
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
            </div>
            @endforeach
            
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="pagination">
                            
                            {{ $photo->links() }}
                        </ul>
                    </div>
                </div>
            </div>
    </div>
</section>
@endsection