@extends('layout')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">List Room Type
        <a href="{{url('admin/roomtype')}}" class="float-right btn btn-success btn sm">View All</a>
      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered">
          <tr>
          <tr>
            <th>Title</th>
            <td>{{$data->title}}</td>
          </tr>
          <th>Price $ </th>
          <td>{{$data->price}}</td>
          </tr>
          <tr>
            <th>Detail</th>
            <td>{{$data->detail}}</td>
          </tr>
          <tr>
            <th>Room Images</th>
            <td>
              <table class="table table-bordered">
                <tr>
                  @foreach($rtype->roomtypeimgs as $img)
                  <td>
                    <img width="150" src="{{asset('storage/app/'.$img->img_src)}}" />
                  </td>
                  @endforeach
                </tr>
              </table>
            </td>

          </tr>
        </table>
        </form>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->


@endsection