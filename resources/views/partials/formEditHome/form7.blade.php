<section>
    <div class="container mt-5">
        <form action="/ContactTitre/{{$edit->id}}/update" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">titreContact</label>
                <input type="text" value="{{$edit->titreContact }}" name="titreContact" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">sous_titreContact </label>
                <input type="text" value="{{$edit->sous_titreContact }}" name="sous_titreContact" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">paraContact</label>
                <input type="text" value="{{$edit->paraContact}}" name="paraContact" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>
