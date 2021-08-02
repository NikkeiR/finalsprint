<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link {{Request::routeIs('flight.index') ? 'active' : ''}}"
               style="{{Request::routeIs('flight.index') ? 'background-color: lightgrey' : ''}}"
               href="{{route('flight.index')}}">Flights</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{Request::routeIs('passenger.index') ? 'active' : ''}}" 
               style="{{Request::routeIs('passenger.index') ? 'background-color: lightgrey' : ''}}"
               href="{{route('passenger.index')}}">Passengers</a>
        </li>
    </ul>
</nav>