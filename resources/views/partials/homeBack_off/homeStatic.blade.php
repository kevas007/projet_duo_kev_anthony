
<section class="mt-5">
<div class="container">
    <h1>Element statics</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">titre</th>
                <th scope="col">para</th>
                <th scope="col">lien</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        @foreach ($homeStatics as $homeStactic)
                <tr>
                    <th scope="row">{{ $homeStactic->id }}</th>
                    <td>{{ $homeStactic->titre }}</td>
                    <td>{{ $homeStactic->para }}</td>
                    <td>{{ $homeStactic->lein }}</td>
                    <td><a class="btn btn-primary text-white" href="/homeStatic/{{$homeStactic->id}}/show">SHOW</a></td>
                    <td>
                        <form action="/dynamiques/{{$homeStactic->id}}/delete" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">
                            Delete
                        </button>
                    </form>
                    </td>
                </thead>
        @endforeach
        @foreach ($homeTitreStats as $homeTitreStat)
            <tr>
                <th scope="row">{{$homeTitreStat->id }}</th>
                <td>{{$homeTitreStat->titre }}</td>
                <td>{{$homeTitreStat->para }}</td>
                <td><a class="btn btn-primary text-white" href="/homeStatic/{{$homeTitreStat->id}}/show">SHOW</a></td>
                <td>
                    <form action="/dynamiques/{{$homeTitreStat->id}}/delete" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">
                        Delete
                    </button>
                </form>
                </td>
    </thead>
    @endforeach
</tbody>
</div>
</section>
