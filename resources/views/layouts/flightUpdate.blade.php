@extends('layouts.master')
@section('content')
    <section class="container">
        <form action="{{ route('flight.update', $flights->id) }}" method="POST">
            @method('PUT') @csrf
            <input type="text" name="flight" value="{{ $flights->name }}"><br>
            <input class="btn btn-primary" type="submit" value="UPDATE">
        </form>
    </section>
@endsection
