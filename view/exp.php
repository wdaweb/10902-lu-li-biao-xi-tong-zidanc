
<div class="container">
  <div class="card bg-white text-center my-auto" style="height:360px;">
    <div id="coverr">
        <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"	onclick="cl(&#39;#cover&#39;)">╳</a>    
    </div>

    
    <h3 class="cent">新增經歷</h3>
    <hr>
    <form action="./api/add.php" method="post">
    <table>
        <tr>
            <td>職務名稱:</td>
            <td><input type="text" name="jobfn" id=""></td>
        </tr>
        <tr>
            <td>工作期間:</td>
            <td><input type="text" name="period" id=""></td>
        </tr>
        <tr>
            <td>職務描述:</td>
            <td><textarea name="description" id="" cols="60" rows="5"></textarea></td>
        </tr>
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <tr>
            <td colspan='2' class="cent">
                <input type="submit" value="新增">|
                <input type="reset" value="清除">
            </td>
        </tr>
    </table>
    </form>
  </div>
</div>