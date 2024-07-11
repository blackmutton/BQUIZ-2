<fieldset>
    <legend>目前位置:首頁 > 問卷調查</legend>
    <table>
        <tr>
            <th>編號</th>
            <th width="60%">問卷題目</th>
            <th>投票總數</th>
            <th>結果</th>
            <th>狀態</th>
        </tr>
        <?php
        $ques = $Que->all();
        foreach ($ques as $idx => $que) :
        ?>
            <tr>
                <td><?= $idx + 1 ?></td>
                <td><?= $que['text'] ?></td>
                <td><?= $que['vote'] ?></td>
                <td>
                    <a href="?do=result&id=<?= $que['id'] ?>">結果</a>
                </td>
                <td class="ct">
                    <?php
                    if (isset($_SESSION['user'])) {
                        echo "<a href='?do=vote&id={$que['id']}'>我要投票</a>";
                    } else {
                        echo "<a href='?do=login'>請先登入</a>";
                    }
                    ?>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>
</fieldset>