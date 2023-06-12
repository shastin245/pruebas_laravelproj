@extends('layout')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Room List 
        <a href="{{url('admin/rooms')}}" class="float-right btn btn-success btn sm">View All</a>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" >
            <tr>
            <tr>
                <th>Title</th>
                <td>{{$data->title}}</td>
            </tr>
            <tr>
                <th>Room Type</th>
                <td>{{$data->roomtype->title}}</td>
            </tr>
            </table>
            </form>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
   

@endsection