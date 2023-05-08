@extends('admin.admin_master')

@section('body')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>    Video Gallery Table</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_video_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add</a>
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
                                        <th>Video URL</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                  
                                    <tbody>
                                        @foreach ($video as $item)
                                            
                                        
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->caption }}</td>
                                        <td><iframe width="200" height="100" src="{{ $item->video_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                                        <td class="pt_10 pb_10">
                                            <a href="{{ route('admin_video_edit',$item->id) }}"class="btn btn-primary">Edit</a>
                                            <a href="{{ route('admin_video_delete',$item->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
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