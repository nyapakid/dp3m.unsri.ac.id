<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>DP3M UNSRI</title>
      @include('depan.main-module-view.meta')
    
      @include('depan.main-module-view.css')
  </head>
  <body>
    <div class="page">
      <header class="section page-header">

        @include('depan.main-module-view.barnav')

      </header>
        @include('depan.spmi-siklus-view-module.page.tab-fakultas')

        <!-- Page Footer-->
        @include('depan.main-module-view.footer')

    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    
    @include('depan.main-module-view.js')
    
  </body>
</html>