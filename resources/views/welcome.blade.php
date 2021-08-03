@extends("layouts.master")
@section("content")
    <section class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Flight</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach($flights as $fl)
                <tr>
                    <td>{{$fl->id}}</td>
                    <td>{{$fl->name}}</td>
                    <td>
                        @foreach($fl->passenger as $p)
                            {{$p->firstname}}
                        @endforeach
                    </td>
                    <td> 
                        <form action="{{ route('flight.destroy', $fl->id) }}" method="POST" style="float: left">
                        @method('DELETE') @csrf
                        <input class="btn btn-danger" type="submit" value="DELETE">
                        </form>
                        <form action="{{ route('flight.show', $fl->id) }}" method="GET">
                            <input class="btn btn-primary" type="submit" value="UPDATE">
                        </form>                
                    </td>
                </tr>
            @endforeach
        </table>
    </section>
    <section class="container">
        <form method="POST" action="/">
            @csrf
            @error('flight')
            <div style="color: red">{{ $message }}</div>
            @enderror
            <input type="text" name="flight" placeholder="Flight:"><br>
            <input class="btn btn-primary" type="submit" value="Add flight">
        </form>    
    </section>
@endsection