<?php
    $nome = $_POST['nome'];
    $semana1 = $_POST['semana1'];
    $semana2 = $_POST['semana2'];
    $semana3 = $_POST['semana3'];
    $semana4 = $_POST['semana4'];

    // Calcula o total de vendas
    $totalVendas = [];
    $totalVendedor = $semana1 + $semana2 + $semana3 + $semana4;
?>
<h3>
    Total de vendas no mês de <?=$nome . ": R$" . $totalVendedor?>
</h3>
<table>
    
    <thead>
        <th>
            Vendedor
        </th>
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
        <th>
            Total
        </th>
    </thead>
    <tbody>
        <?php
            foreach($_SESSION["dados"] as $vend):
        ?>
      <tr>
        <td>
            <?= $vend["nome"] ?>
        </td>
        <td>
            R$<?=$vend["semana1"]?>
        </td>
        <td>
            R$<?=$vend["semana2"]?>
        </td>
        <td>
            R$<?=$vend["semana3"]?>
        </td>
        <td>
            R$<?=$vend["semana4"]?>
        </td>
        <td>
            R$
            <?php
               $totalVendas[$vend["nome"]] = $vend["semana1"] +$vend["semana2"] + $vend["semana3"] + $vend["semana4"];
               echo $totalVendas[$vend["nome"]];
            ?>
        </td>
      </tr>
        <?php
            endforeach;
        ?>
    </tbody>
</table>
<h3>
    Total de vendas no mês da empresa: R$
    <?php 
        $total_empresa = 0;
        foreach($_SESSION["dados"] as $vendedor):
            $total_empresa += $totalVendas[$vendedor["nome"]];
        endforeach;
        echo $total_empresa;
    ?>
</h3>
<form action="index.php" method="GET">
    <input type="hidden" name="acao" value="vendas">
    <input type="submit" value="Adicionar Vendedor">
</form>