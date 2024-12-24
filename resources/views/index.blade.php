<!DOCTYPE html>
<html>
<head>
    <title>CRUD UAS List</title>
</head>
<body>
    <h1>CRUD UAS Records</h1>
    <a href="{{ route('cruduas.create') }}">Add New Record</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $record)
                <tr>
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->nama }}</td>
                    <td>{{ $record->nim }}</td>
                    <td>{{ $record->jurusan }}</td>
                    <td>
                        <a href="{{ route('cruduas.edit', $record->id) }}">Edit</a>
                        <form action="{{ route('cruduas.destroy', $record->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
