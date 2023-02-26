<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <title>tables</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
        <div class="col-lg-4">
            <table class="table" id="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>District</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td>Kalule Denis</td>
                        <td>Masaka</td>
                    </tr>
                    <tr>
                        <td scope="row">2</td>
                        <td>Ademun Angella</td>
                        <td>Kumi</td>
                    </tr>
                    <tr>
                        <td scope="row">3</td>
                        <td>Atim Priestlyn</td>
                        <td>Gulu</td>
                    </tr>
                    <tr>
                        <td scope="row">4</td>
                        <td>Bugembe john</td>
                        <td>Masaka</td>
                    </tr>
                    <tr>
                        <td scope="row">5</td>
                        <td>Nassimba Martha</td>
                        <td>Gaba</td>
                    </tr>
                    <tr>
                        <td scope="row">6</td>
                        <td>Annociet Happy</td>
                        <td>Fort Portal</td>
                    </tr>
                    <tr>
                        <td scope="row">7</td>
                        <td>Ejunu Patrick</td>
                        <td>Soroti</td>
                    </tr>
                    <tr>
                        <td scope="row">8</td>
                        <td>Nalukenge Precious</td>
                        <td>Kyotera</td>
                    </tr>
                    <tr>
                        <td scope="row">9</td>
                        <td>Kivumbi Achilles</td>
                        <td>Mpigi</td>
                    </tr>
                    <tr>
                        <td scope="row">10</td>
                        <td>Ddembe Humphrey</td>
                        <td>Kiboga</td>
                    </tr>
                    <tr>
                        <td scope="row">11</td>
                        <td>Mutesi Jackie</td>
                        <td>Lwengo</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-4"></div>
        <div class="col-lg-4"></div>
    </div>
    </div>

    <script src="./jquery-3.5.1.min.js"></script>
    <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#table').dataTable();
        } );

        
    </script>
</body>
</html>