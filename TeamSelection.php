<?php  
    if(isset($_POST['submit'])){
   	if (!empty($_POST['teams'])) {
   			$fp = fopen("team.txt","w");
            file_put_contents("team.txt", " ");
   			fclose($fp);
            $fp = fopen("team.txt","a");
   			foreach ($_POST['teams'] as $selected) {
   				$selected = $selected." ";
   				fwrite($fp, $selected);			    	
   			}
            fclose($fp);
            $countbr=0;
            $countbs=0;
            $countbl=0;
            $countrs=0;
            $countrc=0;
            $countsc=0;
   	foreach ($_POST['teams'] as $direct) {
   	     if($direct=='spurs' || $direct=='leicester'){
 	            $countsc++;
               }
   	   elseif($direct=='barcelona' || $direct=='realmadrid'){
                        $countbr++;
               }
               elseif($direct=='barcelona' || $direct=='spurs'){
                        $countbs++;
               }
               if($direct=='barcelona' || $direct=='leicester'){
                        $countbl++;
               }
               if($direct=='realmadrid' || $direct=='leicester'){
                        $countrc++;
               }
               if($direct=='realmadrid' || $direct=='spurs'){
                        $countrs++;
               }
               else
                  header('Location:/miniproj/new_table.html');
   	  }
        if($countbr>=2){
            header('Location:/miniproj/barca_vs_real.php');
        }
        elseif ($countbs>=2) {
            header('Location:/miniproj/barca_vs_spurs.php');
        }
        elseif ($countbl>=2) {
            header('Location:/miniproj/barca_vs_city.php');
        }
        elseif ($countrc>=2) {
            header('Location:/miniproj/real_vs_city.php');
        }
        elseif ($countrs>=2) {
            header('Location:/miniproj/real_vs_spurs.php');
        }
        else{
            if($countsc>=2){
               header('Location:/miniproj/spurs_vs_city.php');
            }
            else
               header('Location:/miniproj/new_table.html');  
        }
    }
}
?>