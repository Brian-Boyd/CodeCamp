<!doctype html>
<html lang="en">
  <head>
    <title>While</title>
  </head>
  <body>
    <?php
    // write a while loop
		$headCount = 0;
		$flipCount = 0;
		while ($headCount < 3) {
			$flip = rand(0, 1);
			$flipCount++;
			if ($flip) {
				$headCount ++;
				echo "<div class=\"coin\">H</div>";
			} else {
				$headCount = 0;
				echo "<div class=\"coin\">T</div>";
			}
		}
		echo "<p>It took {$flipCount} flips!</p>";
    ?>
  </body>
</html>
