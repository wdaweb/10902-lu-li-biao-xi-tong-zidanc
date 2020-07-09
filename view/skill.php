
<div class="container">
  <div class="card bg-white text-center my-auto" style="height:360px;">
    <div id="coverr">
        <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"	onclick="cl(&#39;#cover&#39;)">╳</a>    
    </div>

    
    <h3 class="cent">新增能力</h3>
    <hr>
    <form action="./api/add.php" method="post">
    <table>
        <tr>
            <td>裝備能力:</td>
            <td><input type="text" name="skill" id=""></td>
        </tr>
        <tr>
            <td>技能模式:</td>
            <td><input type="text" name="type" id=""></td>
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