@extends('layouts.main-layout')

@section('principal')

    <h1>NUOVO OSPITE </h1>
    
    <form method="POST" action="{{ route('store') }}">
        
        @csrf
        @method('POST')

        
        <div class="row">
            <label for="name" class="inp-wrk">name:</label>
            <input type="text" name="name" class="inp-wrk">
        </div>
        
        <div class="row">
            <label for="lastname" class="inp-wrk">lastname:</label>
            <input type="text" name="lastname" class="inp-wrk">
        </div>
        
        <div class="row">
            <label for="date_of_birth" class="inp-wrk">giorno di nascita:</label>
            <input type="date" name="date_of_birth" class="inp-wrk">
        </div>
        
        <div class="row">
            <label for="document_type" class="inp-wrk">tipo di documento:</label>
            <input type="text" name="document_type" class="inp-wrk">
        </div>

        <div class="row">
            <label for="document_number" class="inp-wrk">numero di documento:</label>
            <input type="text" name="document_number" class="inp-wrk">
        </div>

        <div class="row">
            <button class="bnt">
                CREATE
            </button>
        </div>  
    </form>


@endsection
