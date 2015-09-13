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
        </style>
    </head>
    <body>
        <h1>Counted a total of <br>
            <em>{{ $sum }}cm</em> <br>
            over the last 100s</h1>
    </body>
</html>
