@extends('admin.admin_master')

@section('body')


<div class="main-content">
    <section class="section">
            <div class="section-header">
                <h1> Update Contact</h1>
                <div class="ml-auto">
                    
                </div>
            </div>
        <div class="section-body">
            <form action="{{ route('contact_update',$contact->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5>Update Contact</h5>
                                    <div class="form-group mb-3">
                                        <label>Tittle<span style="color:red">*</span></label>
                                        <input type="text" class="form-control" name="contact_tittle" value="{{ $contact->contact_tittle }}">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Details</label>
                                        <textarea  class="form-control snote" name="contact_detail" value="{!! $contact->contact_detail !!}">{!! $contact->contact_detail !!}</textarea>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Address<span style="color:red">*</span></label>
                                        <input type="text" class="form-control" name="contact_address" value="{{ $contact->contact_address }}">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Phone<span style="color:red">*</span></label>
                                        <input type="number" class="form-control" name="contact_number" value="{{ $contact->contact_number }}">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Email<span style="color:red">*</span></label>
                                        <input type="email" class="form-control" name="contact_email" value="{{ $contact->contact_email }}">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Map<span style="color:red">*</span></label>
                                        <textarea style="width:150px" class="form-control snote" name="contact_map" value="{{$contact->contact_map}}">{!! $contact->contact_map !!}</textarea>
                                    </div>
                                    
                                    <div class="form-group mb-3">
                                        <label>Status</label>
                                        <select class="form-control" name="contact_status">
                                            <option  value="Show" @if($contact->contact_status == "Show") selected @endif  >Show</option>
                                            <option  value="Hide" @if($contact->contact_status == "Hide") selected @endif >Hide</option>
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