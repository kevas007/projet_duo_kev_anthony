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
            @foreach ($blog2 as $blog)
                <tr>
                    <th scope="row">{{ $blog->id }}</th>
                    <td>{{ $blog->blog_titre }}</td>
                    <td>{{ $blog->blog_soutitre }}</td>

                    <td><a class="btn btn-primary text-white" href="/blogStatic/{{ $blog->id }}/show">SHOW</a>
                    </td>
                    <td>
                        <form action="/blogStatic/{{ $blog->id }}/delete" method="POST">
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

</section>
