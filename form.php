<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="css/agenda.css" />
    <script type="text/javascript" src="js/formulario.js"></script>
</head>
<body>
    <div id="autor">
        <h1 id="h1" align="center">Gabriel Luis de Santana</h1>
    </div>

    <hr width="100%" align="center" size="3" color="black">

    <div id="container">
        <div>
            <form align="center" action="insere.php" method="POST">
                <h2>Cadastrar Dados na Agenda</h2>
                <div class="formulario">
                    <table>
                        <tr>
                            <td align="right">
                                <label for="primeiro_nome">Primeiro Nome:</label>
                            </td>
                            <td>
                                <input class="elemento" type="text" name="primeiro_nome" required>
                            </td>
                        </tr>

                        <tr>
                            <td align="right">
                                <label for="sobrenome">Sobrenome:</label>
                            </td>
                            <td>
                                <input class="elemento" type="text" name="sobrenome" required>
                            </td>
                        </tr>

                        <tr>
                            <td align="right">
                                <label for="email">Email:</label>
                            </td>
                            <td>
                                <input class="elemento" type="email" name="email" required>
                            </td>
                        </tr>

                        <tr>
                            <td align="right">
                                <label for="telefone">Telefone:</label>
                            </td>
                            <td>
                                <input class="elemento" type="text" name="telefone" placeholder="Qual o seu telefone?" maxlength="14" required>
                            </td>
                        </tr>
                    </table>
                </div>
                <br>
                <div id="container">
                    <table>
                        <tr>
                            <td>
                                <center align="right">
                                    <input type="submit" value="Salvar">
                                </center>
                            </td>
                            <td>
                                <form method="POST" action="mostrar_nome.php">
                                    <center align="left">
                                        <input type="submit" value="Consultar">
                                    </center>
                                </form>
                            </td>
                            <td>
                                <form method="POST" action="procura_deletar.php">
                                    <center align="left">
                                        <input type="submit" value="Excluir">
                                    </center>
                                </form>
                            </td>
                            <td>
                                <form method="POST" action="alterar_contato.php">
                                    <center align="left">
                                        <input type="submit" value="Alterar">
                                    </center>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
            <hr width="100%" align="center" size="3" color="black">

            <div id="container">
                <table align="center">
                    <tr>
                        <td>
                            <form method="POST" action="menu.php">
                                <center align="right">
                                    <input type="submit" value="Home">
                                </center>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <h4>
            <center>Senai Norte - Joinvile - SC</center>
        </h4>
    </div>
</body>
</html>
