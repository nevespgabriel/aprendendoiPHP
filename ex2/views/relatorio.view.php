<?php
    $nome = $_POST['nome'];
    $semana1 = $_POST['semana1'];
    $semana2 = $_POST['semana2'];
    $semana3 = $_POST['semana3'];
    $semana4 = $_POST['semana4'];

    // Calcula o total de vendas
    $totalVendedor= $semana1 + $semana2 + $semana3 + $semana4;
?>
<h3>
    Total de vendas no mês de <?=$nome . ": R$" . $totalVendedor?>
</h3>
<table>
    
    <thead>
        <th>
            Semana 1
        </th>
        <th>
            Semana 2
        </th>
        <th>
            Semana 3
        </th>
        <th>
            Semana 4
        </th>
    </thead>
    <tbody>
        <td>
            R$<?=$semana1?>
        </td>
        <td>
            R$<?=$semana2?>
        </td>
        <td>
            R$<?=$semana3?>
        </td>
        <td>
            R$<?=$semana4?>
        </td>
    </tbody>
</table>
<h3>
    Total de vendas no mês da empresa: R$
    <?php 
        $total_empresa = 0;
        foreach($_SESSION["dados"] as $vendedor):
            $total_empresa += $vendedor["total_mes"];
        endforeach;
        echo $total_empresa;
    ?>
</h3>
<form action="index.php?acao=vendas" method="POST">
    <input type="submit" value="Voltar">
</form>