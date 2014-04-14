<!doctype html>
<html lang="en">
  <head>
    <title>Foreach</title>
  </head>
  <body>
    <?php
    // create an array of vegatables and fruits
    // then create an unordered list tag
    // within that tag iterate over the array with a foreach loop and echo out the items in the array in a list item tag
    ?>

    <p>
      <ul><?php
        $arr = array("cherry", "apple", "potato", "carrot");
        foreach ($arr as $veggie) {
          echo '<li>' . $veggie . '</li>';
          echo "<li>" . $veggie . "</li>";
        }
        ?>
      </ul>
    </p>

  </body>
</html>
