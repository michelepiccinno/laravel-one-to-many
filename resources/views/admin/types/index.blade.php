@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            @foreach ($types as $type)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">{{ $type->name }}</div>
                        <div class="card-body">{{ $type->description }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
