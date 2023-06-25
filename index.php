<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            width: 100%;
            min-height: 100vh;
        }
        .contents {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .logo {
            height: 40vh;
            width: 100%;
            display: grid;
            place-items: center;
        }

        .buttons{
            width: 100%;
            height: 60vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        .buttons button{
            width: 80%;
            padding: 1rem 0;
        }

    </style>
</head>
<body>
    <div class="contents">
        <div class="logo">E-JEEP LOGO</div>
        <div class="buttons">
            <button>I'm an Operator</button>
            <button>I'm a Passenger</button>
        </div>
    </div>

</body>
</html>