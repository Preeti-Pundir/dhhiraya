@extends('backend.layouts.master')

@section('main-content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
     <div class="row">
         <div class="col-md-12">
            @include('backend.layouts.notification')
         </div>
     </div>
     <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary float-left">Survey List</h6>

      </div>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="user-dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>S.N.</th>
              <th>User id</th>
              <th>Que-1</th>
              <th>Que-2</th>
              <th>Que-3</th>
              <th>Que-4</th>
              <th>Que-5</th>


            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>S.N.</th>
                <th>User id</th>
                <th>Que-1</th>
              <th>Que-2</th>
              <th>Que-3</th>
              <th>Que-4</th>
              <th>Que-5</th>


              </tr>
          </tfoot>
          <tbody>
            @foreach($surveys as $survey)
                <tr>
                    <td>{{$survey->id}}</td>
                    <td>{{$survey->user_id}}</td>
                    <td>{{$survey->que_1}}</td>
                    <td>{{$survey->que_2}}</td>
                    <td>{{$survey->que_3}}</td>
                    <td>{{$survey->que_4}}</td>
                    <td>{{$survey->que_5}}</td>

                    {{-- <td>
                        <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                    <form method="POST" action="{{route('users.destroy',[$user->id])}}">
                      @csrf
                      @method('delete')
                          <button class="btn btn-danger btn-sm dltBtn" data-id={{$user->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td> --}}

                </tr>
            @endforeach
          </tbody>
        </table>
        {{-- <span style="float:right">{{$users->links()}}</span> --}}
      </div>
    </div>
</div>
@endsection

@push('styles')
  <link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <style>
      div.dataTables_wrapper div.dataTables_paginate{
          display: none;
      }
  </style>
@endpush

@push('scripts')

  <!-- Page level plugins -->
  <script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>

@endpush
