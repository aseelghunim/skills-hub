@extends('admin.layouts.master');
@section('title')
    Add Category
@endsection
@section('h1-left-title')
    Add Category
@endsection
@section('breadcrumb-1')
    Categories
@endsection
@section('breadcrumb-2')
    Add Category
@endsection


@section('main-content')
    <div class="col-12">

        <div class="card card-primary">
            <div class="card-header mb-3">
                <h3 class="card-title">Create New Category</h3>
            </div>
            @if($errors->any())

                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger my-2" role="alert">
                        {{ $error }}
                     </div>
                @endforeach
            @endif
            <form action="{{ route('cats.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"
                            placeholder="Enter Category Title">
                    </div>
                    <div class="form-group clearfix">
                        <label>
                            Status
                        </label>
                        <br>
                        <div class="icheck-primary d-inline">

                            <input type="radio" id="active" value="1" name="active">
                            <label for="active">Active</label>
                        </div>

                        <div class="icheck-primary d-inline">
                            <input type="radio" id="inactive" value="0" name="active">
                            <label for="inactive">
                                Inactive
                            </label>
                        </div>

                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>







    </div>
@endsection
