<!doctype html>
<html lang="en">
  <head>
    <title>if statment!</title>
  </head>
  <body>
    <p>Complete the if statement</p>
    <p>
      <?php
        $age = 21;     // Set this to a number greater than 18

        if ($age <= 17) {
          echo "You are not old enough to vote, drink or die for your country. However, if you give the drunk outside the liquor store $20, he will buy the alcohol for you and hopefully he will give it to you instead of drinking it himself!";
        } elseif ($age > 17 && $age < 21) {
          echo "You can vote and die for your country, but you cannot drink!";
        } else {
          echo "Get drunk, vote for an idiot and then die for your country!";
        }
      ?>
    </p>
  </body>
</html>
