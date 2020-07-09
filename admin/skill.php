<?php
    $table="skill";
?>

<style>
.add{
    width:100%;
    height:100%;
    margin:3px;
}
</style>

<form action="./api/edit.php" method="post">
    <div style="float:right;"><input type="button" class="add" onclick="op('#cover','#cvr','./view/<?=$table;?>.php?table=<?=$table;?>')" value="+"></div>
        <table width="100%">
            <tr>
                <td style="width:55%;text-align:center;">裝備能力</td>
                <td style="width:15%;text-align:center;">技能模式</td>
                <td style="width:10%;text-align:center;">顯示</td>
                <td style="width:10%;text-align:center;">刪除</td>
            </tr>
            <?php
                $photo=all($table);
                foreach ($photo as $p) {
            ?>
            <tr>
                <td style="width:55%;text-align:center;"><input type="text" name="skill[]" value="<?=$p['skill'];?>" style="width:100%;"></td>
                <td style="width:15%;text-align:center;"><input type="text" name="type[]" value="<?=$p['type'];?>" style="width:100%;"></td>
                <td style="width:10%;text-align:center;"><input type="checkbox" name="sh[]" value="<?=$p['id'];?>" <?=($p['sh']==1)?"checked":"";?>></td>
                <td style="width:10%;text-align:center;"><input type="checkbox" name="del[]" value="<?=$p['id'];?>"></td>
                <input type="hidden" name="id[]" value="<?=$p['id'];?>">
                <input type="hidden" name="table" value="<?=$table?>">
            </tr>
            <?php
            }
            ?>
        </table>

        <div class="text-center">
            <input class="btn btn-warning" type="submit" value="修改">　|　<input class="btn btn-outline-secondary" type="reset" value="重置">
        </div>
    
</form>