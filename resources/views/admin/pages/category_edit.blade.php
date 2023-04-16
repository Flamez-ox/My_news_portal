@extends('admin.admin_master')

@section('body')


<div class="main-content">
    <section class="section">
            <div class="section-header">
                <h1> Update Category</h1>
                <div class="ml-auto">
                    <a href="{{ route('admin_catergory_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> Go back to view</a>
                </div>
            </div>
        <div class="section-body">
            <form action="{{ route('category_update',$category->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h5>Add Category</h5>
                                    <div class="form-group mb-3">
                                        <label>Name<span style="color:red">*</span></label>
                                        <input type="text" class="form-control" name="category_name" value="{{ $category->category_name }}">
                                    </div>
                                    
                                    <div class="form-group mb-3">
                                        <label>Show On Menu?</label>
                                        <select class="form-control" name="show_on_menu">
                                            <option  value="Show" @if($category->show_on_menu == "Show") selected @endif  >Show</option>
                                            <option  value="Hide" @if($category->show_on_menu == "Hide") selected @endif >Hide</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Catergory Order<span style="color:red">*</span></label>
                                        <input type="text" class="form-control" name="category_order" value="{{ $category->category_order }}">
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