@extends('layout.master')
@section('title', 'Strater Page')


@section('page-style')


    <!-- Select2 css -->
    <link href="{{asset('assets/vendor/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />


    <!-- Quill css -->
    <link href="{{asset('assets/vendor/quill/quill.core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet" type="text/css" />


    <!-- Theme Config Js -->
    <script src="{{asset('assets/js/config.js')}}"></script>

    <!-- App css -->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

<style type="text/css">
#image-preview{
    width: 100%;
    float: left;
}
#image-preview img{width: 100%;}


</style>
@endsection



        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        @section('content')
        
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    @include('layout.breadcrumb')
                    <!-- end page title -->


                    <div class="card-body">
                        <form action="/" method="post" class="dropzone" id="post-create-form">

                            <div class="row">
                                <div class="col-lg-8">
                                  
                                        <div class="mb-3">
                                            <label for="simpleinput" class="form-label">Post Title</label>
                                            <input type="text" id="title-input" class="form-control">
                                        </div>
                                     
                                </div><!-- end title col -->
                                <div class="col-lg-4">
                                
                                        <p class="mb-1 fw-bold text-muted">Category Select</p>
                                        <select class="form-control select2" data-toggle="select2">
                                                <option>Select</option>
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                        </select>
                                    
                                </div><!-- end Category col -->

                                <div class="col-lg-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="header-title">Post Content</h4>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="mb-2">
                                                    <div id="snow-editor" style="height: 300px;">
                                                        <h3><span class="ql-size-large">Hello World!</span></h3>
                                                    </div><!-- end Snow-editor-->
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- end Post Content col-->
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="header-title">Feature Image</h4>
                                        </div>
                                        <div class="card-body">
                                             <input type="file" id="feature-image" class="form-control">
                                             <div id="image-preview"></div>
                                        </div>
                                        <!-- end Feature Image col -->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> <!-- end card-body -->

                </div> <!-- container -->
            </div> <!-- content -->

            
        @endsection
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

        @section('vendor-script')


    <!-- Quill Editor js -->
    <script src="{{asset('assets/vendor/quill/quill.min.js')}}"></script>

    <!-- Quill Demo js -->
    <script src="{{asset('assets/js/pages/quilljs.init.js')}}"></script>


    <!--  Select2 Plugin Js -->
    <script src="{{asset('assets/vendor/select2/js/select2.min.js')}}"></script>

     <!-- Dropzone File Upload js -->
     <script src="assets/vendor/dropzone/min/dropzone.min.js"></script>

     <!-- File Upload -->
     <script src="{{asset('assets/js/custom-pages/blog/create.js')}}"></script>

    @endsection
