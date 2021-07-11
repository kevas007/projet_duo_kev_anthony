<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">li1</th>
            <th scope="col">h4_1</th>
            <th scope="col">li_2</th>
            <th scope="col">h4_2</th>
            <th scope="col">li_3</th>
            <th scope="col">h4_3</th>
            <th scope="col">li_4</th>
            <th scope="col">p4</th>
            
        </tr>
    </thead>
    @foreach ($homeDynamiques as $homeDynamique)
    <tbody>
        <tr>
            <th scope="row">{{ $homeDynamique ->id }}</th>
            <td>{{ $homeDynamique ->h4_1_service  }}</td>
            <td>{{ $homeDynamique ->p1_service }}</td>
            <td>{{ $homeDynamique ->h4_2_service  }}</td>
            <td>{{ $homeDynamique ->p2_service  }}</td>
            <td>{{ $homeDynamique ->h4_3_service   }}</td>
            <td>{{ $homeDynamique ->p3_service  }}</td>
            <td>{{ $homeDynamique ->h4_4_service  }}</td>
            <td>{{ $homeDynamique ->p4_service  }}</td>
        </tr>
    </tbody>
    @endforeach
</table>
