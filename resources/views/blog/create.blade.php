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




</style>
@endsection



        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        @section('content')
        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    @include('layout.breadcrumb')
                    <!-- end page title -->


                    <div class="card-body">
                        <form action="/" method="post" class="dropzone" id="xxxmyAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                            data-upload-preview-template="#xxxuploadPreviewTemplate">
                        <div class="row">
                            <div class="col-lg-8">
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Title</label>
                                        <input type="text" id="title-input" class="form-control">
                                    </div>
                            </div> <!-- end col -->

                            <div class="col-lg-4">
                                <p class="mb-1 fw-bold text-muted">Single Select</p>
                                <select class="form-control select2" data-toggle="select2">
                                        <option>Select</option>
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                </select>
                            </div> <!-- end col -->

                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="header-title">Quill Editor</h4>
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
                            </div> <!-- end col-->

                            <div class="col-lg-4">





                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="header-title">Dropzone File Upload</h4>
                                        <p class="text-muted mb-0">
                                            DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews.
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                            data-upload-preview-template="#uploadPreviewTemplate">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>

                                            <div class="dz-message needsclick">
                                                <i class="h1 text-muted ri-upload-cloud-2-line"></i>
                                                <h3>Drop files here or click to upload.</h3>
                                                <span class="text-muted fs-13">(This is just a demo dropzone. Selected files are
                                                    <strong>not</strong> actually uploaded.)</span>
                                            </div>
                                        </form>

                                        <!-- Preview -->
                                        <div class="dropzone-previews mt-3" id="file-previews"></div>

                                    </div>
                                    <!-- end card-body -->
                                </div>








                            </div>

                        </div>
                            <!-- end row-->
                        </form>
                    </div> <!-- end card-body -->






                </div> <!-- container -->
            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <script>document.write(new Date().getFullYear())</script> © Velonic - Theme by <b>Techzaa</b>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>
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

     <!-- File Upload Demo js -->
     <script src="{{asset('assets/js/pages/fileupload.init.js')}}"></script>

    @endsection
