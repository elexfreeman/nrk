<table class="table table-striped">
    <tdead>
        <tr>
            <th>#</th>
            <th>�������</th>
            <th>���</th>
            <th>��������</th>
            <th>���� ��������</th>
            <th>�����</th>
            <th>�����</th>
            <th>������ ������</th>
            <th>�������</th>
        </tr>
    </tdead>
    <tbody>
    <?php
    $i = 1;

    foreach ($res as $result) {
        $date = new DateTime($result->BIRTHDAY);
        $date =  ($date->format('d.m.Y'));
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $result->SURNAME; ?></td>
            <td><?php echo $result->NAME; ?></td>
            <td><?php echo $result->SECNAME; ?></td>
            <td><?php echo $date; ?></td>
            <td><?php echo $result->SNILS; ?></td>
            <td><?php echo $result->FULLADR; ?></td>
            <td><?php echo $result->GR_U; ?></td>
            <td><?php echo $result->DIAG; ?></td>
        </tr>
        <?php
        $i++;
    }


    ?>

    </tbody>
</table>