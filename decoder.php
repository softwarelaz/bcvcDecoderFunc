<?php 
 //Single Page PHP Function
// Bc.Vc Decoder  v0.1 
// Autor By LaZEnEs
//E-Mail:lazenes@gmail.com
  function deCode($url) {
        $ch = curl_init();  
        curl_setopt($ch, CURLOPT_URL, $url);  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);  
		curl_exec($ch); 
		$data= curl_getinfo($ch);
        curl_close($ch); 
        return $data["redirect_url"];
    }	
echo deCode($_GET["url"]);

?>
