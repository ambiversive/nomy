<html>
<head>
<title>NOMY 1.0</title>
<style type="text/css">
#nomy_url { 
    width: 100%;
    margin: 0;
    border: none;
    background: #888;
}

body {
    background: #777;
    color: white;
}

#nomy_submit {
    opacity: 0;
    width: 0;
    height: 0;
    
}

#nomy_iframe {
    border: none;
    width: 100%;
    height: 90%;
    position: fixed;
    top: 2em;
    left: 0;
    opacity: 1;
    background: #ddd;
}

#nomy_iframe:hover {
    opacity: 1;
}

#nomy_url:hover {
    color: white;
}

a {
   color: red;
} 

</style>
<script type="text/javascript" src="js/jquery.js" charset="utf-8"></script>
<script type="text/javascript" src="js/notifier.js" charset="utf-8"></script>
<script type="text/javascript" src="js/scrollto.js" charset="utf-8"></script>
<script type="text/javascript" src="js/localscroll.js" charset="utf-8"></script>
<script type="text/javascript" src="js/jkey.js" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(runScript);
function runScript(){

    var body = $('body');

    var nomy_iframe = $('#nomy_iframe');
    var nomy_form = $('#nomy_form');
    var nomy_submit = $('#nomy_submit');
    var nomy_url = $('#nomy_url');

    nomy_url.keyup(function (event) { 
        var nurl = nomy_url.val();

        if(event.keyCode == '13'){

            $.post('links/submit_link.php', { url: nurl }, function(response){ 
                Notifier.success('Backup complete! Loading...');
                setTimeout(getLastUrl, 3000);
            });
        }
        
    });

}

function getLastUrl(){
    $.post('links/get_last_link.php', { }, function(response){
        $('#nomy_iframe').attr('src', 'http://localhost/nomy'+response);
    });
}
</script>
</head>
<body>
<input id="nomy_url">
<iframe src="links.html" id="nomy_iframe"></iframe>
</body>
</html>
