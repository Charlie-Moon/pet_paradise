@extends('layouts.app')

@section('page-title', __('Products'))
@section('page-heading', __('Products'))

@section('breadcrumbs')
    <li class="breadcrumb-item active">
        Products
    </li>
@stop

@section('content')
<a href="#" class="btn btn-primary mb-4"><i class="fa fa-plus me-2"></i>Add New</a>
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
      <tr>
        <td class="text-center">
          1
        </td>
        <td>
          <div class="line-clamp-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ratione iste dolorum inventore facere eius repellat natus doloremque numquam et? Ullam laudantium hic quisquam itaque ducimus explicabo dignissimos molestiae harum.
          </div>
        </td>
        <td>
          <div class="btn-group" role="group" aria-label="Basic example">
            <a href="#" type="button" class="btn btn-outline-primary"><i class="fa fa-eye"></i></a>
            <a href="#" type="button" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
            <a href="#" type="button" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
          </div>
        </td>
      </tr>

    </tbody>
    <tfoot>
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
    </tfoot>
  </table>
 
</div>
@endsection