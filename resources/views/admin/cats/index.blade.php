@extends('admin.layouts.master');
@section('title')
    Categories
@endsection
@section('h1-left-title')
    Categories
@endsection
@section('breadcrumb-1')
    Home
@endsection
@section('breadcrumb-2')
    Categories
@endsection


@section('main-content')
    <a href="{{ route('cats.create') }}" class="btn btn-outline-info">Create New Category</a>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Created at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cats as $cat)
                    <tr>
                        <td>{{ $cat->id }}</td>
                        <td>{{ $cat->title }}</td>
                        <td>@if ($cat->active == "1")
                            Active
                        @else
                            Inactive
                        @endif</td>
                        <td>{{ $cat->created_at }}</td>
                        <td>
                            <a href="{{ route('cats.edit',$cat->id) }}" class="btn btn-primary">Update</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('cats.destroy',$cat->id) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No Category Has Been Added</td>
                    </tr>

                @endforelse


            </tbody>
        </table>
    </div>
@endsection

