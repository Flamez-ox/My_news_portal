@extends('admin.admin_master')

@section('body')


<div class="main-content">
    <section class="section">
            <div class="section-header">
                <h1> Update Page Statuses</h1>
                <div class="ml-auto">
                </div>
            </div>
        <div class="section-body">
            <form action="{{ route('status_view_update',$pages->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                
                                    <div class="form-group mb-3">
                                        <label>About Status</label>
                                        <select class="form-control" name="about_status">
                                            <option  value="Show" @if($pages->about_status == "Show") selected @endif  >Show</option>
                                            <option  value="Hide" @if($pages->about_status == "Hide") selected @endif >Hide</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Login Status</label>
                                        <select class="form-control" name="login_status">
                                            <option  value="Show" @if($pages->login_status == "Show") selected @endif  >Show</option>
                                            <option  value="Hide" @if($pages->login_status == "Hide") selected @endif >Hide</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>All news Status</label>
                                        <select class="form-control" name="all_news_status">
                                            <option  value="Show" @if($pages->all_news_status == "Show") selected @endif  >Show</option>
                                            <option  value="Hide" @if($pages->all_news_status == "Hide") selected @endif >Hide</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Registration Status</label>
                                        <select class="form-control" name="registration_status">
                                            <option  value="Show" @if($pages->registration_status == "Show") selected @endif  >Show</option>
                                            <option  value="Hide" @if($pages->registration_status == "Hide") selected @endif >Hide</option>
                                        </select>
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