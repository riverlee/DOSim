<?
$countfile = "count/counter.txt";  
  
if (!file_exists("$countfile")){  
    $fp=fopen("$countfile","w");  
    $num=1;  
    fputs($fp,$num,8);  
    fclose($fp);  
 }  
else{  
    $fp=fopen("$countfile","rw+");  
    $num=fread($fp,8);  
    $num++;  
    rewind($fp);  
    fputs($fp,$num,8);  
    fclose($fp);  
}  
 
 echo  "<font color='black'>".$num."</font>" 
 
  ?> 
