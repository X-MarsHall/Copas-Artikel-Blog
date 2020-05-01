<?php
     
     echo "\n\n";
     echo "Author : MarsHall\n";
     echo "Team   : Xai Syndicate\n";
     echo "Tools  : Copas Artikel Blog Orang\n";
     echo "Github : https://github.com/X-MarsHall\n\n";
     echo "[+] Masukan url blog : ";
     $blog = trim(fgets(STDIN));
     echo "\nSedang mengambil....";
     sleep(1);
     
     
set_time_limit(0);
$sh = fopen ('./atom.xml', 'w+');
$ch = curl_init("$blog/atom.xml");
curl_setopt($ch, CURLOPT_TIMEOUT, 50);
curl_setopt($ch, CURLOPT_FILE, $sh);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_exec($ch);
curl_close($ch);
fclose($sh);

echo "\n\n[+] Tersimpan : atom.xml\n\n";
?>