<?php
// Magic constants
echo __FILE__.'<br>'; // romel fileshia gamokenebuli magiuri constanta;
echo __DIR__.'<br>'; // romel failshic vcert magiur constantas sad aris es file;
echo __LINE__.'<br>'; // romel line zea gamokenebuli constanta;
// Create directory

// if(mkdir('test')) {
//     echo "True";         // arsebobs tuara 'test' direktoria; 
// }


// Rename directory

// Delete directory

// if(rmdir('test2')) {
//     echo 'removed';     // shlis files;
// }

// Read files and folders inside directory
   
$files = scandir('./');        // fileshi ra php an zogadad filebic arsebobs damibechde is ;
$files2 = scandir('../');        // zogadad mtlianad foldershi anu tu raime arsebobs programashi kvelas gibechdavs (kvela files da indexs);


echo '<pre>';
print_r($files);
echo '</pre>';


// file_get_contents, file_put_contents

echo file_get_contents('lorem.txt');  // sxva filedan gadmogvakvs text;
file_put_contents('simple.txt', file_get_contents('lorem.txt')); // gamikete axali file romlis saxelic aris 'simple.txt' da am fileshi camoige lorem.txt;
file_put_contents('lorem.txt', '1 2 3'); // lorem.txt shi gadaeci 1 2 3 (anu txt icvleba  1 2 3 it mtlianad)

// file_get_contents from URL

$filter = file_get_contents('https://jsonplaceholder.typicode.com/users'); // json is camogeba;
// echo '<pre>';
// print_r($filter);
// echo '</pre>';

file_put_contents('users.json', $filter);  // jsoni gadaveci axal gaketebul files user.json s gafiltrulad;

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file