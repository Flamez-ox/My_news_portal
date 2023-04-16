@extends('admin.admin_master')

@section('body')


<div class="main-content">
    <section class="section">
            <div class="section-header">
                <h1> Create Sidebar Advertisment </h1>
                <div class="ml-auto">
                    <a href="{{ route('admin_sidebar_advertisement') }}" class="btn btn-primary"><i class="fas fa-eye"></i> Go back to view</a>
                </div>
            </div>
        <div class="section-body">
            <form action="{{ route('sidebar_advertisement_submit') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h5>Add Sidebar Advertisement</h5>
                                    <div class="form-group mb-3">
                                    <div class="form-group mb-3">
                                        <label>Select Photo</label>
                                        <div>
                                            <input type="file" name ="sidebar_ad">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>URL</label>
                                        <input type="text" class="form-control" name="sidebar_ad_url" value="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Status</label>
                                        <select class="form-control" name="sidebar_ad_location">
                                            <option  value="Top"   >Top</option>
                                            <option  value="Buttom"  >Buttom</option>
                                        </select>
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