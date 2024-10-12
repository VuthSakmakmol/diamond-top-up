<!-- resources/views/form.blade.php -->

@extends('layouts.app')

@section('title', 'Insert Your ID')

@section('content')
    <h1>Submit Your Form</h1>

    <!-- Display success or error messages -->
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <form action="{{ route('form.submit') }}" method="POST">
        @csrf
        <div>
            <input type="hidden" name="price" id="price-input">
            <label for="field_one">Player ID:</label>
            <input type="text" name="field_one" id="field_one" value="{{ old('field_one') }}">
            @error('field_one') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="field_two">Confirmation ID:</label>
            <input type="text" name="field_two" id="field_two" value="{{ old('field_two') }}">
            @error('field_two') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>

    <!-- Go Back Button -->
    <a href="{{ route('diamonds.show') }}" class="btn btn-secondary mt-3">Go Back to Diamonds</a>
@endsection
