<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <head>
        <title>DP3M UNSRI - Struktur Organisasi</title>
        @include('depan.main-module-view.meta')
        
        @include('depan.main-module-view.css')
    </head>
    <body>
        
        <div class="page">
            <header class="section page-header">

                @include('depan.main-module-view.barnav')

            </header>

            <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
                <div class="container-fluid">
                    <br>
                    <h3>Struktur Organisasi</h3>
                
                    <div><img src="assets/depan/images/dp3m-struktur.png" width="1300" height="1300"></div>

                </div>
            </section>
        

            <!-- Page Footer-->
            @include('depan.main-module-view.footer')

        </div>

        <!-- Global Mailform Output-->
        <div class="snackbars" id="form-output-global"></div>
        
        @include('depan.main-module-view.js')
        
    </body>
</html>