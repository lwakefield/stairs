<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Stairs</title>
        <link href='https://fonts.googleapis.com/css?family=Lato:700italic,300' rel='stylesheet' type='text/css'>
        <link href='css/sprite.css' rel='stylesheet' type='text/css'>
        <style>
            html,
            body {
                margin: 0;
                height: 100vh;
                background-color: #FEFFFC;
            }
            body {
                display: flex;
                flex-direction: column;
                font-family: 'Lato', sans-serif;
                font-size: 18px;
                justify-content: center;
            }
            h1 {
                text-align: center;
                font-weight: normal;
                font-size: 4rem;
            }
            .avatar-wrapper {
                width: 100%;
                display: flex;
                justify-content: center;
            }
        </style>
    </head>
    <body>
        <h1>The score is <em class="score"></em></h1>
        <div class="avatar-wrapper">
            <div class="avatar">
        </div>
        <script>
            setInterval(function() {
                var request = new XMLHttpRequest();
                request.open('GET', 'api/score');
                request.onreadystatechange = function ()
                {
                    var score = request.responseText;
                    var score_element = document.querySelectorAll('.score')[0];
                    score_element.innerHTML = score;
                    var avatar_element = document.querySelectorAll('.avatar')[0];
                    var sprite_class = Math.floor(score * 18).toString();
                    if (sprite_class.length == 1) {
                        sprite_class = "00" + sprite_class;
                    } else if (sprite_class.length == 2) {
                        sprite_class = "0" + sprite_class;
                    }
                    avatar_element.className = "avatar icon-" + sprite_class;
                    console.log(sprite_class);
                }
                request.send(null);
            }, 1000);
        </script>
    </body>
</html>
