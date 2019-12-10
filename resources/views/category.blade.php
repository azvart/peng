@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        	@foreach($products as $prod)
            <div class="card">
                <div class="card-header">
                	{{$prod->name}}
                </div>
                 
                <div class="card-body">
                	{{$prod->picture}}
                	{{$prod->small_body}}
                   {{$prod->price}}
                	
                </div>
          
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
