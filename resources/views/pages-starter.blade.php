@extends('layout.master')
@section('title', 'Strater Page')
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

