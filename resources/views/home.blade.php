@extends('layouts.main-layout')

@section('content')
    <ul>
        @foreach ($routes as $route)
            <li>
                <div><span>Azienda: </span>{{ $route->azienda }}</div>
                <div><span>Stazione di partenza: </span>{{ $route->stazione_partenza }}</div>
                <div><span>Stazione di arrivo: </span>{{ $route->stazione_arrivo }}</div>
                <div><span>Orario di partenza: </span>{{ $route->orario_partenza }}</div>
                <div><span>Orario di arrivo: </span>{{ $route->orario_arrivo }}</div>
                <div><span>Codice treno: </span>{{ $route->codice }}</div>
                <div><span>Numero carrozze: </span>{{ $route->n_carrozze }}</div>
                <div><span>In Orario: </span>
                    @if ($route->in_orario == 1)
                        Sì
                    @else
                        No
                    @endif
                </div>
                <div><span>Cancellato: </span>
                    @if ($route->in_orario == 1)
                        Sì
                    @else
                        No
                    @endif
                </div>
            </li>
        @endforeach
    </ul>
@endsection
