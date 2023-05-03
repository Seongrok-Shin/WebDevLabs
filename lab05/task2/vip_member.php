<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Vip Member</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="m-10 flex items-center justify-center md:flex-row flex-col">
        <h1 class="text-3xl font-bold font-sans">Vip Membership - Home Page</h1>
    </div>

    <div class="m-10 flex items-center justify-center md:flex-row flex-col">
        <button
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            onclick="location.href='member_add_form.php'">
            Add New Member Form
        </button>

        <span class="px-5"></span>
        <button
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            onclick="location.href='member_display.php'">
            Display All Members Page
        </button>
        <span class="px-5"></span>

        <button
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            onclick="location.href='member_search.php'">
            Search Member Page
        </button>
        <span class="px-5"></span>
    </div>
</body>

</html>