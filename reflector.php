<html>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  print_r($_POST);

  foreach($_POST as $key=>$value)
    {
      if (is_array($value)) {
        // to handle checkbox groups
        echo "$key";
        echo "<ul>";
        foreach($value as $k=>$v) {
          echo "<li>$k: $v<//li>\n";
        }
        echo "</ul>\n";
      } else {
        echo "<p>$key: $value</p>\n";
      }
    }
}
?>
</body>
</html>