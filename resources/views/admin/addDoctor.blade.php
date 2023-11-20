<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
        label{
            display:inline-block;
            width: 200px;
        }
    </style>
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
    
    <div class="container-fluid page-body-wrapper">

        <div class="container" align="center" style="padding-top: 100px">

            <form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">

                @csrf 

                <div style="padding:15px;">
                    <label>Doctor Name</label>
                    <input type="text" style ="color:black" name="name" placeholder="Enter Name" required="">
                </div>
                
                <div style="padding:15px;">
                    <label>Phone</label>
                    <input type="number" style ="color:black" name="number" placeholder="Enter Number" required="">
                </div>
                
                <div style="padding:15px;">
                    <label>Doctor Speciality</label>
                    <select name="speciality" style = "color:black; width:200px;" required="">
                        <option>--Select--</option>
                        <option value="skin">Skin</option>
                        <option value="eye">Eye</option>
                        <option value="heart">Heart</option>
                        <option value="hair">Hair</option>
                    </select>
                </div>
                
                <div style="padding:15px;">
                    <label>Room No</label>
                    <input type="text" style ="color:black" name="room" placeholder="Enter Room No." required="">
                </div>

                <div style="padding:15px;">
                    <label>Doctor Image</label>
                    <input type="file" name="file" required="">
                </div>

                <div style="padding:15px;">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>
        </div>

    </div>
    
    @include('admin.script')
    
  </body>
</html>