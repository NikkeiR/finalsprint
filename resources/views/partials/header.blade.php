<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link {{Request::routeIs('flights') ? 'active' : ''}}"
               style="{{Request::routeIs('flights') ? 'background-color: lightgrey' : ''}}"
               href="{{route('flights')}}">Flights</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{Request::routeIs('passengers') ? 'active' : ''}}" 
               style="{{Request::routeIs('passengers') ? 'background-color: lightgrey' : ''}}"
               href="{{route('passengers')}}">Passengers</a>
        </li>
    </ul>
</nav>