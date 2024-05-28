@extends('layout.base')
@section('title')
    Signup
@endsection


@section('content')
<div class="container">
    <form action="{{url('signup')}}" class="form" method="post">
        @csrf

       
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" value="{{old('username')}}" name="username" required class="form-control" id="username" aria-describedby="product_name">
            <span class="text-danger">
                @error('username')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required id="password">
            <span class="text-danger">
                @error('password')
                {{$message}}

                @enderror
            </span>
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" required class="form-control" id="password_confirmation">
            <span class="text-danger">
                @error('password_confirmation')
                {{$message}}

                @enderror
            </span>
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection