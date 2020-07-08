<?php
    $table="photo";
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
            <td style="width:20%;text-align:center;">圖片</td>
            <td style="width:20%;text-align:center;">附註</td>
            <td style="width:20%;text-align:center;">顯示</td>
            <td style="width:20%;text-align:center;">刪除</td>
            <td style="width:20%;text-align:center;">功能</td>
        </tr>
        <?php
            $photo=all($table);
            foreach ($photo as $p) {
        ?>
        <tr>
            <td style="width:20%;text-align:center;"><img src="./img/<?=$p['file'];?>" style="width:100px;height:100px;"></td>
            <td style="width:20%;text-align:center;"><input type="text" name="text[]" value="<?=$p['text'];?>"></td>
            <td style="width:20%;text-align:center;"><input type="radio" name="sh" value="<?=$p['id'];?>" <?=($p['sh']==1)?"checked":"";?>></td>
            <td style="width:20%;text-align:center;"><input type="checkbox" name="del[]" value="<?=$p['id'];?>"></td>
            <td style="width:20%;text-align:center;"><input type="button"
									onclick="op('#cover','#cvr','./view/update_<?=$table;?>.php?id=<?=$p['id'];?>&table=<?=$table;?>')"
									value="更新圖片"></td>
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