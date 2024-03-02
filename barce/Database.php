<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body id="body" style="padding: 50px;">  
    <h1>Total Amount : 1000</h1>
    <h1 id="cash_output">Cash : 0.00</h1>
    <hr>
    <h1 id="change">Change : 0.00</h1>
    <h1 id="result"></h1>
    <hr>
    <label for="">Enter Word here:: </label>  
    <input onkeyup="compute(this.value)" type="number" placeholder="Write Anything here..">
    <br>
    <br>
    <br>
    <br>
    <button ondblclick="bgRed()">Change Background Color to Red</button><hr>
    <button onclick="bgBlue()">Change Background Color to Blue</button><hr>
    <button onclick="bgGreen()">Change Background Color to Green</button>
    <script>

        function compute(cash){
            const total = 1000;
            const compute_total = Number(cash) - total;
            const cash_total = document.getElementById('cash_output');
            const change_x = document.getElementById('change');

            cash_total.innerHTML = 'Cash : ' + cash;
            change_x.innerHTML = 'Change : ' + compute_total;
        }

        function greetings(name){
            const result = document.getElementById('result');
            result.innerHTML = 'Hello ! ' + name;
        }

        function bgRed(){
            const body = document.getElementById('body');
            body.style.backgroundColor = 'red';
        }

        function bgBlue(){
            const body = document.getElementById('body');
            body.style.backgroundColor = 'blue';
        }

        function bgGreen(){
            const body = document.getElementById('body');
            body.style.backgroundColor = 'green';
        }
    </script>
</body>
</html>