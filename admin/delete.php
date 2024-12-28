<?php
if(isset($_REQUEST["id"]))
{
    $cn=mysqli_connect("localhost","root","","caradmin");
    $q="delete from contact where id='".$_REQUEST["id"]."'";
    $res=mysqli_query($cn,$q);
    if($res > 0)
    {
        echo "<script>alert('item deleted');</script>";
        ?>
           <script>
               window.location="index.php";
               </script>
       <?php
       }
   }
?>
<?php
if(isset($_REQUEST["id"]))
{
    $cn=mysqli_connect("localhost","root","","caradmin");
    $q="delete from bookings where id='".$_REQUEST["id"]."'";
    $res=mysqli_query($cn,$q);
    if($res > 0)
    {
        echo "<script>alert('item deleted');</script>";
        ?>
           <script>
               window.location="index.php";
               </script>
       <?php
       }
   }
?>