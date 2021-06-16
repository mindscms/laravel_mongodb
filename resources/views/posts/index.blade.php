@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header d-flex">
            {{ __('Posts') }}
            <div class="ml-auto">
                <form action="{{ route('posts.index') }}" method="get">
                    <div class="input-group">
                        <input type="text" name="q" value="{{ old('q', request()->input('q')) }}" class="form-control" placeholder="Search this blog">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Body</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->body }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No Posts found</td>
                        </tr>
                    @endforelse
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="3">
                            {!! $posts->appends(request()->all())->links() !!}
                        </td>
                    </tr>
                    </tfoot>


                </table>
            </div>
        </div>
    </div>

@endsection
