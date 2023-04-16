@extends('admin.admin_master')

@section('body')



<div class="main-content">
    <section class="section">
            <div class="section-header">
                <h1> Top Advertisment </h1>
                {{-- <div class="ml-auto">
                    <a href="" class="btn btn-primary"><i class="fas fa-plus"></i> Button</a>
                </div> --}}
            </div>
        <div class="section-body">
            <form action="{{ route('top_advertisement_submit') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h5>Above Search</h5>
                                    <div class="form-group mb-3">
                                        <label>Existing Photo</label>
                                        <div>
                                            <img src="{{ asset('frontend/images/'.$home_advert->top_ad) }}" alt="Existing photo" width="100%">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Change Photo</label>
                                        <div>
                                            <input type="file" name ="top_ad">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>URL</label>
                                        <input type="text" class="form-control" name="top_ad_url" value="{{ $home_advert->top_ad_url }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Status</label>
                                        <select class="form-control" name="top_ad_status">
                                            <option  value="Show" @if($home_advert->top_ad_status == "Show") selected @endif >Show</option>
                                            <option  value="Hide" @if($home_advert->top_ad_status == "Hide") selected @endif>Hide</option>
                                        </select>
                                    </div>
                             </div>
                        </div>
                        </div>
                    </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
            </form>
        </div>
    </section>
</div>
@endsection