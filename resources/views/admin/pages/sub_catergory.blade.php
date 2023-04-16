@extends('admin.admin_master')

@section('body')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>    Sub Category Table</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_sub_catergory_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add</a>
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
                                        <th>Name</th>
                                        <th>Show_on_menu</th>
                                        <th>Show_on_home</th>
                                        <th>Sub_Category_order</th>
                                        <th>Category_Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    @php
                                     $id = 1   
                                    @endphp
                                    <tbody>
                                        @foreach ($sub_category as $item)
                                            
                                        
                                    <tr>
                                        <td>{{ $id++ }}</td>
                                        <td>{{ $item->sub_category_name }}</td>
                                        <td>{{ $item->show_on_menu }}</td>
                                        <td>{{ $item->show_on_home }}</td>
                                        <td>{{ $item->sub_category_order }}</td>
                                        <td>{{ $item->rCategory->category_name }}</td>
                                        <td class="pt_10 pb_10">
                                            <a href="{{ route('sub_category_edit',$item->id) }}"class="btn btn-primary">Edit</a>
                                            <a href="{{ route('sub_category_delete',$item->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
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