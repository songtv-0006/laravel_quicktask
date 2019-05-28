@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    {!! Form::open(['method' => 'POST', 'route' => 'register']) !!}
                        <div class="form-group row">
                            {!! Form::label('name', 'Name', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('name', old('name'), ['id' => 'name', 'class' => 'form-control', 'required' => 'required', 'autocomplete' => 'name', 'autofocus' => 'autofocus']) !!}
                                @include('common.errors')
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('email', 'E-Mail Address', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::email('email', old('email'), ['id' => 'email', 'class' => 'form-control', 'required' => 'required', 'autocomplete' => 'email']) !!}
                                @include('common.errors')
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password', 'Password', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password', ['id' => 'password', 'class' => 'form-control', 'required' => 'required', 'autocomplete' => 'autocomplete']) !!}
                                @include('common.errors')
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password-confirm', 'Confirm Password', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password-confirm', ['id' => 'password-confirm', 'class' => 'form-control', 'required' => 'required', 'autocomplete' => 'new-password']) !!}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
