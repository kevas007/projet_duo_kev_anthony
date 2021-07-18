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
                    <td><a class="btn btn-primary text-white" href="/homeStatic/{{ $homeStactic->id }}/show">SHOW</a>
                    </td>
                    <td>
                        <form action="/homeStatic/{{ $homeStactic->id }}/delete" method="POST">
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

            <table class="table mt-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">titre</th>
                        <th scope="col">para</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <thead>
                    {{-- {{ dd($homeTitreStats) }} --}}
                    @foreach ($homeTitreStats as $homeTitreStat)
                        <tr>
                            <th scope="row">{{ $homeTitreStat->id }}</th>
                            <td>{{ $homeTitreStat->titre }}</td>
                            <td>{{ $homeTitreStat->para }}</td>
                            <td>
                                <a class="btn btn-primary text-white"
                                    href="/titreStatic/{{$homeTitreStat->id}}/show">SHOW</a></td>
                            <td>
                                <form action="/titreStatic/{{ $homeTitreStat->id }}/delete" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>
                </thead>
                @endforeach

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">image</th>
                            <th scope="col">titre</th>
                            <th scope="col">para</th>
                            <th scope="col">lien</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    @foreach ( $sectionHomeStatics as $sectionHomeStatic)
                        <tr>
                            <th scope="row">{{ $sectionHomeStatic->id }}</th>
                            <td>{{ $sectionHomeStatic->image }}</td>
                            <td>{{ $sectionHomeStatic->titre }}</td>
                            <td>{{ $sectionHomeStatic->para }}</td>
                            <td>{{ $sectionHomeStatic->lien }}</td>
                            <td><a class="btn btn-primary text-white" href="/SectionHome/{{ $sectionHomeStatic->id }}/show">SHOW</a>
                            </td>
                            <td>
                                <form action="/SectionHome/{{ $sectionHomeStatic->id }}/delete" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>
                            </thead>
                    @endforeach


                <table class="table mt-2">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">titre</th>
                            <th scope="col">lien</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <thead>
                        @foreach ($homeTitres as $homeTitre)

                            <tr>
                                <th scope="row">{{ $homeTitre->id }}</th>
                                <td>{{ $homeTitre->titre }}</td>
                                <td>{{ $homeTitre->lien }}</td>
                                <td>
                                    <a class="btn btn-primary text-white"
                                        href="/titre/{{$homeTitre->id}}/show">SHOW</a></td>
                                <td>
                                    <form action="/titre/{{ $homeTitre->id }}/delete" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                    </thead>
                    @endforeach

    </div>
</section>
