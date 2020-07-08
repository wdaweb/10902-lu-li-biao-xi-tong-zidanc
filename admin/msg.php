<?php
    $table="msg";
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
            <?php
                $photo=all($table);
                foreach ($photo as $p) {
            ?>
            <tr>
                <td style="width:14%;text-align:center;">姓名:</td>
                <td style="width:14%;text-align:center;"><input type="text" name="name[]" value="<?=$p['name'];?>" style="width:100%;"></td>
            </tr>
            <tr>
                <td style="width:14%;text-align:center;">地址:</td>
                <td style="width:14%;text-align:center;"><input type="text" name="address[]" value="<?=$p['address'];?>" style="width:100%;"></td>
            </tr>
            <tr>
                <td style="width:14%;text-align:center;">電話:</td>
                <td style="width:14%;text-align:center;"><input type="text" name="tel[]" value="<?=$p['tel'];?>" style="width:100%;"></td>
            </tr>
            <tr>
                <td style="width:14%;text-align:center;">信箱:</td>
                <td style="width:14%;text-align:center;"><input type="text" name="email[]" value="<?=$p['email'];?>" style="width:100%;"></td>
            </tr>  
            <tr>
                <td style="width:14%;text-align:center;">生日:</td>
                <td style="width:14%;text-align:center;"><input type="text" name="birthday[]" value="<?=$p['birthday'];?>" style="width:100%;"></td>
            </tr>
            <tr>
                <td style="width:14%;text-align:center;">顯示:</td>
                <td style="width:14%;text-align:center;"><input type="checkbox" name="sh[]" value="<?=$p['id'];?>" <?=($p['sh']==1)?"checked":"";?> style="width:100%;"></td>
            </tr>
            <tr>
                <td style="width:14%;text-align:center;">刪除:</td>
                <td style="width:14%;text-align:center;"><input type="checkbox" name="del[]" value="<?=$p['id'];?>" style="width:100%;"></td>
            </tr>
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