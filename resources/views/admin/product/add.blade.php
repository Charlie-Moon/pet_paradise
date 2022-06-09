@extends('layouts.app')

@section('page-title', __('Add New'))
@section('page-heading', __('Add New'))

@section('breadcrumbs')
    <li class="breadcrumb-item active">
        Add New
    </li>
@stop

@section('content')
<div class="row justify-content-between">
  <div class="col-md-8">
    <form class="row g-3" action="{{ route('product.store')}}"  method="POST">
      @csrf
      <div class="col-md-12">
        <label for="product-title" class="form-label">Title</label>
        <input type="text" class="form-control bg-white" name="serviceTitle" id="product-title">
      </div>

      <div class="col-12">
        <label for="product-body" class="form-label">Body</label>
        {{-- <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"> --}}
        <textarea class="ckeditor form-control" name="serviceBody" id="product-body" cols="20" rows="5"></textarea>
      </div>

      <div class="col-md-6">
        <label for="product-excerpt" class="form-label">Excerpt</label>
        <input type="text" class="form-control bg-white" name="serviceExcerpt" id="product-excerpt">
      </div>

     <div class="col-md-6">
      <label for="formFile" class="form-label">Image</label>
      <input class="form-control bg-white" name="serviceImage" type="file" id="formFile" accept="image/*">
     </div>
     <div class="col-md-3">
      <button type="submit" class="btn btn-primary text-white w-100">Punlish</button>
     </div>
    
    </form>
  </div>
  {{-- <div class="col-md-3 post-side">
    <div class="bg-side bg-gradient h-100 p-4">
      <button type="submit" class="btn btn-primary text-white">Punlish</button>
    </div>
  </div> --}}
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