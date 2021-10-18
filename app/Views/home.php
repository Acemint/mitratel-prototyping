<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        <?php include 'css/home.css'; ?>
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
        <a class="navbar-brand" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" href=<<?php echo "/home.php"?>>
            <img src="<?php echo base_url('icons/placeholder.png'); ?>" width="100" height="30">
        </a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Add Work</a>
            </li>
        </ul>
        <button type="button" class="button-basic button-tertiary">Login</button>
    </nav>    


    <div class="container-fluid" id="main-container">
        <div id="main-content">
            <h3 class="title-spacing-primary">Mitratel</h3> 
            <div class="d-flex flex-row" id="search-bar">
                <div class="mr-auto">
                    <form class="form-inline" method="get" id="search-form">
                        <div class="form-group" id="form-search">
                            <input type="keywords" class="form-control" id="keyword-search" placeholder="Masukkan kata kunci">
                        </div>
                        <button type="submit" class="button-basic button-search">Search</button>
                    </form>
                </div>
                
                <div>
                    <button class="btn button-filter">Filter</button>
                </div>

            </div>
                
            
            <div class="table-responsive">
                <table class="table table-bordered">
                    <caption>Data Pekerjaan</caption>
                    <thead class="table-head">
                        <tr>
                            <th scope="col">No. </th>
                            <th scope="col">Tanggal Pelaksanaan</th>
                            <th scope="col">Waktu Kerja</th>
                            <th scope="col">Jenis Pekerjaan</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row" class="align-middle" id="nomor-baris">DMT.4009/OM1/ROW-b1200000/VIII/2021</th>
                            <td class="align-middle" id="tanggal-baris">14 Oktober  2021  s/d  31  Oktober 2021</td>
                            <td class="align-middle" id="waktu-baris">08:00 – 17:00 WIB</td>
                            <td class="align-middle" id="jenis-baris">Survey Asset Stolen</td>
                            <td class="align-middle" id="lokasi-baris">Online</td>
                            <td class="align-middle" id="more-baris">
                                <button class="button-basic button-tertiary">View More</button>
                                <button class="button-basic button-primary">Print</button>
                            </td>
                        </tr>

                        <tr>
                            <td scope="row" class="align-middle" id="nomor-baris">DMT.4009/OM1/ROW-b1200000/VIII/2021</th>
                            <td class="align-middle" id="tanggal-baris">14 Oktober  2021  s/d  31  Oktober 2021</td>
                            <td class="align-middle" id="waktu-baris">08:00 – 17:00 WIB</td>
                            <td class="align-middle" id="jenis-baris">Survey Asset Stolen</td>
                            <td class="align-middle" id="lokasi-baris">Online</td>
                            <td class="align-middle" id="more-baris">
                                <button class="button-basic button-tertiary">View More</button>
                                <button class="button-basic button-primary">Print</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('js/script.js'); ?>" ></script>
</body>
</html>