@extends('frontend.frontend_master')

@section('Tittle', 'Contact')


@section('body')

<section class="block-inner">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Contact</h1>
                <div class="breadcrumbs">
                    <ul>
                        <li><i class="pe-7s-home"></i> <a href="home-style-one.html" title="">Home</a></li>
                        <li><a href="#" title="">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="contact-title">
                <h2>{{ $global_contact->contact_tittle }}</h2>
                <p>{{ $global_contact->contact_detail }}</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="contact-address">
                <!-- Address -->
                <h3>Address</h3>
                <i class="pe-7s-map-2 top-icon"></i>
                <ul>
                    <li>{{ $global_contact->contact_address }} </li>
                    {{-- <li>Sydney 2000NSW</li> --}}
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="contact-address">
                <!-- Phone -->
                <h3>Phone</h3>
                <i class="pe-7s-headphones top-icon"></i>
                <ul>
                    <li><i class="fa fa-mobile"></i> {{ $global_contact->contact_number }}</li>
                    <li><i class="fa fa-mobile"></i> {{ $global_contact->contact_number }}</li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="contact-address">
                <!-- Email -->
                <h3>Email</h3>
                <i class="pe-7s-global top-icon"></i>
                <ul>
                    <li><i class="fa fa-envelope-o"></i> {{ $global_contact->contact_email }}</li>
                    <li><i class="fa fa-globe"></i> {{ $global_contact->contact_email }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="contact-form-area">
                <form action="{{ route('sendmail') }}" method="post" class="form_contact_ajax">
                    @csrf

                    @if(session()->get('error'))
                    <div class="text-danger">{{ session()->get('error') }}</div>
                    @endif
                    @if(session()->get('success'))
                    <div class="text-success">{{ session()->get('success') }}</div>
                    @endif


                    <div class="row">
                        <div class="col-sm-6">
                            <span class="input">
                                    <input class="input_field" name="fname"  type="text" id="input-1">
                                    <label class="input_label" for="input-1">
                                        <span class="input_label_content"  data-content="First Name"> First Name</span>
                            </label>
                            </span>
                            @error('fname')
                                <span class="text-danger  error-text fname_error">{{ $message }}<span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <span class="input">
                                    <input class="input_field"  name="lname" type="text" id="input-2">
                                    <label class="input_label" for="input-2">
                                        <span class="input_label_content"  data-content="Last Name">Last Name</span>
                            </label>
                            </span>
                            <span class="text-danger  error-text lname_error"><span>
                                @error('lname')
                                <span class="text-danger  error-text fname_error">{{ $message }}<span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <span class="input">
                                    <input class="input_field" type="text" name="email" id="input-3">
                                    <label class="input_label" for="input-3">
                                        <span class="input_label_content"  data-content="Your Email">Your Email</span>
                            </label>
                            </span>
                            <span class="text-danger  error-text email_error"><span>
                                @error('email')
                                <span class="text-danger  error-text fname_error">{{ $message }}<span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <span class="input">
                                    <input class="input_field" type="text" name="subject" id="input-4">
                                    <label class="input_label" for="input-4">
                                        <span class="input_label_content"  data-content="Subject">Subject</span>
                            </label>
                            </span>
                            <span class="text-danger  error-text subject_error"><span>
                                @error('subject')
                                <span class="text-danger  error-text fname_error">{{ $message }}<span>
                            @enderror
                        </div>
                        <div class="col-sm-12">
                            <span class="input">
                                    <textarea class="input_field" name="message"></textarea>
                                    <label class="input_label" for="message">
                                        <span class="input_label_content"   data-content="Your Message">Your Message</span>
                            </label>
                            <span class="text-danger  error-text message_error"><span>
                                @error('message')
                                <span class="text-danger  error-text fname_error">{{ $message }}<span>
                            @enderror
                            </span>
                           

                            <button  class="btn btn-style">Submit</button>
                        </div>
                    </div>

                                
                </form>

                {{-- <form action="{{ route('sendmail') }}" method="post" class="form_contact_ajax">
                    @csrf
                    <div class="contact-form">
                        <div class="col-sm-6">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name">
                            <span class="text-danger error-text name_error"></span>
                        </div>
                        <div class="col-sm-6">
                            <label for="" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email">
                            <span class="text-danger error-text email_error"></span>
                        </div>
                        <div class="col-sm-6">
                            <label for="" class="form-label">Subject</label>
                            <input type="text" class="form-control" name="subject">
                            <span class="text-danger error-text email_error"></span>
                        </div>
                        <div class="col-sm-6">
                            <label for="" class="form-label">Mesage</label>
                            <textarea class="form-control" name="message" rows="3"></textarea>
                            <span class="text-danger error-text message_error"></span>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-style">Submit</button>
                            
                        </div>
                    </div>
                </form> --}}
            </div>
        </div>
        <div class="col-sm-3">
            <div style="width:150px">
                {!! $global_contact->contact_map !!}
            </div>
        </div>
    </div>
</div>

<script>
    (function($){
        $(".form_contact_ajax").on('submit', function(e){
            e.preventDefault();
            $('#loader').show();
            var form = this;
            $.ajax({
                url:$(form).attr('action'),
                method:$(form).attr('method'),
                data:new FormData(form),
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:function(){
                    $(form).find('span.error-text').text('');
                },
                success:function(data)
                {
                    $('#loader').hide();
                    if(data.code == 0)
                    {
                        $.each(data.error_message, function(prefix, val) {
                            $(form).find('span.'+prefix+'_error').text(val[0]);
                        });
                    }
                    else if(data.code == 1)
                    {
                        $(form)[0].reset();
                        iziToast.success({
                            title: '',
                            position: 'topRight',
                            message: data.success_message,
                        });
                    }
                    
                }
            });
        });
    })(jQuery);
</script>
<div id="loader"></div>

@endsection