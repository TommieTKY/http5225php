<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toronto Beaches Observations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <main class="container p-4">
        <h1 class="mb-4">Toronto Beaches Observations</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Data Collection Date</th>
                <th scope="col">Beach Name</th>
                <th scope="col">Air Temp</th>
                <th scope="col">Wind Speed</th>
                <th scope="col">Wind Direction</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include('connection.php');
                    $query = "SELECT * FROM observations_airtemp AS temp INNER JOIN observations_wind AS wind ON temp._id = wind._id WHERE airTemp > 0 AND windSpeed > 0;";
                    $observations = mysqli_query($connect, $query);

                    foreach($observations as $observation){
                        echo '<tr>
                                <th scope="row">'.$observation['_id'].'</th>
                                <td>'.$observation['dataCollectionDate'].'</td>
                                <td>'.$observation['beachName'].'</td>';
                                if ($observation['airTemp'] <10) {
                                    echo '<td class="bg-primary">'.$observation['airTemp'].'</td>';
                                } else {
                                    echo '<td>'.$observation['airTemp'].'</td>';
                                }
                                if ($observation['windSpeed'] > 20) {
                                    echo '<td class="bg-danger">'.$observation['windSpeed'].'</td>';
                                } else {
                                    echo '<td>'.$observation['windSpeed'].'</td>';
                                }
                                echo '<td>'.$observation['windDirection'].'</td>
                            </tr>';
                    }
                ?>
            </tbody>
        </table>
    <main>
</body>
</html>