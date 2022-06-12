@extends('layouts.app')

@section('page-title', __('Contacts'))
@section('page-heading', __('Contacts'))

@section('breadcrumbs')
    <li class="breadcrumb-item active">
        Contacts
    </li>
@stop

@section('content')
<div class="table-responsive-sm">
  <table class="table table-bordered table-light">
    <thead>
      <tr>
        <th class="text-center" width="50px">ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th class="text-center">Message</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($contact as $item)
        <tr>
          <td class="text-center">
            {{ $item->id }}
          </td>
          <td>
            {{ $item->first_name }} - {{ $item->first_name }} 
          </td>
          <td>
            {{ $item->email }}
          </td>
          <td>
            {{ $item->phone }}
          </td>
          <td width="200px"><div style="max-width: 400px; word-break:break-all">{{ $item->description }}</div></td>
        </tr>
      @endforeach
    </tbody>
    <tfoot>
      <tr>
        <th colspan="5">
          {{ $contact->links() }}
        </th>
      </tr>
    </tfoot>
  </table>
 
</div>
@endsection