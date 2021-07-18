<section class="mt-5 ml-3">
    <div class="container">
        <h1 class="mt-3 bg-grey">Element statistics</h1>
        <table class="table">
            <thead class="bg-grey">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">icone1</th>
                    <th scope="col">icone2</th>
                    <th scope="col">icone3</th>
                    <th scope="col">icone4</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            @foreach ($icones as $icone)
                <tbody>
                    <tr>
                        <th scope="row">{{ $icone->id }}</th>
                        <td>{{ $icone->i_1 }}</td>
                        <td>{{ $icone->i_2}}</td>
                        <td>{{ $icone->i_3 }}</td>
                        <td>{{ $icone->i_4 }}</td>
                        <td><a class="btn btn-primary text-white" href="/icone/{{$icone->id}}/show">SHOW</a></td>
                        <td>
                            <form action="/icone/{{$icone->id}}/delete" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">
                                Delete
                            </button>
                        </form>
                        </td>
                </tbody>
            @endforeach
        </table>
    </div>

</section>
