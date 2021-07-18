@extends('template.back')

@section('body')
<section>
    <div class="container">
        <h1>{{$show->id}}</h1>
        <h1>{{ $show->titreContact}}</h1>
        <h1>{{$show->sous_titreContact}}</h1>
        <h1>{{$show->paraContact }}</h1>
        <a class="btn btn-success text-white" href="/ContactTitre/{{$show->id}}/edit">EDIT</a>
    </div>
</section>
@endsection

