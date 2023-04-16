@extends('admin.admin_master')

@section('body')


<div class="main-content">
    <section class="section">
            <div class="section-header">
                <h1> Create Category</h1>
                <div class="ml-auto">
                    <a href="{{ route('admin_catergory_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> Go back to view</a>
                </div>
            </div>
        <div class="section-body">
            <form action="{{ route('sub_category_submit') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h5>Add Sub Category</h5>
                                    <div class="form-group mb-3">
                                        <label>Name<span style="color:red">*</span></label>
                                        <input type="text" class="form-control" name="sub_category_name" value="">
                                    </div>
                                    
                                    <div class="form-group mb-3">
                                        <label>Show On Menu?</label>
                                        <select class="form-control" name="show_on_menu">
                                            <option  value="Show"   >Show</option>
                                            <option  value="Hide"  >Hide</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Show On home?</label>
                                        <select class="form-control" name="show_on_home">
                                            <option  value="Show"   >Show</option>
                                            <option  value="Hide"  >Hide</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Catergory Order<span style="color:red">*</span></label>
                                        <input type="text" class="form-control" name="sub_category_order" value="">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Select Category</label>
                                        <select class="form-control" name="category_id">
                                            @foreach ($categories as $item)
                                                <option  value="{{ $item->id }}"   >{{ $item->category_name }}</option>
                                            @endforeach
                                            
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