@extends('layouts.app')

@section('page-title', __('Service'))
@section('page-heading', __('Service'))

@section('breadcrumbs')
    <li class="breadcrumb-item active">
        Service
    </li>
@stop

@section('content')
<a href="{{ route('services.add') }}" class="btn btn-primary mb-4"><i class="fa fa-plus me-2"></i>Add New</a>
<div class="table-responsive-sm">
  <table class="table table-bordered table-light">
    <thead>
      <tr>
        <th class="text-center" width="50px">ID</th>
        <th>Title</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($service as $item)
             <tr>
                <td class="text-center">
                  {{ $loop->iteration }}
                </td>
                <td>
                  <div class="line-clamp-3">
                      {{ $item->serviceTitle }}
                  </div>
                </td>
                <td width="200px">
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="#" type="button" class="btn btn-outline-primary"><i class="fa fa-eye"></i></a>
                      <a href="{{ route('services.add',["id"=>$item->id]) }}" type="button" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                      <a href="#" type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-trash"></i></a>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm">
                      <div class="modal-content">
                        <div class="modal-header border-0">
                          <h5 class="modal-title" id="exampleModalLabel"><a href="{{ route('services.delete',['id'=>$item->id]) }}" type="button" class="btn btn-outline-danger">Confirm delete!</a></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
        @endforeach

    </tbody>
    {{-- <tfoot>
      <tr>
        <th colspan="3">
          <nav aria-label="Page navigation">
            <ul class="pagination mb-0 py-2">
              <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
            </ul>
          </nav>
        </th>
      </tr>
    </tfoot> --}}
  </table>

</div>
@endsection
