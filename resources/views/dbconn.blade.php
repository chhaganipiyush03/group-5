<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel and mysql db connection</title>
</head>

<body>
    <div>
        <?php

        use Illuminate\Support\Facades\DB;

        if (DB::connection()->getPDO()) {
            echo "Successfully Connected to db and db name is" . DB::connection()->getDatabaseName();
        }
        ?>
    </div>
</body>

</html>