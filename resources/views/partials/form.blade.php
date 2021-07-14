<section class="container mt-5">
    <form action="/store-animal" method="POST">
      @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Genre : </label>
          <input type="text" name="genre" class="form-control" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Age : </label>
          <input type="number" name="age" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</section>
