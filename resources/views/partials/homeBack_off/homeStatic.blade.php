{{--
<section class="mt-5">
    <h1>Element statics</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">titreHome</th>
                <th scope="col">para1</th>
                <th scope="col">para2</th>
                <th scope="col">img</th>
                <th scope="col">sous_titre1</th>
                <th scope="col">para3</th>
                <th scope="col">ahref</th>
                <th scope="col">sous_titre2</th>
                <th scope="col">para4</th>
                <th scope="col">para5</th>
                <th scope="col">ahref2</th>
            </tr>
        </thead>
        @foreach ($homeStatics as $homeStactic)
            <tbody>
                <tr>
                    <th scope="row">{{ $homeStactic->id }}</th>
                    <td>{{ $homeStactic->titreHome }}</td>
                    <td>{{ $homeStactic->para1 }}</td>
                    <td>{{ $homeStactic->para2 }}</td>
                    <td>{{ $homeStactic->img }}</td>
                    <td>{{ $homeStactic->sous_titre1 }}</td>
                    <td>{{ $homeStactic->para3 }}</td>
                    <td>{{ $homeStactic->ahref }}</td>
                    <td>{{ $homeStactic->sous_titre2 }}</td>
                    <td>{{ $homeStactic->para4 }}</td>
                    <td>{{ $homeStactic->para5 }}</td>
                    <td>{{ $homeStactic->ahref2 }}</td>
            </tbody>
        @endforeach
    </table>

</section>

<section class="mt-5">
    <div class="container">
        <div class="row">
            <form method="post" action="/newstatic">
                @csrf
                <div class="d-flex">
                    <div class="col-4 ">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">titreHome</label>
                            <input type="text" name="titreHome" class="form-control " id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Para1</label>
                            <input type="text" name="para1" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Para2</label>
                            <input type="text" name="para2" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">img</label>
                            <input type="text" name="img" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">sous_titre1</label>
                            <input type="text" name="sous_titre1" class="form-control " id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">para3</label>
                            <input type="text" name="para3" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">ahref</label>
                            <input type="text" name="ahref" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">sous_titre2</label>
                            <input type="text" name="sous_titre2" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">para4</label>
                            <input type="text" name="para4" class="form-control " id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">para5</label>
                            <input type="text" name="para5" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">ahref2 </label>
                            <input type="text" name="ahref2" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</section> --}}
