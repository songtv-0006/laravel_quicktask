@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    {!! Form::open(['method' => 'POST', 'routes' => 'login']) !!}
                        <div class="form-group row">
                            {!! Form::label('email', 'E-Mail Address', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::email('email', old('email'), ['class' => 'form-control','required' => 'required', 'autocomplete' => 'email', 'autofocus' => 'autofocus']) !!}
                                @include('common.errors')
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password', 'Password', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password', ['id' => 'password', 'class' => 'form-control', 'required' => 'required', 'autocomplete' => 'current-password']) !!}
                                @include('common.errors')
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    {!! Form::checkbox('remember', old('remember') ? 'checked' : '' , ['id' => 'remember', 'class' => 'form-check-input']) !!}

                                    {!! Form::label('remember', 'Remember Me', ['class' => 'form-check-label']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    {!! Form::close() !!}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
