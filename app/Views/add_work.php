<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        <?php include 'css/home.css'; ?>
    </style>
</head>
<body>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
        <a class="navbar-brand" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" href=<<?php echo "/home.php"?>>
            <img src="<?php echo base_url('icons/placeholder.png'); ?>" width="90" height="30">
        </a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Add Work</a>
            </li>
        </ul>
        <button type="button" class="button-basic button-tertiary">Login</button>
    </nav>   

    <div class="container-fluid" id="main-container">
        <div id="list-data-container">
            <div class="d-flex flex-row title-spacing">
                <h4>List Data</h4>
                
                <img class="clickable" src="<?php echo base_url('icons/arrow.png'); ?>" width="32" height="32">
            </div>
            <div class="table-responsive" id="list-data" style="height: 40vh;">
                <table class="table table-bordered" style="overflow-y: scroll;">
                    <caption>List Pekerjaan</caption>
                    <thead class="table-head">
                        <tr>
                            <th scope="col">PID</th>
                            <th scope="col">Tenant</th>
                            <th scope="col">Tenant ID</th>
                            <th scope="col">Tenant Site Name</th>
                            <th scope="col">Tower Owner</th>
                            <th scope="col">Owner Site Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Work Details</th>
                            <th scope="col">Insert</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row" class="align-middle" id="data-pid">11TS07B5403</th>
                            <td class="align-middle" id="data-tenant">TSEL</td>
                            <td class="align-middle" id="data-tenant-id">CRB512</td>
                            <td class="align-middle" id="data-tower-site-name">DESAPUTATML</td>
                            <td class="align-middle" id="data-tower-owner">MITRATEL</td>
                            <td class="align-middle" id="data-tower-site-name">GREGED-SEDONG</td>
                            <td class="align-middle" id="data-address">Contoh: Jl.Raya Desa Putat RT 05/ RW 02 Kec.Sedong Kab.Cirebon</td>
                            <td class="align-middle" id="data-work-details">Survey Work Area</td>

                            <td class="align-middle" id="data-insert-pid">
                                <button class="button-basic button-primary">Insert</button>
                            </td>
                        </tr>

                        <tr>
                            <td scope="row" class="align-middle" id="data-pid">11TS07B5403</th>
                            <td class="align-middle" id="data-tenant">TSEL</td>
                            <td class="align-middle" id="data-tenant-id">CRB512</td>
                            <td class="align-middle" id="data-tower-site-name">DESAPUTATML</td>
                            <td class="align-middle" id="data-tower-owner">MITRATEL</td>
                            <td class="align-middle" id="data-tower-site-name">GREGED-SEDONG</td>
                            <td class="align-middle" id="data-address">Contoh: Jl.Raya Desa Putat RT 05/ RW 02 Kec.Sedong Kab.Cirebon</td>
                            <td class="align-middle" id="data-work-details">Survey Work Area</td>

                            <td class="align-middle" id="data-insert-pid">
                                <button class="button-basic button-primary">Insert</button>
                            </td>
                        </tr>


                        <tr>
                            <td scope="row" class="align-middle" id="data-pid">11TS07B5403</th>
                            <td class="align-middle" id="data-tenant">TSEL</td>
                            <td class="align-middle" id="data-tenant-id">CRB512</td>
                            <td class="align-middle" id="data-tower-site-name">DESAPUTATML</td>
                            <td class="align-middle" id="data-tower-owner">MITRATEL</td>
                            <td class="align-middle" id="data-tower-site-name">GREGED-SEDONG</td>
                            <td class="align-middle" id="data-address">Contoh: Jl.Raya Desa Putat RT 05/ RW 02 Kec.Sedong Kab.Cirebon</td>
                            <td class="align-middle" id="data-work-details">Survey Work Area</td>

                            <td class="align-middle" id="data-insert-pid">
                                <button class="button-basic button-primary">Insert</button>
                            </td>
                        </tr>


                        <tr>
                            <td scope="row" class="align-middle" id="data-pid">11TS07B5403</th>
                            <td class="align-middle" id="data-tenant">TSEL</td>
                            <td class="align-middle" id="data-tenant-id">CRB512</td>
                            <td class="align-middle" id="data-tower-site-name">DESAPUTATML</td>
                            <td class="align-middle" id="data-tower-owner">MITRATEL</td>
                            <td class="align-middle" id="data-tower-site-name">GREGED-SEDONG</td>
                            <td class="align-middle" id="data-address">Contoh: Jl.Raya Desa Putat RT 05/ RW 02 Kec.Sedong Kab.Cirebon</td>
                            <td class="align-middle" id="data-work-details">Survey Work Area</td>

                            <td class="align-middle" id="data-insert-pid">
                                <button class="button-basic button-primary">Insert</button>
                            </td>
                        </tr>

                        <tr>
                            <td scope="row" class="align-middle" id="data-pid">11TS07B5403</th>
                            <td class="align-middle" id="data-tenant">TSEL</td>
                            <td class="align-middle" id="data-tenant-id">CRB512</td>
                            <td class="align-middle" id="data-tower-site-name">DESAPUTATML</td>
                            <td class="align-middle" id="data-tower-owner">MITRATEL</td>
                            <td class="align-middle" id="data-tower-site-name">GREGED-SEDONG</td>
                            <td class="align-middle" id="data-address">Contoh: Jl.Raya Desa Putat RT 05/ RW 02 Kec.Sedong Kab.Cirebon</td>
                            <td class="align-middle" id="data-work-details">Survey Work Area</td>

                            <td class="align-middle" id="data-insert-pid">
                                <button class="button-basic button-primary">Insert</button>
                            </td>
                        </tr>

                        <tr>
                            <td scope="row" class="align-middle" id="data-pid">11TS07B5403</th>
                            <td class="align-middle" id="data-tenant">TSEL</td>
                            <td class="align-middle" id="data-tenant-id">CRB512</td>
                            <td class="align-middle" id="data-tower-site-name">DESAPUTATML</td>
                            <td class="align-middle" id="data-tower-owner">MITRATEL</td>
                            <td class="align-middle" id="data-tower-site-name">GREGED-SEDONG</td>
                            <td class="align-middle" id="data-address">Contoh: Jl.Raya Desa Putat RT 05/ RW 02 Kec.Sedong Kab.Cirebon</td>
                            <td class="align-middle" id="data-work-details">Survey Work Area</td>

                            <td class="align-middle" id="data-insert-pid">
                                <button class="button-basic button-primary">Insert</button>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>
            
        </div>
    
        <div id="add-new-data-container">
            <h4 class="title-spacing">Add Work</h4> 
            <form>
                <div class="form-group form-row">
                    <label class="col-sm-2" for="input-pid">PID</label>
                    <input type="email" class="col-sm-10 form-control" id="p-id" placeholder="Contoh: 11TS07B5403">
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-2" for="input-tenant-name">Tenant</label>
                    <input type="text" class="col-sm-10 form-control" id="tenant-name" placeholder="Contoh: TSEL">
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-2" for="input-tenant-id">Tenant ID</label>
                    <input type="text" class="col-sm-10 form-control" id="tenant-id" placeholder="Contoh: CRB512">
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-2" for="input-tenant-site">Tenant Site Name</label>
                    <input type="text" class="col-sm-10 form-control" id="tenant-site" placeholder="Contoh: DESAPUTATML">
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-2" for="input-tower-owner">Tower Owner</label>
                    <input type="text" class="col-sm-10 form-control" id="tower-name" placeholder="Contoh: MITRATEL">
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-2" for="input-tower-owner">Owner Site Name</label>
                    <input type="text" class="col-sm-10 form-control" id="tower-site" placeholder="Contoh: GREGED-SEDONG">
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-2" for="address">Address</label>
                    <input type="text" class="col-sm-10 form-control" id="address" placeholder="Contoh: Jl.Raya Desa Putat RT 05/ RW 02 Kec.Sedong Kab.Cirebon">
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-2" for="work-details">Work Details</label>
                    <textarea name="Text1" class="col-sm-10 form-control" id="work-details" cols="40" rows="5" placeholder="Contoh: Survey Work Area"></textarea>
                </div>
                <div class="d-flex flex-row justify-content-end">
                    <button type="submit" class="button-basic button-secondary">Submit</button>
                </div>
                
            </form>    
            
        </div>
        <div id="add-new-data-form-container">
            <div class="d-flex flex-row justify-content-end">
                <button type="button" class="button-basic button-tertiary">Add New Form</button>
            </div>        
        </div>


    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('js/script.js'); ?>" ></script>
</body>
</html>