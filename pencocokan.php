<?php
$text = array("dumb","ways","the","best" );
$word= "dumbways";

foreach ($text as $key) {
  # code...
  similar_text($key,$word, $percent);
  if ($percent >= 40) {
    # code...
    echo $key."=> True "."<br>";

  }
  else{
    echo $key."=> False "."<br>";

  }
}

?>
