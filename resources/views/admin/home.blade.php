<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
        </div>
      </div>
    @include('admin.sidebar')

    @include('admin.navbar')
    
    @include('admin.body')

    @include('admin.script')
  </body>
</html>