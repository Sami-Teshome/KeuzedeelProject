<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Studentenlijst</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #2563eb;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            width: 80%;
            margin: 30px auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .success {
            background-color: #dcfce7;
            color: #166534;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .top-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .top-actions a {
            background-color: #2563eb;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }

        .top-actions a:hover {
            background-color: #1e4ed8;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background-color: #f1f5f9;
        }

        .empty {
            text-align: center;
            color: #666;
            padding: 20px;
        }

        footer {
            text-align: center;
            margin-top: 30px;
            color: #666;
        }
    </style>
</head>

<body>

<header>
    <h1>Keuzedeel Inschrijfsysteem</h1>
    <p>Overzicht van ingeschreven studenten</p>
</header>

<div class="container">
        

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <div class="top-actions">
        <h2>Studentenlijst</h2> 
        <a href="{{ route('students.create') }}">+ Nieuwe student inschrijven</a>
    </div>

    @if($students->count())
        <table>
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Email</th>
                    <th>Keuzedeel</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->keuzedeel ?? 'Nog niet gekozen' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="empty">
            Geen studenten ingeschreven.
        </div>
    @endif

</div>

<footer>
    © {{ date('Y') }} Keuzedeel App – Schoolproject
</footer>

</body>
</html>
