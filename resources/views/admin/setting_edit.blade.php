@extends('layouts.admin')

@section('title','Admin Panel Setting')
@section('javascript')


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Setting Edit</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table >
                                <thead>

                                </thead>
                                <tbody>

                                <form role="form" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class=" my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                                            <div class="nav-wrapper position-relative">
                                                <ul class="nav nav-pills nav-fill" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-0 px-0 py-1 active " id="general-tab" data-bs-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">
                                                            <span class="ms-1">General</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-0 px-0 py-1 " id="smpt-tab" data-bs-toggle="tab" href="#smpt" role="tab" aria-controls="smpt" aria-selected="false">
                                                            <span class="ms-1">Smpt email</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-0 px-0 py-1 " id="social-tab" data-bs-toggle="tab" href="#social" role="tab" aria-controls="social" aria-selected="false">
                                                            <span class="ms-1">Social Media</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-0 px-0 py-1 " id="aboutuss-tab" data-bs-toggle="tab" href="#aboutuss" role="tab" aria-controls="aboutuss" aria-selected="false">
                                                            <span class="ms-1">About Us</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-0 px-0 py-1 " id="contactt-tab" data-bs-toggle="tab" href="#contactt" role="tab" aria-controls="contactt" aria-selected="false">
                                                            <span class="ms-1">Contact Page</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-0 px-0 py-1 " id="referencess-tab" data-bs-toggle="tab" href="#referencess" role="tab" aria-controls="referencess" aria-selected="false">
                                                            <span class="ms-1">References</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                                                <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                                                <p>Title</p>
                                                <div class="input-group input-group-outline mb-3">
                                                    <input type="text" name="title" value="{{$data->title}}" class="form-control">
                                                </div>
                                                <p>Keywords</p>
                                                <div class="input-group input-group-outline mb-3">
                                                    <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                                                </div>
                                                <p>Description</p>
                                                <div class="input-group input-group-outline mb-3">
                                                    <input type="text" name="descriptions" value="{{$data->descriptions}}" class="form-control">
                                                </div>
                                                <p>Address</p>
                                                <div class="input-group input-group-outline mb-3">
                                                    <input type="text" name="address" value="{{$data->address}}" class="form-control">
                                                </div>
                                                <p>Phone</p>
                                                <div class="input-group input-group-outline mb-3">
                                                    <input type="number" name="phone" value="{{$data->phone}}" class="form-control">
                                                </div>
                                                <p>Fax</p>
                                                <div class="input-group input-group-outline mb-3">
                                                    <input type="number" name="fax" value="{{$data->fax}}" class="form-control">
                                                </div>
                                                <p>E-mail</p>
                                                <div class="input-group input-group-outline mb-3">
                                                    <input type="email" name="email" value="{{$data->email}}" class="form-control">
                                                </div>
                                                <p>Status</p>
                                                <div class="input-group input-group-outline mb-3">
                                                    <label class="form-label"></label>
                                                    <select class="form-control" name="status">
                                                        <option >True</option>
                                                        <option >False</option>
                                                        <option selected="selected">{{$data->status}}</option>
                                                    </select>
                                                </div>

                                            </div>
                                                <div class="tab-pane fade" id="smpt" role="tabpanel" aria-labelledby="smpt-tab">
                                                    <p>Smtpserver</p>
                                                    <div class="input-group input-group-outline mb-3">
                                                        <input type="text" name="smptserver" value="{{$data->smptserver}}" class="form-control">
                                                    </div>
                                                    <p>Smtpemail</p>
                                                    <div class="input-group input-group-outline mb-3">
                                                        <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                                                    </div>
                                                    <p>Smtppassword</p>
                                                    <div class="input-group input-group-outline mb-3">
                                                        <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control">
                                                    </div>
                                                    <p>Smtpport</p>
                                                    <div class="input-group input-group-outline mb-3">
                                                        <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control">
                                                    </div>
                                            </div>
                                            <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                                                <p>Facebook</p>
                                                <div class="input-group input-group-outline mb-3">
                                                    <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                                                </div>
                                                <p>Instagram</p>
                                                <div class="input-group input-group-outline mb-3">
                                                    <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                                                </div>
                                                <p>Twitter</p>
                                                <div class="input-group input-group-outline mb-3">
                                                    <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="aboutuss" role="tabpanel" aria-labelledby="aboutuss">
                                                <p>About us</p>
                                                <div class="mb-3">
                                                    <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="contactt" role="tabpanel" aria-labelledby="contactt-tab">
                                                <p>Contact</p>
                                                <div class="mb-3">
                                                    <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="referencess" role="tabpanel" aria-labelledby="referencess-tab">
                                                <p>References</p>
                                                <div class="mb-3">
                                                    <textarea id="references" name="references">{{$data->references}}</textarea>
                                                    <script>
                                                        $(document).ready(function() {
                                                            $('#aboutus').summernote();
                                                            $('#contact').summernote();
                                                            $('#references').summernote();
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Update Setting</button>
                                        </div>





                                    </div>
                                    <!-- /.card-body -->


                                </form>





                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

