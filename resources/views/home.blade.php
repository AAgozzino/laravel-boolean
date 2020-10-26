<h1>Elenco studenti</h1>
<table>
    <thead>
        <th>Nome</th>
        <th>Cognome</th>
        <th>Data di nascita</th>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->lastname}}</td>
            <td>{{$student->date_of_birth}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
{{-- @dd($students); --}}