@extends('admin.admin_master')

@section('body')


<div class="main-content">
    <section class="section">
            <div class="section-header">
                <h1> Edit Sidebar Advertisment </h1>
                <div class="ml-auto">
                    <a href="{{ route('admin_sidebar_advertisement') }}" class="btn btn-primary"><i class="fas fa-eye"></i> Go back to view</a>
                </div>
            </div>
        <div class="section-body">
            <form action="{{ route('sidebar_advertisement_update',$sidebar_ad->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h5>Edit Sidebar Advertisement</h5>
                                    <div class="form-group mb-3">
                                    <div class="form-group mb-3">
                                        <div class="form-group mb-3">
                                            <label>Existing Photo</label>
                                            <div>
                                                <img src="{{ asset('frontend/images/'.$sidebar_ad->sidebar_ad) }}" alt="Existing photo" width="50%">
                                            </div>
                                        </div>
                                        <label>Change Photo</label>
                                        <div>
                                            <input type="file" name ="sidebar_ad">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>URL</label>
                                        <input type="text" class="form-control" name="sidebar_ad_url" value="{{$sidebar_ad->sidebar_ad_url  }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Status</label>
                                        <select class="form-control" name="sidebar_ad_location">
                                            <option  value="Top" @if($sidebar_ad->sidebar_ad_location == "Top") selected @endif  >Top</option>
                                            <option  value="Buttom" @if($sidebar_ad->sidebar_ad_location == "Buttom") selected @endif>Buttom</option>
                                        </select>
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