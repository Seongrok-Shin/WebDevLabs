<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Using file functions</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <h1>Web Development - Lab05</h1>
    <?php require_once("../../../conf/settings.php"); //please make sure the path is correct
    $conn = @mysqli_connect(
        $host,
        $user,
        $pswd,
        $dbnm
    ) or die('Failed to connect to server');

    $query = 'SELECT car_id, make, model, price FROM cars';
    $result = mysqli_query($conn, $query);
    $num_row = mysqli_num_rows($result);

    if ($num_row > 0) {
        echo "<div class=\"relative overflow-x-auto\">";
        echo "<table class=\"w-full text-sm text-left text-gray-500 dark:text-gray-400\">";
        echo "<thead class=\"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400\">
                                            <tr>
                                                <th scope=\"col\" class=\"px-6 py-3 bg-gray-50 dark:bg-gray-800\">car_id</th>
                                                <th scope=\"col\" class=\"px-6 py-3 bg-gray-50 dark:bg-gray-800\">make</th>
                                                <th scope=\"col\" class=\"px-6 py-3 bg-gray-50 dark:bg-gray-800\">model</th>
                                                <th scope=\"col\" class=\"px-6 py-3 bg-gray-50 dark:bg-gray-800\">price</th>
                                            </tr>
                                        </thead>
                                        <tbody>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700\">";
            echo "<td scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">" . $row["car_id"] . "</td>";
            echo "<td scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">" . $row["make"] . "</td>";
            echo "<td scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">" . $row["model"] . "</td>";
            echo "<td scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">" . $row["price"] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    } else {
        echo "<p>No records retrieved.</p>";
    }
    ?>
</body>

</html>