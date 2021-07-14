<section class="container mt-5">
    <form action="/update-animal/{{$edit->id}}" method="POST">
      @csrf
      @method("PUT")
        <div class="form-group">
          <label for="exampleInputEmail1">Genre : </label>
          <input type="text" name="genre" value="{{$edit->genre}}" class="form-control" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Age : </label>
          <input type="number" name="age" value="{{$edit->age}}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>
