<section>
    <div class="container">
        <form action="/dynamique/{{$edit->id}}/update" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Animal</label>
                <input type="text" value="{{$edit->i1_service}}" name="i1_service" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">age</label>
                <input type="text" value="{{$edit->h4_1_service}}" name="h4_1_service" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">age</label>
                <input type="text" value="{{$edit->p1_service}}" name="p1_service" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>
