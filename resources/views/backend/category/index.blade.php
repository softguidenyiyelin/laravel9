@extends('backendTemplate')
@section('content')
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Category</h1>
    </div>

    <div class="card">
      <div class="card-body categoryCreateDiv">
        <h3 class="pb-2">Create Category</h3>
        <form action="{{ route('categories.store') }}" method="post">
          @csrf
          <div class="row">
            <div class="col-md-2">
              <label for="category_name" class="form-control-label mt-2">Category Name</label>
            </div>
            <div class="col-md-8">
              <input id="category_name" type="text" name="category_name" class="form-control">
              <div class="form-control-feedback text-danger"> {{ $errors->first('category_name') }} </div>
            </div>
            <div class="col-md-2">
              <button type="submit" class="btn btn-primary btn-fw"><i class="mdi mdi-bookmark-plus"></i></button>
            </div>
          </div>
        </form>
      </div>
      <div class="card-body categoryEditDiv">
        <h3 class="pb-2">Edit Category</h3>
        <form method="post" class="editForm">
          @csrf
          @method('PUT')
          <div class="row">
            <div class="col-md-2">
              <label for="category_name" class="form-control-label mt-2">Category Name</label>
            </div>
            <div class="col-md-8">
              <input id="category_name" type="text" name="category_name" class="form-control category_name">
              <div class="form-control-feedback text-danger"> {{ $errors->first('category_name') }} </div>
            </div>
            <div class="col-md-2">
              <button type="submit" class="btn btn-primary btn-fw">
                <i class="mdi mdi-bookmark-check"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="card mt-3">
      <div class="card-body">
        <h3 class="pb-2">Category List</h3>
        <table class="table dataTable table-bordered" id="order-listing">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @php
              $number = 1;
            @endphp
            @foreach ($categories as $category)
              <tr>
                <td width="20%">{{ $number++ }}</td>
                <td width="60%">{{ $category->name }}</td>
                <td width="20%">
                  <button type="submit" class="btn btn-warning btn-fw btn-sm btnEdit"
                    data-category_id="{{ Crypt::encrypt($category->id); }}" data-category_name="{{ $category->name }}">
                    <i class="mdi mdi-grease-pencil text-white"></i>
                  </button>
                  <button type="submit" class="btn btn-danger btn-fw btn-sm">
                    <i class="mdi mdi-bookmark-remove"></i>
                  </button>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

@section('script')
  <script type="text/javascript">
    $(document).ready(function() {
      $('.categoryEditDiv').hide();
      $('.btnEdit').click(function() {
        var id = $(this).data('category_id');
        var category_name = $(this).data('category_name');
        var url = "{{ route('categories.update', ':id') }}";
        url = url.replace(':id', id);
        $('.editForm').attr('action', url);
        $('.category_name').val(category_name);
        $('.categoryEditDiv').show(1000);
        $('.categoryCreateDiv').hide(1000);
      })
    })
  </script>
@endsection
