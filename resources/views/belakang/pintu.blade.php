<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('assets/belakang/css/login.css') }}" rel="stylesheet" type="text/css">
    
</head>
<body>

    <div class="card shadow-lg login-card">
        
        <div class="login-header">
            <h3>Masuk</h3>
            <p class="mb-0">Masuk Ke Dashboard CMS Website DP3M</p>
        </div>

        <div class="card-body">

            <form action="#" method="POST">

                <div class="mb-3">
                    <label class="form-label">Nama Pengguna</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Pengguna">
                </div>

                <div class="mb-3">
                    <label class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" placeholder="Masukkan Kata Sandi">
                </div>

                <div class="d-flex justify-content-between mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="IngatSaya">
                        <label class="form-check-label" for="IngatSaya">
                            Ingat Saya
                        </label>
                    </div>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-login">
                        Masuk
                    </button>
                </div>

            </form>

        </div>
    </div>

</body>
</html>

