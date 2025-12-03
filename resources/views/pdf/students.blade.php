<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftaran Mahasiswa</title>
    <style>
        body { font-family: sans-serif; font-size: 10pt; }
        h2 { text-align: center; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Laporan Data Mahasiswa Baru</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Jalur</th>
                <th>Prodi 1</th>
                <th>No HP</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $index => $student)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $student->nama_lengkap }}</td>
                <td>{{ $student->jalur }}</td>
                <td>{{ $student->program_studi_1 }}</td>
                <td>{{ $student->nomor_hp }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>