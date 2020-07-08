
<div class="container">
  <div class="card bg-white text-center my-auto" style="height:250px;">
    <div id="coverr">
        <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"	onclick="cl(&#39;#cover&#39;)">╳</a>    
    </div>

    
    <h3 class="cent">新增資料</h3>
    <hr>
        <form action="./api/add.php" method="post">
        <table>
        <tr>
            <td>姓名:</td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td>地址:</td>
            <td><input type="text" name="address" id=""></td>
        </tr>
        <tr>
            <td>電話:</td>
            <td><input type="text" name="tel" id=""></td>
        </tr>
        <tr>
            <td>信箱:</td>
            <td><input type="text" name="email" id=""></td>
        </tr>
        <tr>
            <td>生日:</td>
            <td><input type="text" name="birthday" id=""></td>
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