@extends('template.back')

@section('body')
<section>
    <div class="container">
        <h1>{{$show->id}}</h1>
        <h1>{{ $show->i_1}}</h1>
        <h1>{{$show->i_2}}</h1>
        <h1>{{$show->i_3 }}</h1>
        <h1>{{$show->i_4 }}</h1>
        <a class="btn btn-success text-white" href="/icone/{{$show->id}}/edit">EDIT</a>
    </div>
</section>
@endsection

