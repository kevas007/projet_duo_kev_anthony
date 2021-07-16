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
            @foreach ($blogs as $blog)
                <tbody>
                    <tr>
                        <th scope="row">{{ $blog->id }}</th>
                        <td>{{ $blog->blog_image }}</td>
                        <td>{{ $blog->blog_titre }}</td>
                        <td>{{ $blog->blog_paragraphe }}</td>
                        <td>
                            <form action="/dynamiques/{{$blog->id}}/delete" method="POST">
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
