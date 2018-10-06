@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Shop name: {{ $shop->name }}</div>

                <div class="card-body">
                    <p>Location: {{ $shop->location }}</p>
                    <p>Address: {{ $shop->address }}</p>
                    <p>Create at: {{ $shop->created_at }}</p>
                </div>
                <p><a href="{{ url('shop') }}">Back to shop list</a> </p>
            </div>
        </div>
    </div>
</div>
@endsection
