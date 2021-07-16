@extends('template.back')

@section('body')
<section>
    <div class="container">
        <h1>{{$show->id}}</h1>
        <h1>{{$show->titre}}</h1>
        <h1>{{$show->para}}</h1>
        <h1>{{$show->lein}}</h1>

        <a class="btn btn-success text-white" href="/homeStatic/{{$show->id}}/edit">EDIT</a>
    </div>
</section>
@endsection

