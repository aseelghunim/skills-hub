@extends('admin.layouts.master');
@section('title')
    Edit Category
@endsection
@section('h1-left-title')
    Edit Category
@endsection
@section('breadcrumb-1')
    Categories
@endsection
@section('breadcrumb-2')
    Edit Category
@endsection


@section('main-content')
    <div class="col-12">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Category</h3>
            </div>

            <form action="{{ route('cats.update',$cat->id) }}" method="post">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" value="{{ $cat->title }}" class="form-control" id="title" name="title"
                            placeholder="Enter Category Title">
                    </div>
                    <div class="form-group clearfix">
                        <label>
                            Status
                        </label>
                        <br>
                        <div class="icheck-primary d-inline">

                            <input type="radio" id="active" value="1" name="active" {{ ($cat->active)? "checked":"" }}>
                            <label for="active">Active</label>
                        </div>

                        <div class="icheck-primary d-inline">
                            <input type="radio" id="inactive" value="0" name="active"  {{ ($cat->active)? "":"checked" }}>
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
