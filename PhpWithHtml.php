<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP With HTML</title>
</head>

<body>
    <form method="POST">
        Enter your Fav Color: <input type="text" placeholder="Enter color name" name="favcolor">
        <input type="submit" name="submit" value="Check Now">
    </form>

    <p>
        <?php
            if (isset($_POST['submit'])) {
                $favColor = $_POST['favcolor'];
                switch ($favColor) {
                    case 'blue':
                        echo 'Your fav color blue';
                        break;
                    case 'red':
                        echo 'Your fav color red';
                        break;
                    case 'green':
                        echo 'Your fav color green';
                        break;
                    
                    default:
                        echo 'I am not able to find your fav Color.';
                        break;
                }
            }
        ?>
    </p>
</body>

</html>