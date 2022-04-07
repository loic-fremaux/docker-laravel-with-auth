@extends('layouts.app')

@section('content')

    <div class="col-3 m-auto mt-5">
        <div class="card">
            <div class="card-header">
                <h2>@lang('auth.register')</h2>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('auth.registerAction') }}">
                    @csrf
                    <div class="mb-3">
                        <input class="form-control" type="text" name="name" placeholder="@lang('generic.username')"/>
                        @error('name')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="email" name="email" placeholder="@lang('generic.email')"/>
                        @error('email')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="password" name="password"
                               placeholder="@lang('generic.password')"/>
                        @error('password')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="password" name="password_repeat"
                               placeholder="@lang('generic.password_again')"/>
                        @error('password_repeat')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary d-block w-100" type="submit">
                            @lang('auth.register')
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
