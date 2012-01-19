<?php
        $url = $_POST['url'];
    
        $cmd = "wget -nv -E -H -k -K -p $url -P ../cache/ -o ../cache/log -e robots=off";
        exec("bash -c \"exec nohup setsid $cmd > /dev/null 2>&1 &\""); 


/*        
        $cachelink = substr($url, 7);
        $cachelink = urlencode($cachelink);
        print $cachelink;


        if(strpos($cachelink, ".php")===FALSE){
        
        }else{
            $cachelink = $cachelink.".html";
        }    
        $last_char = substr($cachelink,-1);
        if(strpos($cachelink, ".html")===FALSE && $last_char!='/'){
            $cachelink = $cachelink.".html";
        }
        print $cachelink;



        function isValidURL($url){
            return preg_match('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $url);
        }

        $url = $_POST['url'];

        if(!isValidUrl($url)){ 
            
            die("Invalid url."); 
        }

        if(strpos($url,"?")===false){

        }else{
            $url = substr($url, 0, strpos($url,"?"));
        }
        $url_ = substr($url, 7);
*/
