<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        *{
            margin: 0; 
            padding: 0; 
            box-sizing: border-box;
        }

        body{
            min-height: 100vh;
            height: 100%; 
            width: 100%; 
            display: flex; 
            flex-direction: column;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px; 
            max-width: 400px;
            align-items: center;
            }
        
    </style>
<body>
    <form action="" method="post">

        <div id="nome">
        <label for="nome">Digite seu nome</label>
            <input type="text" name="nome" id="nome">
            </div>

        <label for="motivo">Qual o motivo da falta</label>
            <textarea name="motivo" id="motivo" cols="30" rows="10"></textarea>

            <div id="diaFalta">
        <label for="data">Data da falta</label>
            <input type="date" name="data" id="data">
            </div>

            <div id="disciplina">
        <label for="disciplina">Disciplina</label>
            <select name="disciplina" id="disciplina">
                <option value="Programação Web">Programação Web</option>
                <option value="Banco de dados"> Banco de dados </option>
                <option value="Redes">          Redes          </option>
                <option value="Outro">          Outro          </option>
            </select>
            </div>

            <h3>Período da aula</h3>
            <div id="periodo">
        <label for="manha">Manha</label>
            <input type="radio" name="periodo" id="manha" value="manha">

        <label for="tarde">Tarde</label>
            <input type="radio" name="periodo" id="tarde" value="tarde">

        <label for="noite">Noite</label>
            <input type="radio" name="periodo" id="noite" value="noite">
            </div>

        <button type="submit" id="enviar">Enviar</button>
    </form>

        <?php 
            isset($_POST['motivo']) ? $justificativaTexto = strtolower($_POST['motivo']) : "De um motivo!";

            function avaliarDesculpa($justificativaTexto){
                $justificaveis = ["doente",   "hospital",     "consulta",      "prova"];
                $suspeitas     = ["cansado",  "trânsito",     "sono",          "problema"];
                $migue         = ["game",     "dormi demais", "acordei tarde", "preguiça"];
            
            foreach ($justificaveis as $key) {
               if (str_contains($justificativaTexto, $key))  return "Justificavel";
            }

            foreach ($suspeitas as $key) {
                if (str_contains($justificativaTexto, $key))  return "Suspeita";
            }

            foreach ($migue as $key) {
                if (str_contains($justificativaTexto, $key))  return "Migué";
            }

            };

            echo "<h1>RESULTADO</h1>";

            echo isset($_POST['nome']) 
            ? $_POST['nome'] . ", sua justificativa foi classificada como: " . avaliarDesculpa($justificativaTexto)
            : "Informe seu nome";
            
            
        ?>
</body>
</html>