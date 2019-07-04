<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1 class="text-center">Formulir Pendaftaran</h1>
    <br>
    <!-- Form data -->
    <div class="container">
        <form method="POST" action="simpandata.php">
            <!-- Nama -->
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Enter name">
            </div>
            <!-- Jenis Kelamin -->
            <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kelamin" value="Laki-Laki">
                    <label class="form-check-label" for="exampleRadios1">
                        Laki-Laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kelamin" value="Perempuan">
                    <label class="form-check-label" for="exampleRadios2">
                        Perempuan
                    </label>
                </div>
            </div>
            <!-- Agama -->
            <div class="form-group">
                <label>Agama</label>
                <select class="form-control" name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                </select>
            </div>
            <!-- Alamat -->
            <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" rows="4"></textarea>
            </div>
            <!-- Jurusan 1 -->
            <div class="form-group">
                <label>Jurusan 1</label>
                <select class="form-control" name="jurusan1">
                    <option value="Infomatika">Infomatika</option>
                    <option value="Teknik Komputer">Teknik Komputer</option>
                    <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                    <option value="Hubungan Internasional">Hubungan Internasional</option>
                    <option value="Ekonomi">Ekonomi</option>
                </select>
            </div>
            <!-- Jurusan 2 -->
            <div class="form-group">
                <label>Jurusan 2</label>
                <select class="form-control" name="jurusan2">
                    <option value="Infomatika">Infomatika</option>
                    <option value="Teknik Komputer">Teknik Komputer</option>
                    <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                    <option value="Hubungan Internasional">Hubungan Internasional</option>
                    <option value="Ekonomi">Ekonomi</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>