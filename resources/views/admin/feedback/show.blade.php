@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Show</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <!-- end page title end breadcrumb -->
            <form action="{{ route('feedback.update', $feedback->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <label for="fullname">Full Name</label>
                                <input type="text" id="fullname" value="{{ $feedback->fullname }}" class="form-control" name="fullname">
                            </div>
                        </div><br><br>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="phone_number">Phone number</label>
                                <input type="text" id="phone_number" value="{{ $feedback->phone_number }}" class="form-control" name="phone_number">
                            </div>
                        </div><br><br>


                       <div class="row">
                            <div class="col-md-6">
                                <label for="content">Comment</label>
                                 <textarea type="text" id="content"  class="form-control" name="content">{{ $feedback->content }}</textarea>
                            </div>
                        </div><br><br> <br>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="video">Videos</label>
                                <video style="width: 400px; height:200px" controls >
                                <source src="{{ asset($feedback->video) }}">
                                </video>
                            </div>
                        </div><br><br>

                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection 
