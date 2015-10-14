<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Stairs</title>
        <link href='https://fonts.googleapis.com/css?family=Lato:700italic,300' rel='stylesheet' type='text/css'>
        <style>
            html,
            body {
                margin: 0;
                height: 100vh;
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
            <img class="avatar" src="imgs/one.png" width="350" height="150">
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
                    if (score < .2) {
                        avatar_element.src = "imgs/one.png";
                    } else if (score < .4) {
                        avatar_element.src = "imgs/two.png";
                    } else if (score < .6) {
                        avatar_element.src = "imgs/three.png";
                    } else if (score < .8) {
                        avatar_element.src = "imgs/four.png";
                    } else {
                        avatar_element.src = "imgs/five.png";
                    }
                }
                request.send(null);
            }, 1000);
        </script>
    </body>
</html>
