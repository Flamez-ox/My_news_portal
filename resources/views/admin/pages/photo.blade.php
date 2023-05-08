@extends('admin.admin_master')

@section('body')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>    Photo Gallery Table</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_photo_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add</a>
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
                                        <th>Caption</th>
                                        <th>Photo</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                  
                                    <tbody>
                                        @foreach ($photo as $item)
                                            
                                        
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->caption }}</td>
                                        <td><img  width = "50px" src="{{ asset('frontend/images/'.$item->photo) }}" alt=" No Photo Post"></td>
                                        <td class="pt_10 pb_10">
                                            <a href="{{ route('admin_photo_edit',$item->id) }}"class="btn btn-primary">Edit</a>
                                            <a href="{{ route('admin_photo_delete',$item->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
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