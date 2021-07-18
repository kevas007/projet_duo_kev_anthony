@extends('template.back')

@section('body')
<section>
    <div class="container">
        <h1>{{$show->id}}</h1>
        <h1>{{ $show->name}}</h1>
        <h1>{{$show->phone}}</h1>
        <h1>{{$show->fax }}</h1>
        <h1>{{$show->email }}</h1>
        <a class="btn btn-success text-white" href="/Contact/{{$show->id}}/edit">EDIT</a>
    </div>
</section>
@endsection
