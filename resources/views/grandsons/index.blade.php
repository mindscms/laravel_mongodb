@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header d-flex">
            {{ __('Grandsons') }}
            <div class="ml-auto">
                <a href="{{ route('home') }}">Home</a> -
                <a href="{{ route('sons.index') }}">Sons</a> -
                <a href="{{ route('grandsons.index') }}">Grandsons</a>
            </div>
        </div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="text-right">
                <a href="{{ route('grandsons.create') }}">Add Grandson</a>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Father Name</th>
                        <th>Birth Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($grandsons as $grandson)
                        <tr>
                            <td>{{ $grandson->id }}</td>
                            <td>{{ $grandson->name }}</td>
                            <td>{{ $grandson->son->name }}</td>
                            <td>{{ $grandson->birth_date }}</td>
                            <td><a href="{{ route('grandsons.edit', $grandson->id) }}" class="btn btn-success btn-sm">Edit</a></td>
                            <td>
                                <form action="{{ route('grandsons.destroy', $grandson->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="delete" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No Grandsons found</td>
                        </tr>
                    @endforelse
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="6">
                            {!! $grandsons->links() !!}
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

@endsection
