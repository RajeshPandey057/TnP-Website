
  <?php if (is_file($_POST['name']))
  {
    unlink($_POST['name']);
  }
echo "Deleted!!";
sleep(2);
header("location:../delete.html");
?>
