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
            @foreach ($portfolios2 as $portfolios)
                <tr>
                    <th scope="row">{{ $portfolios->id }}</th>
                    <td>{{ $portfolios->titre }}</td>
                    <td>{{ $portfolios->titre_section }}</td>
                    <td>{{ $portfolios->titre_btn }}</td>
                    <td><a class="btn btn-primary text-white" href="/portfolioStatic/{{ $portfolios->id }}/show">SHOW</a>
                    </td>
                    <td>
                        <form action="/portfolioStatic/{{ $portfolios->id }}/delete" method="POST">
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
