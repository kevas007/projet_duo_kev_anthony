@extends('template.back')

@section('body')
<section>
    <div class="container">
        <h1>{{$show->id}}</h1>
        <p>{{ $show->i1_service }}</p>
        <h1>{{$show->h4_1_service}}</h1>
        <h1>{{$show->p1_service }}</h1>
        <a class="btn btn-success text-white" href="/dynamique/{{$show->id}}/edit">EDIT</a>
    </div>
</section>
@endsection

