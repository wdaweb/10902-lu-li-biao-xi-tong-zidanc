<?php
    $table="exp";
?>

<style>
.add{
    width:100%;
    height:100%;
    margin:3px;
}
</style>

<form action="./api/editmsg.php" method="post">
    <div style="float:right;"><input type="button" class="add" onclick="op('#cover','#cvr','./view/<?=$table;?>.php?table=<?=$table;?>')" value="+"></div>
        <table width="100%">
            <tr>
                <td style="width:60%;text-align:center;">經歷</td>
                <td style="width:15%;text-align:center;">顯示</td>
                <td style="width:15%;text-align:center;">刪除</td>
            </tr>
            <?php
                $photo=all($table);
                foreach ($photo as $p) {
            ?>
            <tr>
                <td style="width:60%;text-align:center;"><input type="text" name="exp[]" value="<?=$p['exp'];?>" style="width:100%;"></td>
                <td style="width:15%;text-align:center;"><input type="checkbox" name="sh[]" value="<?=$p['id'];?>" <?=($p['sh']==1)?"checked":"";?>></td>
                <td style="width:15%;text-align:center;"><input type="checkbox" name="del[]" value="<?=$p['id'];?>"></td>
                <input type="hidden" name="id[]" value="<?=$p['id'];?>">
                <input type="hidden" name="table" value="<?=$table?>">
            </tr>
            <?php
            }
            ?>
        </table>

    <div class="cent">
       <input type="submit" value="修改">|<input type="reset" value="重置">
    </div>
    
</form>