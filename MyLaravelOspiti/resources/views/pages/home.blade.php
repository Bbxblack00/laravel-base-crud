@extends('layouts.main-layout')

@section('principal')

    @foreach ($ospiti as $ospite)

        <div class="row">
            <a href="{{ route('ospite', $ospite -> id) }}">
                [{{ $ospite -> id }}] -> {{ $ospite -> name }}, {{ $ospite -> lastname }}
            </a>
        </div>
        
    @endforeach
    
@endsection