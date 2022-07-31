<?php

// Print current date
echo time().'<br>';

// Print yesterday

echo date('Y-m-d H-i-s').'<br>';

// Different format: https://www.php.net/manual/en/function.date.php

// Print current timestamp

echo strtotime('now').'<br>';

// Parse date: https://www.php.net/manual/en/function.date-parse.php

$dateString = '2020-10-10 16:00:22';

$pars = date_parse($dateString);

echo '<par>';
    print_r($pars);
'</par>';


// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
