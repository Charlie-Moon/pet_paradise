@extends('layouts.app')

@section('page-title', __('Service'))
@section('page-heading', __('Service'))

@section('breadcrumbs')
    <li class="breadcrumb-item active">
        Service
    </li>
@stop

@section('content')
<div class="table-resonsive-sm">
  <table class="table table-light">
    <tbody>
      <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Action</td>
      </tr>
      <tr>
        <td>
          1
        </td>
        <td>

        </td>
        <td>
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-primary">Left</button>
            <button type="button" class="btn btn-primary">Middle</button>
            <button type="button" class="btn btn-primary">Right</button>
          </div>
        </td>
      </tr>

    </tbody>
    <tfoot>
      <tr>
        <th>
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">Page 1 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Page 2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">Page 3</a>
              </li>
            </ul>
          </nav>
        </th>
      </tr>
    </tfoot>
  </table>
 
</div>
@endsection

@section('scripts')

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
    
@endsection