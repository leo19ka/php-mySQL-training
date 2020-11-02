<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerenciador de Tarefas</title>
</head>
<body>
    <form action="">
        <fieldset>
            <legend>Nova tarefa</legend>
            <label for="">
                Tarefa:
                <input type="text" name="tarefa">
            </label>
            <br>
            <label for="">
                Nome:
                <input type="text" name="nome">
            </label>
            <br>
            <label>
                Contato:
                <input type="tel" name="contato">
            </label>
            <label>
                E-mail:
                <input type="email" name="email">
            </label>

            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>

    <!-- Recebimento das Tarefas --> 
    <?php

        if(isset($_GET['tarefa'])) {
            $_COOKIE['lista_tarefas'][] = $_GET['tarefa'];
        }

        $lista_tarefas = array();

        if(isset($_COOKIE['lista_tarefas'])) {
            $lista_tarefas = $_COOKIE['lista_tarefas'];
        }
    ?>

    <table>
        <tr>
            <th>Tarefas</th>
        </tr>

        <?php foreach ($lista_tarefas as $tarefa) : ?>
            <tr>
                <td><?php echo $tarefa; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <!-- Recebimento dos Nomes -->
    <?php

        if(isset($_GET['nome'])) {
            $_COOKIE['lista_nomes'][] = $_GET['nome'];
        }

        $lista_nomes = array();

        if(isset($_COOKIE['lista_nomes'])) {
            $lista_nomes = $_COOKIE['lista_nomes'];
        }
    ?>

    <table>
        <tr>
            <th>Nomes</th>
        </tr>

        <?php foreach ($lista_nomes as $nome) : ?>
            <tr>
                <td><?php echo $nome; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
  
     <!-- Recebimento dos Contatos -->
    <?php

        if(isset($_GET['contato'])) {
            $_COOKIE['lista_contatos'][] = $_GET['contato'];
        }

        $lista_contatos = array();

        if(isset($_COOKIE['lista_contatos'])) {
            $lista_contatos = $_COOKIE['lista_contatos'];
        }
        ?>

        <table>
        <tr>
            <th>Contatos</th>
        </tr>

        <?php foreach ($lista_contatos as $contato) : ?>
            <tr>
                <td><?php echo $contato; ?></td>
            </tr>
        <?php endforeach; ?>
        </table>
     <!-- Recebimento dos Emails -->
     <?php

        if(isset($_GET['email'])) {
            $_COOKIE['lista_emails'][] = $_GET['email'];
        }

        $lista_emails = array();

        if(isset($_COOKIE['lista_emails'])) {
            $lista_emails = $_COOKIE['lista_emails'];
        }
        ?>

        <table>
        <tr>
            <th>E-mail</th>
        </tr>

        <?php foreach ($lista_emails as $email) : ?>
            <tr>
                <td><?php echo $email; ?></td>
            </tr>
        <?php endforeach; ?>
        </table>
</body>
</html>