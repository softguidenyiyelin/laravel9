@extends('backendTemplate')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{route('categories.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-2">
                        <label for="category_name" class="form-control-label mt-2">Category Name</label>
                    </div>
                    <div class="col-md-8">
                        <input id="category_name" type="text" name="category_name" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i>Add</button>
                    </div>
                </div>
            </form>
        </div>        
    </div>

</div>
@endsection