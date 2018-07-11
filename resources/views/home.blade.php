@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Your welcome {{ $user->name  }} !
                    {{ $user->role->description }}.

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($user->role->create_user)
                        " Create User == True "
                    @else
                        " Create User == False "
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
