@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Shops | <a href="{{ url('create') }}">Add new shop</a> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($shops as $shop)
                        <li><a href="{{ url('show', $shop->id) }}">{{ $shop->name }}</a> - <a href="{{ url('edit', $shop->id) }}">Edit</a> -
                            <form id="delete-form-{{ $shop->id }}" method="post" action="{{ url('delete', $shop->id) }}" style="display: none">
                                {{csrf_field()}}
                                {{ method_field('DELETE') }}
                            </form>
                            <a href="" onclick="
                                    if(confirm('Are you sure, You want to Delete this ??'))
                                    {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $shop->id }}').submit();
                                    }
                                    else {
                                    event.preventDefault();
                                    }">
                                Delete </a>
                        </li>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
