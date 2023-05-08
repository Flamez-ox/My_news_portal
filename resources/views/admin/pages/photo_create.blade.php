@extends('admin.admin_master')

@section('body')


<div class="main-content">
    <section class="section">
            <div class="section-header">
                <h1> Create Gallery </h1>
                <div class="ml-auto">
                    <a href="{{ route('admin_photo') }}" class="btn btn-primary"><i class="fas fa-eye"></i> Go back to view</a>
                </div>
            </div>
        <div class="section-body">
            <form action="{{ route('photo_submit') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5>Add Photo Gallery</h5>
                                    <div class="form-group mb-3">
                                    <div class="form-group mb-3">
                                        <label>Select Gallery</label>
                                        <div>
                                            <input type="file" name ="photo">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Photo Caption</label>
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