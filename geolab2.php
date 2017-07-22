<?php
#echo  filesize('input.txt');       //filesize
#$InputString = "helloooo ". PHP_EOL;        
#file_put_contents('input.txt', $InputString,FILE_APPEND); //write in to file



#$DataFromURL = file_get_contents('https://www.google.ge/?gws_rd=ssl'); //get data from url
#echo str_replace(English, რუსული, $data);   
#echo nl2br(string)
//file_put_contents('photo.jpg', file_get_contents(filename))

/*
if(file_exists('./input.txt') && is_writable('./input.txt')) // if file exists and if its writable
{
	file_put_contents('./input.txt');
}
*/

$OpenFileForReading = fopen('./input.txt','r+');
fwrite($OpenFileForReading, "textstring");        
echo fgets($f);                 //get first line of the file

// get whole file
while(!feof($f))
{
echo fgets($f) . '<br>';

}
fclose($f);

?>
