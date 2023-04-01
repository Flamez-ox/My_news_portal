@extends('admin.admin_master')

@section('body')

<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="active"><a class="nav-link" href="index.html"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>

            <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Dropdown Items</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Item 1</a></li>
                    <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Item 2</a></li>
                </ul>
            </li>

            <li class=""><a class="nav-link" href="setting.html"><i class="fas fa-hand-point-right"></i> <span>Setting</span></a></li>

            <li class=""><a class="nav-link" href="form.html"><i class="fas fa-hand-point-right"></i> <span>Form</span></a></li>

            <li class=""><a class="nav-link" href="table.html"><i class="fas fa-hand-point-right"></i> <span>Table</span></a></li>

            <li class=""><a class="nav-link" href="invoice.html"><i class="fas fa-hand-point-right"></i> <span>Invoice</span></a></li>

        </ul>
    </aside>
</div>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form</h1>
            <div class="ml-auto">
                <a href="" class="btn btn-primary"><i class="fas fa-plus"></i> Button</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">

                                <div class="form-group mb-3">
                                    <label>Text</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Datepicker</label>
                                    <input type="text" class="form-control datepicker" name="" value="">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Datepicker</label>
                                    <input type="text" class="form-control timepicker" name="" value="">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Color</label>
                                    <input type="text" class="form-control jscolor" name="" value="A2A5FF">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Textarea</label>
                                    <textarea name="" class="form-control h_100" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Textarea (Summernote)</label>
                                    <textarea name="" class="form-control snote" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Toggle Option *</label>
                                    <div class="toggle-container">
                                        <input type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No" data-onstyle="success" data-offstyle="danger" name="" value="Yes">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Toggle Option *</label>
                                    <div class="toggle-container">
                                        <input type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No" data-onstyle="success" data-offstyle="danger" name="" value="Yes" checked>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Photo</label>
                                    <div>
                                        <input type="file" name="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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