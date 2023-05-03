?php
if(isset($_POST['submit']))
{
$num=$_POST['num'];
define('NUM',$num);
for($i=1 ; $i<=10 ; $i++)
{
echo $i*NUM;
echo '<br>';
}
}
?>