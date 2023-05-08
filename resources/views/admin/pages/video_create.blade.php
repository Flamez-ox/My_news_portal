@extends('admin.admin_master')

@section('body')


<div class="main-content">
    <section class="section">
            <div class="section-header">
                <h1> Create Gallery </h1>
                <div class="ml-auto">
                    <a href="{{ route('admin_video') }}" class="btn btn-primary"><i class="fas fa-eye"></i> Go back to view</a>
                </div>
            </div>
        <div class="section-body">
            <form action="{{ route('video_submit') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5>Add Video Gallery</h5>
                                    <div class="form-group mb-3">
                                    <div class="form-group mb-3">
                                        <label>Video URL</label>
                                        <div>
                                            <input type="text" class="form-control" name="video_url" value="">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Video Caption</label>
                                        <input type="text" class="form-control" name="caption" value="">
                                    </div>
                             </div>

                             <div class="form-group">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                        </div>
                        </div>
                    </div>
            </form>
        </div>
    </section>
</div>
@endsection