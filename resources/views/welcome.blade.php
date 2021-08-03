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
                    <td>//TODO</td>
                    <td>//TODO DELETE UPDATE</td>
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