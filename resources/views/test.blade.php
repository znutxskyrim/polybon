@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Test</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('Product.home') }}">
                            @csrf

                            <div class="form-group row">

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="product_id" value="" required autofocus>

                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-md-6">
                                    <input id="password" type="text" class="form-control" name="product_name" required>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="text" class="form-control" name="description" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                @if ($errors->has('product_type_id'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
