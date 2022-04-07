@extends('layouts.app')

@section('content')

    <div class="col-3 m-auto mt-5">
        <div class="card">
            <div class="card-header">
                <h2>@lang('auth.login')</h2>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('auth.loginAction') }}">
                    @csrf
                    <div class="mb-3">
                        <input class="form-control" type="email" name="name" placeholder="@lang('generic.email')"/>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="password" name="password" placeholder="@lang('generic.password')"/>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary d-block w-100" type="submit">
                            @lang('auth.login')
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
