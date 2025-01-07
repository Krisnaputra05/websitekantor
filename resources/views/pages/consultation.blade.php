@extends('layouts.app')

@section('title', 'Consultation')

@section('content')
    <h1>Consultation</h1>
    <form id="consultationForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="button" onclick="sendToWhatsApp()">Submit</button>
    </form>

    <script>
        function sendToWhatsApp() {
            // Data dari form
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Nomor WhatsApp tujuan (format: 628XXXXXXXXXX)
            const phoneNumber = '6281234567890';

            // Format pesan untuk WhatsApp
            const text = `Hello, my name is ${name}. My email is ${email}. I would like to consult regarding: ${message}`;

            // Buat URL WhatsApp
            const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(text)}`;

            // Redirect ke WhatsApp
            window.open(url, '_blank');
        }
    </script>
@endsection
