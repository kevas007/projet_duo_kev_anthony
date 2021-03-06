<section class="mt-5 ml-3">
    <div class="container">
        <h1 class="mt-3 bg-grey">Element dynamiques</h1>
        <table class="table">
            <thead class="bg-grey">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">titre portofolio</th>
                    <th scope="col">paragraphe portofolio</th>
                    <th scope="col">image</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            @foreach ($portfolios as $portfolio)
                <tbody>
                    <tr>
                        <th scope="row">{{$portfolio->id}}</th>
                        <td>{{$portfolio->titre}}</td>
                        <td>{{$portfolio->paragraphe}}</td>
                        <td>{{$portfolio->img}}</td>
                        <td>
                            <form action="/portfolio/{{$portfolio->id}}/delete" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">
                                Delete
                            </button>
                        </form>
                        </td>
                        <td>
                            <a class="btn btn-primary text-white" href="/portfolio/{{$portfolio->id}}/show">SHOW</a>
                        </td>
                </tbody>
            @endforeach
        </table>
    </div>

</section>

<section class="mt-5 mb-3" >
    <div class="container">
        <div class="row">
            <form method="post" action="/porto">
                @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1"   class="form-label">titre</label>
                            <input type="text" name="titre" class="form-control " id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">paragraphe</label>
                            <input type="text" name="paragraphe" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">img</label>
                            <input type="text" name="img" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                <button type="submit" class="btn btn-primary  text-white" >Submit</button>
            </form>
        </div>

    </div>
</section>
