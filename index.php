<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Mode Example</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://vjs.zencdn.net/7.21.1/video-js.css" rel="stylesheet" />
</head>

<body>
    <div id="container">
        <div id="content">
            <h1>Видеоплеер</h1>
            <p><strong>С сохранением просмотренного состояния</strong></p>
            <p>Вы можете включить ночной режим, нажав галочку справа вверху</p><video id="myVideo" width="320" height="240" controls>
                <source src="/Video/Хлебные крошки.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <?php
            $directory = "video/";
            $files = scandir($directory);
            $files = array_diff(scandir($directory), array('.', '..'));
            echo '<select id="video-list">';
            foreach ($files as $file) {
                echo '<option value="' . $file . '">' . $file . '</option>';
            }
            echo '</select>';
            ?>
        </div>
        <div id="toggle-dark-mode">
            <input type="checkbox" id="dark-mode-switch">
            <label for="dark-mode-switch">Ночной режим</label>
        </div>
    </div>
    <footer>
        <div id="footer-content">
            <p>Copyright ©2022 Your Company Name</p>
        </div>
    </footer>
    <script src="/scripts.js"></script>
</body>

</html>