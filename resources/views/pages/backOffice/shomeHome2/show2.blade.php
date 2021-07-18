@extends('template.back')

@section('body')
<section>
    <div class="container">
        <h1>{{$show->id}}</h1>
        <p>{{ $show->titre }}</p>
        <h1>{{$show->lien}}</h1>
        <a class="btn btn-success text-white" href="/titre/{{$show->id}}/edit">EDIT</a>
    </div>
</section>
@endsection

