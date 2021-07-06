<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Northwind</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            
        </style>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="content">
                <div class="title m-b-md">
                    Northwind
                </div>

                <table class="table table-bordered">
                    <thead>
                        <th>ID REGION</th>
                        <th>REGION</th>
                    </thead>

                    <tbody>
                        @foreach($region as $dataregion)
                        <tr>
                            <td><?= $dataregion->region_id ?></td>
                            <td><?= $dataregion->region_description ?></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </body>
</html>
