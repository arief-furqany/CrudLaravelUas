<!DOCTYPE html>
<html>
<head>
    <title>Edit CRUD UAS Record</title>
</head>
<body>
    <h1>Edit Record</h1>
    <form action="{{ route('cruduas.update', $record->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{ $record->nama }}" required><br>
        
        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" value="{{ $record->nim }}" required><br>
        
        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" value="{{ $record->jurusan }}" required><br>
        
        <button type="submit">Update</button>
    </form>
</body>
</html>
