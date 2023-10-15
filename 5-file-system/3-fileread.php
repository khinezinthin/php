<?php
// READ FILE
// echo file_get_contents("data.json");
// echo readfile("data.json");

// OPEN PEE HMA  
// READ WRITE 
// $file = fopen("data.json","r");
// echo fread($file,filesize("data.json"));

// $name = "khine zin thin";
// if(!is_file("aa.txt")){
//     touch("aa.txt");
//     $open = fopen("aa.txt","w");
//     fwrite($open,$name."\n");
//     fwrite($open,$name);
//     fclose($open);
// }

// $data = ["a"=>"a", "b"=>"b", "c"=>"c"];
// $json = json_encode($data);
// $f = fopen("data2.json","w");
// fwrite($f,$json);
// fclose($f);


// $fileName = "aa.txt";
// $stream = fopen($fileName,"r");
// $text = fread($stream,filesize($fileName));
// $text = fread($stream,10);
// echo $text;

// $text = file($fileName);
// print_r($text);

// echo fgetc($stream);
// echo fgetc($stream);
// echo fgetc($stream);
// echo fgetc($stream);
// echo fgetc($stream);

// var_dump(fgets($stream)); 
// var_dump(fgets($stream)); 
// var_dump(fgets($stream));
// var_dump(fgets($stream));

// var_dump(fgets($stream)); 
// var_dump(feof($stream));
// var_dump(fgets($stream)); 
// var_dump(fgets($stream)); 
// var_dump(feof($stream));

// while(!feof($stream)){
//     echo fgets($stream);
// }

$fileName = "aa.txt";
// W ASA KA PYAN YAY
// $stream = fopen($fileName,"w");
// fwrite($stream,"khine zin thin");
// fclose($stream);

$stream = fopen($fileName,"a");
fwrite($stream,"min ga lar par \n");
fwrite($stream,"min ga lar par \n");
fclose($stream); 