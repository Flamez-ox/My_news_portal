@extends('admin.admin_master')

@section('body')


<div class="main-content">
    <section class="section">
            <div class="section-header">
                <h1> Edit Video Gallery </h1>
                <div class="ml-auto">
                    <a href="{{ route('admin_video') }}" class="btn btn-primary"><i class="fas fa-eye"></i> Go back to view</a>
                </div>
            </div>
        <div class="section-body">
            <form action="{{ route('video_update',$video->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5>Change Video Gallery</h5>
                                    <div class="form-group mb-3">
                                        <div class="form-group mb-3">
                                            <label>Exisitng Video URL</label>
                                            <div>
                                                <iframe width="300" height="300" src="{{ $video->video_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            </div>
                                            </div>
                                        </div>
                                    <div class="form-group mb-3">
                                        <label>Video URL</label>
                                        <div>
                                            <input type="text" class="form-control" name="video_url" value="{{ $video->video_url }}">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Video Caption</label>
                                        <input type="text" class="form-control" name="caption" value="{{ $video->caption }}">
                                    </div>
                             </div>

                             <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        </div>
                        </div>
                    </div>
            </form>
        </div>
    </section>
</div>
@endsection