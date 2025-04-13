<form action="index.php?acao=relatorio" method="POST">
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
        </thead>
        <tbody>
            <td>
                <input type="text" name="nome">
            </td>
            <td>
                <input type="number" name="semana1">
            </td>
            <td>
                <input type="number" name="semana2">
            </td>
            <td>
                <input type="number" name="semana3">
            </td>
            <td>
                <input type="number" name="semana4">
            </td>
        </tbody>
    </table>
    <button type="submit">Enviar</button>
</form>
