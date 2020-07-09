
<div class="container">
  <div class="card bg-white text-center my-auto" style="height:250px;">
    <div id="coverr">
        <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"	onclick="cl(&#39;#cover&#39;)">╳</a>    
    </div>

    
    <h3 class="cent">新增簡介</h3>
    <hr>
    <form action="./api/add.php" method="post">
    <table>
        <tr>
            <td>簡介:</td>
            <td><textarea name="intro" id="" cols="60" rows="5"></textarea></td>
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