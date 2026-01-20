<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Nieuwe student inschrijven</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
        }

        .container {
            width: 420px;
            margin: 50px auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
        }

        label {
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #2563eb;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #1e4ed8;
        }

        .back {
            text-align: center;
            margin-top: 15px;
        }

        .back a {
            text-decoration: none;
            color: #2563eb;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>Student inschrijven</h1>
    <form action="{{ url('/student') }}" method="POST">

        @csrf

        <label>Naam</label>
        <input type="text" name="name" value="{{ old('name') }}">

        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}">

        <label>Keuzedeel</label>
        <select name="keuzedeel_id">
            <option value="">-- Kies een keuzedeel --</option>
            @foreach($keuzedelen as $keuzedeel)
                <option value="{{ $keuzedeel->id }}"
                    {{ old('keuzedeel_id') == $keuzedeel->id ? 'selected' : '' }}>
                    {{ $keuzedeel->naam }} ({{ $keuzedeel->opleiding }})
                </option>
            @endforeach
        </select>

        <label>Wachtwoord</label>
        <input type="password" name="password">

        <label>Bevestig Wachtwoord</label>
        <input type="password" name="password_confirmation" placeholder="Bevestig wachtwoord">

        <label>Studentnummer</label>
        <input type="text" name="studentnummer" value="{{ old('studentnummer') }}">

        <button type="submit">Inschrijven</button>
    </form>

    <div class="back">
        <a href="{{ url('/students') }}">← Terug naar studentenlijst</a>
     
    </div>
</div>


</body> 
</html>
