<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>DP3M UNSRI - Visi, Misi, Tujuan, Strategi</title>
      @include('depan.main-module-view.meta')
    
      @include('depan.main-module-view.css')
  </head>
  <body>
    <div class="page">
      <header class="section page-header">

        @include('depan.main-module-view.barnav')

      </header>
      
        @include('depan.visi-misi-module-view.sekapursirih')
        @include('depan.visi-misi-module-view.visi')
        @include('depan.visi-misi-module-view.misi')
        @include('depan.visi-misi-module-view.tujuan')
        @include('depan.visi-misi-module-view.startegi')
        <br>

        <!-- Page Footer-->
        @include('depan.main-module-view.footer')

    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    
    @include('depan.main-module-view.js')
    
  </body>
</html>