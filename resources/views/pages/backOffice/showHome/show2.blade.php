@extends('template.back')


@section('body')
    <section>
        <div class="container mt-5 d-flex align-items-center justify-content-center">

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('assets/img/'. $show->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> {{ $show->id }}</h5>
                    <p class="card-text">{{ $show->titre }}</p>
                    <p class="card-text">{{ $show->para }}</p>
                    <p class="card-text">{{ $show->lein }}</p>
                    <a class="btn btn-success text-white" href="/SectionHome/{{ $show->id }}/edit">EDIT</a>
                </div>
            </div>
        </div>
    </section>
@endsection
