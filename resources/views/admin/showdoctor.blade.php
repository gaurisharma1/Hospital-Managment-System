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

    <div class="container-fluid page-body-wrapper">
        <div align="center" style="padding-top:100px">
            <table>
                    <tr style="background-color:black">
                        <th style="padding:10px">Doctor Name</th>
                        <th style="padding:10px">Phone</th>
                        <th style="padding:10px">Speciality</th>
                        <th style="padding:10px">Room</th>
                        <th style="padding:10px">Image</th>
                        <th style="padding:10px">Delete</th>
                        <th style="padding:10px">Update</th>
                    </tr>

                    @foreach($data as $doctor)

                    <tr align="center" style="background-color:#E0B0FF	">
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->phone}}</td>
                        <td>{{$doctor->speciality}}</td>
                        <td>{{$doctor->room}}</td>
                        <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}"></td>
                        <td><a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger" href="{{url('deletedoctor', $doctor->id)}}">Delete</td>
                        <td><a class="btn btn-primary" href="{{url('updatedoctor', $doctor->id)}}">Update</td>
                    </tr>

                    @endforeach

            </table>
        </div>
    </div>
    @include('admin.script')
  </body>
</html>