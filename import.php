<?php
include "navbar.php";

$catname=$_GET['cat'];
$subname=$_GET['subcat'];
$sql="SELECT * FROM $catname WHERE subcat='$subname'";
$result=mysqli_query($conn,$sql);

?>
<html>
<head>
		</head>
	<title>
	</title>
	<body>
<table id="tab" border="2">
   <tr>
      <th>Sno</th>
      <th>Name</th>
      <th>Quantity</th>
      <th>Import</th>
      <th>Export</th>
    </tr><tr>
    <?php
if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_array($result))
    {
        ?>
        <td><?php echo $row[0];?></td>
        <td><?php echo $row[1];?></td>
        <td><?php echo $row[2];?></td>
        <td><form method="POST">
        	<input type="text" name="import" id="imp" >
        	<button onclick="myfun()">+</button>

        </form>
       </td>
        <td><form method="POST">
        	<input type="text" name="export" id="exp">
        	<button onclick="myfun2()">-</button>
        	</form>
        	<?php
        }
}	
?></td>
</tr>
</table>
<script type="text/javascript">
  function myfun(){
    var imp=document.getElementById('imp').value;
  var cat = "<?php echo $catname ?>";
  var sub = "<?php echo $subname?>";
    $.ajax({
      url: 'importindex.php',
      type: 'POST',
      data : {change : imp, subcat : sub, catname: cat },
      success: function(result){
        $('#tab').html(result);
      }
    });
  }
function myfun2(){
    var exp=document.getElementById('exp').value;
  var cat = "<?php echo $catname ?>";
  var sub = "<?php echo $subname?>";
    $.ajax({
      url: 'exportindex.php',
      type: 'POST',
      data : {change : exp, subcat : sub, catname: cat },
      success: function(result){
        $('#tab').html(result);
      }
    });

  }
</script>
</body>
</html>
