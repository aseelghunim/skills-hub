@extends('admin.layouts.master');
@section('title')
    Archived Categories
@endsection
@section('h1-left-title')
Archived Categories
@endsection
@section('breadcrumb-1')
    Home
@endsection
@section('breadcrumb-2')
Archived Categories
@endsection


@section('main-content')
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
                            <a href="{{ route('cats.restore',$cat->id) }}" class="btn btn-primary">Restore</a>
                        </td>
                        <td>
                            <a href="{{ route('cats.forceDelete',$cat->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No Category Has Been Archived</td>
                    </tr>

                @endforelse


            </tbody>
        </table>
    </div>
@endsection

