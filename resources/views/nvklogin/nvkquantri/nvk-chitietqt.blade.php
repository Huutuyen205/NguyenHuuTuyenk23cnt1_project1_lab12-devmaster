<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin chi tiết </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Thông tin chi tiết</h3>
            </div>
            <div class="card-body">
                @if ($nvkquantri)
                    <p class="card-text">
                        <b>id admin:</b> {{ $nvkquantri->id  }}
                    </p>
                    <p class="card-text">
                        <b>Tài Khoản:</b> {{ $nvkquantri->nvkTaiKhoan  }}
                    </p>
                    <p>
                        <b>Mật Khẩu:</b> {{ $nvkquantri->nvkMatKhau }}
                    </p>
                    <p>
                        <b>Trạng Thái:</b> {{ $nvkquantri->nvkTrangThai }}
                    </p>
                @else
                    <p>Không tìm thấy thông tin quan tri.</p>
                @endif
            </div>
            <div class="card-footer">
                <a href="/nvkAdmins/nvk-listqt" class="btn btn-primary">Quay lại</a>
            </div>
        </div>
    </section>

</body>
</html>
