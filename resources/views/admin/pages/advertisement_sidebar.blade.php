@extends('admin.admin_master')

@section('body')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Table</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_sidebar_advertisement_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example1">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Photo</th>
                                        <th>Url</th>
                                        <th>Location</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    @php
                                     $id = 1   
                                    @endphp
                                    <tbody>
                                        @foreach ($sidebar_ad as $item)
                                            
                                        
                                    <tr>
                                        <td>{{ $id++ }}</td>
                                        <td><img src="{{ asset('frontend/images/'.$item->sidebar_ad) }}" width="50px" alt="advert"></td>
                                        <td>{{ $item->sidebar_ad_url }}</td>
                                        <td>{{ $item->sidebar_ad_location }}</td>
                                        <td class="pt_10 pb_10">
                                            <a href="{{ route('admin_sidebar_advertisement_edit',$item->id) }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('admin_sidebar_advertisement_delete',$item->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection