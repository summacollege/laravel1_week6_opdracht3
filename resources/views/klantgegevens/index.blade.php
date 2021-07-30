@extends('layouts.app')

@section('title')
    Lijst met klantgegevens
@endsection

@section('content')
    <p class="text-gray-700">Lijst met klantgegevens</p>
    <p class="text-gray-500">
        <table>
            <thead>
                <tr>
                    <th>klantnummer</th>
                    <th>klantnaam</th>
                    <th>klantwoonplaats</th>
                </tr>
            </thead>
            <tbody>
                @foreach($klantgegevens as $klantgegeven)
                    <tr>
                        <td>{{ $klantgegeven->klantnummer }}</td>
                        <td>{{ $klantgegeven->klantnaam }}</td>
                        <td>{{ $klantgegeven->klantwoonplaats }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </p>
@endsection