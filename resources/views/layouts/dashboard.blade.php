<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- My CSS -->
    @yield('css')
    <style>
        .row.dashboard {
            min-height: 100vh;
            height: fit-content;
        }
        .row.dashboard .kiri a {
            text-decoration: none;
            color: white;
        }
    </style>

    <!-- CDN Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row dashboard">
            <div class="kiri col col-3 bg-dark">
                <ul class="ps-0">
                    <li class="p-2 m-2 border border-success rounded">
                        <a href="/">Home</a>
                    </li>
                    <li class="p-2 m-2 border border-success rounded">
                        <a href="/dashboard">Dashboard</a>
                    </li>
                    <li class="p-2 m-2 border border-success rounded">
                        <a href="/my">Produk saya</a>
                    </li>
                    <li class="p-2 m-2 border border-success rounded">
                        <a href="/add">Tambah Produk</a>
                    </li>
                </ul>
            </div>
            <div class="kanan col col-9 bg-light">
                @yield('contents')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>