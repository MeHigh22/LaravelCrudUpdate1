@extends('layouts.index')


@section("content")
    @include("partials.nav")
    <section class="container mt-5">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Animal</th>
            <th scope="col">Genre</th>
            <th scope="col">Show</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($animals as $animal)
            <tr>
              <th scope="row">{{$animal->id}}</th>
              <th scope="row">{{$animal->genre}}</th>
              <th scope="row">{{$animal->age}}</th>
              <td>
                <a href="/show-animal/{{$animal->id}}">Show</a>
              </td>
            </tr>
          @endforeach
        </tbody>
    </table>
</section>
@endsection
