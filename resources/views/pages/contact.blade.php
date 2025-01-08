@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <h1>Contact Us</h1>
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Message:</label>
        <textarea name="message" required></textarea>
        <button type="submit">Send</button>
    </form>
@endsection
