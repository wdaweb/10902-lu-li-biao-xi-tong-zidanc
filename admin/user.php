<?php
    $table="user";
?>

<style>
.add{
    width:100%;
    height:100%;
    margin:3px;
}
</style>

<form action="./api/edit.php" method="post">
        <table width="100%">
            <tr>
                <td style="width:14%;text-align:center;">帳號</td>
                <td style="width:14%;text-align:center;">密碼</td>
                <td style="width:14%;text-align:center;">信箱</td>
                <td style="width:14%;text-align:center;">刪除</td>
            </tr>
            <?php

                $photo=all($table);
                foreach ($photo as $p) {
                    if($p['acc']!="admin"){
            ?>
            <tr>
                <td style="width:14%;text-align:center;"><input type="text" name="acc[]" value="<?=$p['acc'];?>"></td>
                <td style="width:14%;text-align:center;"><input type="password" name="pw[]" value="<?=$p['pw'];?>"></td>
                <td style="width:14%;text-align:center;"><input type="text" name="email[]" value="<?=$p['email'];?>"></td>
                <td style="width:14%;text-align:center;"><input type="checkbox" name="del[]" value="<?=$p['id'];?>"></td>
                <input type="hidden" name="table" value="<?=$table?>">
                <input type="hidden" name="id[]" value="<?=$p['id'];?>">
            </tr>
            <?php
                   }
                }
            ?>
        </table>
                <div class="cent">
                   <input type="submit" value="修改">|<input type="reset" value="重置">
                </div>
    </form>