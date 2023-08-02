<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css' integrity='sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ==' crossorigin='anonymous' />
    <title>Teachers list</title>
</head>

<body>
    <div class="container my-5 border border-info p-5">
        <h1>Class 100 Teachers List</h1>
        <a href="{{ route('home') }}">Torna alla home</a>
        <ul class="mt-5">
            @forelse($teachers as $teacher)
            <li>
                <h3>
                    {{ $teacher['name'] }} {{ $teacher['surname'] }}
                </h3>
            </li>
            @empty
            <h3>No teacher in this class</h3>
            @endforelse
        </ul>
    </div>
</body>

</html>