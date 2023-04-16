@extends('admin.admin_master')

@section('body')


<div class="main-content">
    <section class="section">
            <div class="section-header">
                <h1> Edit Post </h1>
                <div class="ml-auto">
                    <a href="{{ route('admin_post_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> Go back to view</a>
                </div>
            </div>
        <div class="section-body">
            <form action="{{ route('post_update',$post->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5>Edit Post</h5>
                                    <div class="form-group mb-3">
                                    <div class="form-group mb-3">
                                        <div class="form-group mb-3">
                                            <label>Existing Photo</label>
                                            <div>
                                                <img src="{{ asset('frontend/images/'.$post->post_photo) }}" alt="Existing photo" width="50%">
                                            </div>
                                        </div>
                                        <label>Change Photo</label>
                                        <div>
                                            <input type="file" name ="post_photo">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Post Tittle</label>
                                        <input type="text" class="form-control" name="post_tittle" value="{{ $post->post_tittle }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Post Detail</label>
                                        <textarea  class="form-control snote" name="post_detail" value="{{ $post->post_detail }}">{{ $post->post_detail }}</textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Select Category</label>
                                        <select class="form-control select2" name="sub_category_id">
                                            @foreach($sub_categories as $item)
                                            
                                                <option  @if ($item->id == $post->sub_category_id) selected @endif value="{{ $item->id }}">{{ $item->sub_category_name }} ({{ $item->rCategory->category_name }})</option>
                                            
                                            

                                            @endforeach
                                            
                                            
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Is shareable?</label>
                                        <select class="form-control" name="is_share">
                                            <option  value="Yes" @if ($item->is_share == 'Yes') selected @endif  >Yes</option>
                                            <option  value="No" @if ($item->is_share == 'No') selected @endif >No</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Comment?</label>
                                        <select class="form-control" name="is_comment">
                                            <option  value="Yes"  @if ($item->is_comment == 'Yes') selected @endif >Yes</option>
                                            <option  value="No" @if ($item->is_comment == 'No') selected @endif >No</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Existing Tags</label>
                                            <table class="table table-bordered">
                                                @foreach ($exisitng_tags as $item)
                                                    
                                                    <tr>
                                                        <td> {{ $item->tag_name }} </td>
                                                        <td><a href="{{ route('post_delete-tag',[$item->id,$post->id]) }}" onClick="return confirm('Are you sure?');"> Delete </a></td>
                                                    </tr>
                                                    
                                                @endforeach
                                        </table>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Tags</label>
                                        <input type="text" class="form-control" name="tags" value="">
                                    </div>
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