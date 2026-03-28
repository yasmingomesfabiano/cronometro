<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cronometro</title>
    <link href="https://fonts.cdnfonts.com/css/noto-rashi-hebrew" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/libre-bodoni-2" rel="stylesheet">
                
                
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
            background-color: #fff0f3;
        }
        button {
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
        }
        p {
            font-size: 80px;
            margin-bottom: 20px;  
            background-color: #a4133c;
            color: white;
            padding: 10px;
            text-align: center;
            height: 15vh;
            border-radius: 20px;
            font-family: 'Noto Rashi Hebrew', sans-serif;
                                                
        }

        .cronometro{
           background-color: #ff8fa3; 
           width: 80vw;
           height: 40vh;
           margin: 0 auto;
           border-radius: 20px 20px 0 0;
        }

        button{
            height: 9vh;
            width: 18vw;
                background-color: #a4133c;
                color: white;
                border: none;
                border-radius: 10px;
                font-size: 20px;
                cursor: pointer;
                transition: background-color 0.2s ease;
        }
        button:hover {
            background-color: #c9184a;
        }
        h1{
            font-size: 50px;
            color: #a4133c;
            font-family: 'Libre Bodoni', sans-serif;
                                                
        }
    </style>
</head>
<body>
    <h1>Cronômetro</h1>
    <div class="cronometro">
        <p id="cronometro">00: 00: 00</p>
        <button onclick="iniciar()">Iniciar</button>
        <button onclick="parar()">Parar</button>
        <button onclick="zerar()">Zerar</button>
    </div>
    

    <script>
        let hor = 0;
        let min = 0
        let seg = 0;
        let intervalo = null;

        function atualizarTela(){
            document.getElementById("cronometro").textContent=
            ("0" + hor).slice(-2) + ": " + ("0" + min).slice(-2) + ": " + ("0" + seg).slice(-2);
        }

        function incrementar(){
            seg ++;
            if(seg === 60){
                seg = 0;
                min ++;}
            if(min === 60){
                min = 0;
                hor ++;
            }
            if(hor === 24){
                hor = 0;
            }
            atualizarTela();
        }
        function iniciar(){
            if(intervalo) return; //ja esta rodando
            intervalo = setInterval(incrementar, 1000);
        }

        function parar(){
            clearInterval(intervalo);
            intervalo = null;
        }

        function zerar(){
            hor = 0;
            min = 0;
            seg = 0;
            atualizarTela();
        }

        atualizarTela();
    </script>
</body>
</html>