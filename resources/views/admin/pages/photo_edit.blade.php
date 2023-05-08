@extends('admin.admin_master')

@section('body')


<div class="main-content">
    <section class="section">
            <div class="section-header">
                <h1> Edit Gallery </h1>
                <div class="ml-auto">
                    <a href="{{ route('admin_photo') }}" class="btn btn-primary"><i class="fas fa-eye"></i> Go back to view</a>
                </div>
            </div>
        <div class="section-body">
            <form action="{{ route('photo_update',$photo->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5>Change Photo Gallery</h5>
                                        <div class="form-group mb-3">
                                            <label>Exisitng Gallery</label>
                                            <div>
                                                <img src="{{ asset('frontend/images/'.$photo->photo) }}" width="300" alt="{{ $photo->caption }}">
                                            </div>
                                        </div>
                                    <div class="form-group mb-3">
                                        <label>Change Gallery</label>
                                        <div>
                                            <input type="file" name ="photo">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Photo Caption</label>
                                        <input type="text" class="form-control" name="caption" value="{{ $photo->caption }}">
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