@extends('admin.admin_master')

@section('body')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>    Post Table</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_post_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add</a>
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
                                        <th>SL</th>
                                        <th>Post Tittle</th>
                                        <th>Author</th>
                                        <th>Admin</th>
                                        <th>Post Photo</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    @php
                                     $id = 1   
                                    @endphp
                                    <tbody>
                                        @foreach ($posts as $item)
                                            
                                        
                                    <tr>
                                        <td>{{ $id++ }}</td>
                                        <td>{{ $item->post_tittle }}</td>
                                        <td>

                                        </td>
                                        <td>
                                            @if ($item->admin_id != 0)
                                            {{ Auth::guard('admin')->user()->name }} 
                                            @endif
                                        </td>
                                        <td><img  width = "50px" src="{{ asset('frontend/images/'.$item->post_photo) }}" alt=" No Photo Post"></td>
                                        <td>{{ $item->rSubCategory->rCategory->category_name }}</td>
                                        <td>{{ $item->rSubCategory->sub_category_name }}</td>
                                        <td class="pt_10 pb_10">
                                            <a href="{{ route('post_edit',$item->id) }}"class="btn btn-primary">Edit</a>
                                            <a href="{{ route('post_delete',$item->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
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