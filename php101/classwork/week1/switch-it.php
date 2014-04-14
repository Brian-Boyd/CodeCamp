<!doctype html>
<html lang="en">
  <head>
    <title>Switch It!</title>
  </head>
  <body>
  <p>Create a switch statement with 3 different cases and a default case, feel free to use alternative syntax as well!</p>
  <?php
  $PageHeader = 2;
	switch ($PageHeader) {
			case 1:
				$header = "Contact";
				break;
			case 2:
				$header = "Subscribe";
				break;
			case 3:
				$header = "Support";
				break;
			default:
				$header = "My Default Header";
		}
			echo $header;
  ?>
  </body>
</html>
