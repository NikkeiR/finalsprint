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
                    <td>{{$p->flight->name}}</td>
                    <td>
                        <form action="{{ route('passenger.destroy', $p->id) }}" method="POST" style="float: left">
                            @method('DELETE') @csrf
                            <input class="btn btn-danger" type="submit" value="DELETE">
                        </form>
                        <form action="{{ route('passenger.show', $p->id) }}" method="GET">
                            <input class="btn btn-primary" type="submit" value="UPDATE">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </section>
    <section class="container">
        <form method="POST" action="/passengers">
            @csrf
            @error('firstname')
            <div style="color: red">{{ $message }}</div>
            @enderror
            <input type="text" name="firstname" placeholder="Firstname:"><br>
            @error('flight_id')
            <div style="color: red">{{ $message }}</div>
            @enderror
            <input type="text" name="flight_id" placeholder="Flight ID:"><br>
            <input class="btn btn-primary" type="submit" value="Add passenger">
        </form>    
    </section>
@endsection