@extends("layouts.index")


@section("content")
    <section class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$show->genre}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$show->age}}</h6>
          <a href="/edit-animal/{{$show->id}}" class="btn btn-primary">Edit</a>
          <form action="/delete-animal/{{$show->id}}" method="POST">
            @csrf
            @method("DELETE")
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </div>
      </div>
</section>
@endsection
