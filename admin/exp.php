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

<form action="./api/edit.php" method="post">
    <div style="float:right;"><input type="button" class="add" onclick="op('#cover','#cvr','./view/<?=$table;?>.php?table=<?=$table;?>')" value="+"></div>
        <table width="100%">
            <tr>
                <td style="width:5%;text-align:center;">id</td>
                <td style="width:20%;text-align:center;">職務名稱</td>
                <td style="width:20%;text-align:center;">工作期間</td>
                <td style="width:20%;text-align:center;">職務描述</td>
                <td style="width:12.5%;text-align:center;">顯示</td>
                <td style="width:12.5%;text-align:center;">刪除</td>
            </tr>
            <?php
                $photo=all($table);
                foreach ($photo as $p) {
            ?>
            <tr>
                <td style="width:5%;text-align:center;"><input type="text" name="id[]" value="<?=$p['id'];?>" style="width:100%;" disabled></td>
                <td style="width:20%;text-align:center;"><input type="text" name="jobfn[]" value="<?=$p['jobfn'];?>" style="width:100%;"></td>
                <td style="width:20%;text-align:center;"><input type="text" name="period[]" value="<?=$p['period'];?>" style="width:100%;"></td>
                <td style="width:20%;text-align:center;"><input type="text" name="description[]" value="<?=$p['description'];?>" style="width:100%;"></td>
                <td style="width:12.5%;text-align:center;"><input type="checkbox" name="sh[]" value="<?=$p['id'];?>" <?=($p['sh']==1)?"checked":"";?>></td>
                <td style="width:12.5%;text-align:center;"><input type="checkbox" name="del[]" value="<?=$p['id'];?>"></td>
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