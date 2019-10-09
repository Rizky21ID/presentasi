<?php
// Warna Terminal
// Abdul Muttaqin

$putih = "\e[37m";
$biru = "\e[34m";
$kuning = "\e[33m";
$cyan = "\e[96m";
$magenta = "\e[35m";
$hijau = "\e[92m";
$merah = "\e[91m";
echo "$merah

 
 $$\   $$\                     $$\                     
 $$$\  $$ |                    \__|                    
 $$$$\ $$ |$$\   $$\  $$$$$$\  $$\ $$$$$$$\   $$$$$$\  
 $$  $$\$$ |$$ |  $$ | \____$$\ $$ |$$  __$$\ $$  __$$\ 
$putih $$  \$$$$ |$$ |  $$ | $$$$$$$ |$$ |$$ |  $$ |$$ /  $$ |
 $$ | \$$$ |$$ |  $$ |$$  __$$ |$$ |$$ |  $$ |$$ |  $$ |
 $$ |  \$$ | \$$$$$$  |\$$$$$$$ |$$ |$$ |  $$ |\$$$$$$$ |
 \__|  \__| \______/  \_______|\__|\__|  \__| \____$$ |
                                             $$\   $$ |
                                              \$$$$$$  |
                                              \______/ 
                         $hijau (https://github.com/fdciabdul)
";
echo "$biru \n Sebuah Tools Yang Berguna Saat Teman Mu Presentasi \n ";
echo "$cyan \n ( Cari satu kata saja yang berkaitan dengan presentasi teman mu) \n";
echo ' Pertanyaan :';

$tanya = trim(fgets(STDIN));
echo "\n \n";
$json_url = "http://nuaing.web.id/nanya/index.php?type=quora&q=$tanya";
$aw = file_get_contents($json_url);
$json = json_decode($aw, true);
      foreach ($json as $tanya) {
    echo "$hijau Pertanyaan ? : \n ( $biru".$tanya['title'] . "$hijau ) $biru\n\n";
}
