<section class="mt-5 ml-3">
    <h1>Element dynamiques</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">i1_service</th>
                <th scope="col">h4_1_service</th>
                <th scope="col">p1_service</th>
                <th scope="col"></th>
            </tr>
        </thead>
        @foreach ($homeDynamiques as $homeDynamique)
            <tbody>
                <tr>
                    <th scope="row">{{ $homeDynamique->id }}</th>
                    <td>{{ $homeDynamique->i1_service }}</td>
                    <td>{{ $homeDynamique->h4_1_service }}</td>
                    <td>{{ $homeDynamique->p1_service }}</td>
                    <td>
                        <form action="/dynamiques/{{$homeDynamique->id}}/delete" method="POST">
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

</section>

<section class="mt-5 mb-3" >
    <div class="container">
        <div class="row">
            <form method="post" action="/newdynamiques">
                @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Titre1</label>
                            <input type="text" name="i1_service" class="form-control " id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Para1</label>
                            <input type="text" name="h4_1_service" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Titre2</label>
                            <input type="text" name="p1_service" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                <button type="submit" class="btn btn-primary  text-white" >Submit</button>
            </form>
        </div>

    </div>
</section>


