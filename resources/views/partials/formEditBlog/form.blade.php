<section>
    <div class="container">
        <form action="/blog/{{$edit->id}}/update" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Info1</label>
                <input type="text" value="{{$edit->blog_image}}" name="i1_service" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Info2</label>
                <input type="text" value="{{$edit->blog_titre}}" name="h4_1_service" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Info3</label>
                <input type="text" value="{{$edit->blog_paragraphe}}" name="p1_service" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>
