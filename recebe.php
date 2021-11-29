<html>

<head>
    <title>Imprimir plano</title>
    <style>
        thead {
            color: lightblue;
        }

        table.plano {
            border: 1px solid black;
            width: 100%;
        }

        tr,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h1>Plano de Aula</h1>
    <table class="plano">
        <thead>
            <tr>
                <td>1. Identificação</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <p><b>1.1 Nome do(a) professor(a):</b> <?php echo $_POST['inputProf'];  ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><b>1.1 Nome do(a) professor(a):</b> <?php echo $_POST['inputComponente'];  ?></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p></p>
    <table class="plano">
        <thead>
            <tr>
                <td>1. Identificação</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <p><b>1.1 Nome do(a) professor(a):</b> <?php echo $_POST['inputProf'];  ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><b>1.1 Nome do(a) professor(a):</b> <?php echo $_POST['inputProf'];  ?></p>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>