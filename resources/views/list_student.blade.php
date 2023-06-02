@extends("layout.layout")
@section("main")
<section>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Address</th>
                <th scope="col">Telephone</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $st)
            <tr>
                <th scope="row">{{$st->id}}</th>
                <td>{{$st->name}}</td>
                <td>{{$st->age}}</td>
                <td>{{$st->address}}</td>
                <td>{{$st->telephone}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{url("/create_student")}}" class="btn btn-info">Add Student</a>
    </div>
</section>
@endsection
