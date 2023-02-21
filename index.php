<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/normalize.css">
    <link rel="stylesheet" href="/style.css"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php1lab</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <img class="logo" src="/logo.png" alt="logo">
                </li>
                <li>
                    <p>
                    Домашняя работа: Hello, World!
                    </p>
                </li>
            </ul>
        </nav>
    </header>
    <section>
        <?php
        echo "Hello,world!";
        echo '<br>';
        echo date(DATE_RSS);
        ?>
    </section>
    <footer>
        <?php
        echo "Буткеев Давид 221-321"
        ?>
    </footer>
</body>
</html>