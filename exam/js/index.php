<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button id="btn">Click me</button>
    <div>
        <h1 id="h1" onclick="background()">Het</h1>
    </div>

    <script>
        // const btn = document.getElementById('btn');
        // btn.addEventListener('click', (e) => {
        //     e.target.style.backgroundColor = 'red';
        // })
        function background() {
            const h1 = document.getElementById('h1');
            h1.style.backgroundColor = 'blue';
            document.body.style.backgroundColor = 'red';
        }
    </script>
</body>
</html>