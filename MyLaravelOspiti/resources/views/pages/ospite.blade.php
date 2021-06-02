@extends('layouts.main-layout')

@section('principal')

    <h1>Ospite numero: {{ $ospite -> id }}</h1>
    <h2>{{ $ospite -> name }}</h1>
    <h1>{{ $ospite -> lastname }}</h2>
    <p class="br">{{ $ospite -> date_of_birth }}</p>

    <p class="br">{{ $ospite -> document_type }}</p>

    <p class="br">{{ $ospite -> document_number }}</p>

    <a href="{{ route('create') }}" class="btn">
        <button>
            CREATE
        </button>
    </a>
    
@endsection