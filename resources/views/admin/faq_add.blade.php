@extends('layouts.admin')

@section('title','Admin Panel Hotel Add')

@section('javascript')


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection

@section('content')
    <div class="container-fluid py-4">
                <div class="card ">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Faq Add</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive p-0">
                            <table >
                                <thead>

                                </thead>
                                <tbody>
                                <form role="form" action="{{route('admin_faq_store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Position</label>
                                            <input type="text" name="position" class="form-control">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Question</label>
                                            <input type="text" name="question" class="form-control">
                                        </div>
                                        <p>Answer</p>
                                        <div class="mb-3">
                                            <textarea id="answer" name="answer"></textarea>
                                            <script>
                                                $(document).ready(function() {
                                                    $('#answer').summernote();
                                                });
                                            </script>
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label"></label>
                                            <select class="form-control" name="status">
                                                <option >True</option>
                                                <option selected="selected">False</option>
                                            </select>
                                        </div>


                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Add Faq</button>
                                    </div>
                                </form>





                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

        </div>

@endsection

