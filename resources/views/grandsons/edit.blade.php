@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header d-flex">
            {{ __('Edit Grandson') }}
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

            <form action="{{ route('grandsons.update', $grandson->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="son_id">Father</label>
                    <select name="son_id" class="form-control">
                        <option value="">Select father</option>
                        @forelse($sons as $son)
                            <option value="{{ $son->id }}" {{ old('son_id', $grandson->son_id) == $son->id ? 'selected' : null }}>{{ $son->name }}</option>
                        @empty
                        @endforelse
                    </select>
                    @error('son_id')<span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ old('name', $grandson->name) }}" class="form-control">
                    @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="birth_date">Birth Date</label>
                    <input type="text" name="birth_date" value="{{ old('birth_date', $grandson->birth_date) }}" class="form-control">
                    @error('birth_date')<span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary">Update Grandson</button>
                </div>
            </form>
        </div>
    </div>

@endsection
