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
                        <td><a class="btn btn-primary text-white" href="/blog/{{ $blog->id }}/show">SHOW</a>
                        </td>
                        <td>
                            <form action="/blog/{{$blog->id}}/delete" method="POST">
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
            <form method="post" action="/blogRedirection">
                @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">blog titre</label>
                            <input type="text" name="blog_image" class="form-control " id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">blog soutitre</label>
                            <input type="text" name="blog_titre" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">blog paragraphe</label>
                            <input type="text" name="blog_paragraphe" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>

                <button type="submit" class="btn btn-primary  text-white" >Submit</button>
            </form>
        </div>

    </div>
</section>
