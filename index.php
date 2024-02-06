<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

    <h2>Data from MySQL Database</h2>

    <div id="data-container">
        <!-- Fetched data will be displayed here -->
    </div>

    <script>
        // Use jQuery to make an AJAX request
        $(document).ready(function () {
            $.ajax({
                url: 'fetch.php', // Change to the actual path of your server-side script
                method: 'GET',
                dataType: 'html',
                success: function (response) {
                    $('#data-container').html(response);
                },
                error: function (error) {
                    console.log('Error:', error);
                }
            });
        });
    </script>

</body>
</html>
