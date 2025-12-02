<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Formulir Pendaftaran </title>
</head>

<body>
    <h1>Form Pendaftaran Kontak</h1>
    <div class="container p-2 m-5 y-2 w-50">
        @if (session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif
        <form action="/form" method="POST">
            @csrf

            <label>Nama:</label><br>
            <input type="text" name="nama" required>
            <br><br>

            <label>Nomor Hp</label><br>
            <input type="text" name="nohp" required>
            <br><br>

            <button type="submit">Kirim</button>
        </form>
    </div>

    <div class="container p-2 m-5 y-2 w-50 ">

        <table class="table table-bordered border-primary text-center">
            <thead>
                <tr>

                    <th>No</th>
                    <th>Nama</th>
                    <th>Nomor Hp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach ($contacts as $contact)
                    <tr>

                        <td> {{ $no++ }} </td>
                        <td>{{ $contact->nama }}</td>
                        <td>{{ $contact->nohp }}</td>
                        <td>
                            <a href="">Edit</a>
                            <a href="">Hapus</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <footer>
        <p>WELLWEL</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
