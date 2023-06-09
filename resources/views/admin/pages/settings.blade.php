@extends('admin.admin_master')

@section('body')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Setting</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('setting_update') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12">
                                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link active" id="v-1-tab" data-toggle="pill" href="#v-1" role="tab" aria-controls="v-1" aria-selected="true">
                                                    Home Page
                                                </a>
                                                <a class="nav-link" id="v-2-tab" data-toggle="pill" href="#v-2" role="tab" aria-controls="v-2" aria-selected="false">
                                                    Text Item
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-10 col-lg-9 col-md-8 col-sm-12">
                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="pt_0 tab-pane fade show active" id="v-1" role="tabpanel" aria-labelledby="v-2-tab">
                                                    <!-- Home page Start -->
                                                    <div class="form-group mb-3">
                                                        <label>News Ticker total</label>
                                                        <input type="text" class="form-control" name="news_ticker_total" value="{{ $settings->news_ticker_total }}">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>News Ticker Status</label>
                                                        <select name="news_ticker_status" class="form-control">
                                                            <option value="Show" @if( $settings->news_ticker_status == 'Show') selected @endif>Show</option>
                                                            <option value="Hide" @if($settings->news_ticker_status == 'Hide') selected @endif>Hide</option>
                                                        </select>
                                                    </div>
                                                    <!-- Home page End -->
                                                </div>

                                                <div class="pt_0 tab-pane fade" id="v-2" role="tabpanel" aria-labelledby="v-2-tab">
                                                    <!-- Text Item Start -->
                                                    <div class="form-group mb-3">
                                                        <label>Body</label>
                                                        <input type="text" class="form-control" name="" value="123">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>Status</label>
                                                        <select name="recaptcha_status" class="form-control">
                                                            <option value="Show">Show</option>
                                                            <option value="Hide">Hide</option>
                                                        </select>
                                                    </div>
                                                    <!-- Text Item End -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mt_30">
                                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>


@endsection