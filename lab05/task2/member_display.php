<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, charset=utf-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Display All Members Page</title>
</head>

<body>
    <div class="contents">
        <?php
        $homepage = '<a href="vip_member.php"><input class="py-2 px-4 font-semibold rounded-lg shadow-md
        text-white bg-green-500 hover:bg-green-700" type="submit" value = "Homepage"/></a>';
        $add_member = '<a href="member_add_form.php"><input class="py-2 px-4 font-semibold rounded-lg shadow-md
        text-white bg-green-500 hover:bg-green-700" type="submit" value = "Add New Member"/></a>';

        require_once('../../../conf/settings.php');

        $conn = @mysqli_connect(
            $host,
            $user,
            $pswd,
            $dbnm
        );

        $select_table = "SELECT * FROM vipmember";

        $is_exist = mysqli_query($conn, $select_table);

        if ($is_exist === FALSE) {
            echo "<p>No members in the list. Please add new members.</p>";
            echo $add_member;
            echo "<span class='px-1'></span>";
            echo $homepage;
        } else {

            $query_result = mysqli_query($conn, $select_table);
            $num_row = mysqli_num_rows($query_result);

            if ($num_row > 0) {
                echo "<div class=\"relative overflow-x-auto\">";
                echo "<table class=\"w-full text-sm text-left text-gray-500 dark:text-gray-400\">";
                echo "<thead class=\"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400\">
                                            <tr>
                                                <th scope=\"col\" class=\"px-6 py-3 bg-gray-50 dark:bg-gray-800\">Member ID</th>
                                                <th scope=\"col\" class=\"px-6 py-3 bg-gray-50 dark:bg-gray-800\">First Name</th>
                                                <th scope=\"col\" class=\"px-6 py-3 bg-gray-50 dark:bg-gray-800\">Last Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>";
                while ($row = $query_result->fetch_assoc()) {
                    echo "<tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700\">";
                    echo "<td scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">" . $row["member_id"] . "</td>";
                    echo "<td scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">" . $row["fname"] . "</td>";
                    echo "<td scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">" . $row["lname"] . "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
                echo "</div>";
                echo $homepage;
                echo "<span class='px-1'></span>";
                echo $add_member;
            }
        }
        ?>
    </div>
</body>

</html>