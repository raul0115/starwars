@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                   <h1>{{$people->name}}</h1>
                    <h4>Caracteristicas:</h4>
                    
                    <p>height :{{$people->height}}</p>
                    <p>hair color :{{$people->hair_color}}</p>
                    <p>skin color :{{$people->skin_color}}</p>
                    <p>eye color :{{$people->eye_color}}</p>
                    <p>birth year :{{$people->birth_year}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection