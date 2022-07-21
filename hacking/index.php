<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.4.1.min.js"></script>
    <script src="scripts.js" type="text/javascript"></script>
    <link rel="stylesheet" href= "styles.css">
    <title>osint</title>
</head>
<body>
    <div class="c_main">
        <h1>Hacking</h1>
        <form action="">
        <table>
            <thead>
                <tr>
                    <th>Fases</th>
                    <th>Herramientas</th>
                    <th>Search</th>
                    <th>Limpiar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <select name="fase" id="fase" onchange="get_fases()"></select>
                    </td>
                    <td>
                        <select name="herramientas" id="herramientas" onchange="get_comandos()"></select>
                    </td>
                    <td>
                        <input type="text" id="search" onkeyup="get_comandos()">
                    </td>
                    <td>
                        <input type="submit" value="limpiar" onclick="limpiar()">
                    </td>
                </tr>
            </tbody>
        </table>
        </form>
        <div id="c_comandos"></div>
    </div>
    <!--Modal detalles -->
    <div id="m_view" class="bgModal ocultar"> 
        <div class="modal m_view">
            <div class="b_cancelar">X</div>
            <table>
                <tr><th>Comando</th><th>Descripción</th></tr>
                <tr><td><div id="comando"></div></td><td><div id="descripcion"></div></td></tr>
                <tr><th colspan="2">Detalles</th></tr>
                <tr><td colspan="2"><div id="detalles"></div></td></tr>
            </table>
        </div> 
    </div>
    <!--Modal ayuda -->
    <div id="m_ayuda" class="bgModal ocultar"> 
        <div class="modal m_view">
            <div class="b_cancelar">X</div>
            <table>
                <tr><th>Ayuda</th></tr>
                <tr><td><div id="ayuda"></div></td></tr>
            </table>
        </div> 
    </div>
</body>
</html>
