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
    <form class="row g-3" action="{{ route('slides.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{ $slide->id }}" name="id">
      <div class="col-md-12">
        <label for="service-title" class="form-label">Title</label>
        <input value="{{ $slide->serviceTitle }}" type="text" class="form-control bg-white" name="serviceTitle" id="service-title">
      </div>

      <div class="col-md-6">
        <label for="service-excerpt" class="form-label">Excerpt</label>
        <input type="text" class="form-control bg-white" value="{{ $slide->serviceExcerpt }}" name="serviceExcerpt" id="service-excerpt">
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
</div>
@endsection
