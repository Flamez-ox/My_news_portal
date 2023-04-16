@extends('admin.admin_master')

@section('body')


<div class="main-content">
    <section class="section">
            <div class="section-header">
                <h1> Create Post </h1>
                <div class="ml-auto">
                    <a href="{{ route('admin_post_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> Go back to view</a>
                </div>
            </div>
        <div class="section-body">
            <form action="{{ route('post_submit') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5>Add Post</h5>
                                    <div class="form-group mb-3">
                                    <div class="form-group mb-3">
                                        <label>Select Photo</label>
                                        <div>
                                            <input type="file" name ="post_photo">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Post Title</label>
                                        <input type="text" class="form-control" name="post_tittle" value="">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Post Detail</label>
                                        <textarea  class="form-control snote" name="post_detail" value=""></textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Select Category</label>
                                        <select class="form-control" name="sub_category_id">
                                            @foreach($sub_categories as $item)

                                            <option  value="{{ $item->id }}">{{ $item->sub_category_name }} ({{ $item->rCategory->category_name }})</option>

                                            @endforeach
                                            
                                            
                                        </select>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Is shareable?</label>
                                        <select class="form-control" name="is_share">
                                            <option  value="Yes"   >Yes</option>
                                            <option  value="No"  >No</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Comment?</label>
                                        <select class="form-control" name="is_comment">
                                            <option  value="Yes"   >Yes</option>
                                            <option  value="No"  >No</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Tags</label>
                                        <input type="text" class="form-control" name="tags" value="">
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