@extends("layouts.master")
@section("content")
    <section class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Flight</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach($passengers as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->firstname}}</td>
                    <td>//TODO Flight</td>
                    <td>//TODO DELETE UPDATE</td>
                </tr>
            @endforeach
        </table>
    </section>
@endsection