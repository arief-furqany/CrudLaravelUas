<!DOCTYPE html>
<html>
<head>
    <title>Create CRUD UAS Record</title>
</head>
<body>
    <h1>Create New Record</h1>
    <form action="{{ route('cruduas.store') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br>
        
        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" required><br>
        
        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" required><br>
        
        <button type="submit">Save</button>
    </form>
</body>
</html>
