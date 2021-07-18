@extends('template.back')


@section('body')
    <section>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    {{ $show->id }}
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $show->titre }}</li>
                    <li class="list-group-item">{{ $show->titre_section }}</li>
                    <li class="list-group-item">{{ $show->titre_btn }}</li>
                </ul>
            </div>

            <br>
            <br>
            <br>

            <a class="btn btn-success text-white" href="/portfolioStatic/{{$show->id}}/edit">EDIT</a>

        </div>
    </section>
@endsection
