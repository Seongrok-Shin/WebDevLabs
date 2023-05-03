<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, charset=utf-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Search Member Page</title>
</head>

<body>
    <div class="contents">
        <div class="m-10 flex items-center justify-center md:flex-row flex-col">
            <form method="post" action="member_search.php">
                <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status:
                    <input
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        type="text" name="Search">
                </p>
        </div>
        <div class="m-10 flex items-center justify-center md:flex-row flex-col">
            <input class="py-2 px-4 font-semibold rounded-lg shadow-md text-white bg-green-500 hover:bg-green-700"
                type="submit" value="Search Member">
            </form>
            <span class="px-1"></span>
            <button class="py-2 px-4 font-semibold rounded-lg shadow-md text-white bg-green-500 hover:bg-green-700"
                onclick="location.href='vip_member.php'">
                Homepage
            </button>
        </div>

        <?php
        $homepage = '<a href="vip_member.php"><input class="py-2 px-4 font-semibold rounded-lg shadow-md
        text-white bg-green-500 hover:bg-green-700" type="submit" value = "Homepage"/></a>';
        $add_member = '<a href="member_add_form.php"><input class="py-2 px-4 font-semibold rounded-lg shadow-md
        text-white bg-green-500 hover:bg-green-700" type="submit" value = "Add New Member"/></a>';

        if (isset($_POST['Search'])) {
            $search = $_POST['Search'];
            if (empty($search) || ctype_space($search)) {
                echo "<div class=\"m-10 flex items-center justify-center md:flex-row flex-col\">";
                echo "<p class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">Search bar cannot be empty or only white space to search! Please fill in!</p>";
                echo "</div>";
                echo "<div class=\"m-10 flex items-center justify-center md:flex-row flex-col\">";
                echo "<button class=\"py-2 px-4 font-semibold rounded-lg shadow-md text-white bg-green-500 hover:bg-green-700\"
                            onclick=\"location.href='member_search.php'\">
                            Search Page
                        </button>";
                echo "<span class=\"px-1\"></span>
                        <button class=\"py-2 px-4 font-semibold rounded-lg shadow-md text-white bg-green-500 hover:bg-green-700\"
                            onclick=\"location.href='vip_member.php'\">
                            Homepage
                        </button>";
                echo "</div>";

            } else {
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
                    echo "<div class=\"m-10 flex items-center justify-center md:flex-row flex-col\">";
                    echo "<p>No members in the list. Please add new members.</p>";
                    echo $add_member;
                    echo "<span class='px-1'></span>";
                    echo $homepage;
                    echo "<span class='px-1'></span>";
                    echo "</div>";
                } else {
                    $sql_query = "SELECT member_id, fname, lname, email FROM vipmember WHERE lname LIKE '%" . $search . "%'";
                    $query_result = mysqli_query($conn, $sql_query);
                    $num_row = mysqli_num_rows($query_result);

                    if ($num_row > 0) {
                        echo "<div class=\"relative overflow-x-auto\">";
                        echo "<table class=\"w-full text-sm text-left text-gray-500 dark:text-gray-400\">";
                        echo "<thead class=\"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400\">
                                            <tr>
                                                <th scope=\"col\" class=\"px-6 py-3 bg-gray-50 dark:bg-gray-800\">Member ID</th>
                                                <th scope=\"col\" class=\"px-6 py-3 bg-gray-50 dark:bg-gray-800\">First Name</th>
                                                <th scope=\"col\" class=\"px-6 py-3 bg-gray-50 dark:bg-gray-800\">Last Name</th>
                                                <th scope=\"col\" class=\"px-6 py-3 bg-gray-50 dark:bg-gray-800\">Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>";

                        while ($row = $query_result->fetch_assoc()) {
                            echo "<tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700\">";
                            echo "<td scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">" . $row["member_id"] . "</td>";
                            echo "<td scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">" . $row["fname"] . "</td>";
                            echo "<td scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">" . $row["lname"] . "</td>";
                            echo "<td scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">" . $row["email"] . "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                        echo "</div>";

                        echo "<div class=\"m-10 flex items-center justify-center md:flex-row flex-col\">";
                        echo $add_member;
                        echo "<span class='px-1'></span>";
                        echo $homepage;
                        echo "<span class='px-1'></span>";
                        echo "</div>";
                    } else {
                        echo "<div class=\"m-10 flex items-center justify-center md:flex-row flex-col\">";
                        echo "<p>Searched member is not in the list. Please add as new members.</p>";
                        echo "</div>";
                        echo "<div class=\"m-10 flex items-center justify-center md:flex-row flex-col\">";
                        echo $add_member;
                        echo "<span class='px-1'></span>";
                        echo $homepage;
                        echo "<span class='px-1'></span>";
                        echo "</div>";
                    }
                }
            }
            mysqli_close($conn);
        }
        ?>
    </div>
</body>

</html>