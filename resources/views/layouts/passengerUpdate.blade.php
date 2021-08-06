@extends('layouts.master')
@section('content')
    <section class="container">
        <form action="{{ route('passenger.update', $passengers->id) }}" method="POST">
            @method('PUT') @csrf
            <input type="text" name="firstname" value="{{ $passengers->firstname }}"><br>
            <input type="number" name="flight_id" value="{{ $passengers->flight_id }}"><br>
            <input class="btn btn-primary" type="submit" value="UPDATE">
        </form>
    </section>
@endsection