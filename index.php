<html>
<title> ajax</title>
<head>
<script language="javascript">
function ajaxLoader(url,id) {
  if (document.getElementById) {
    var x = (window.ActiveXObject) ? new ActiveXObject("Microsoft.XMLHTTP") : new XMLHttpRequest();
  }
  if (x) {
    x.onreadystatechange = function() {
      if (x.readyState == 4 && x.status == 200) {
        el = document.getElementById(id);
        el.innerHTML = x.responseText;
      }
    }
    x.open("GET", url, true);
    x.send(null);
  }
}
function loadPage(page,usediv) {
         // Set up request varible
         try {xmlhttp = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");}  catch (e) { alert("Error: Could not load page.");}
         //Show page is loading
      //   document.getElementById(usediv).innerHTML = 'Loading Page...';
       //  documet.getElementById('loading_page').style.visibility
		//document.getElementById('loading_page').innerHTML = 'Loading Page...';
         //scroll to top
         scroll(0,0);
         //send data
         xmlhttp.onreadystatechange = function(){
                 //Check page is completed and there were no problems.
                 if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200)) {
                        //Write data returned to page
                        document.getElementById(usediv).innerHTML = xmlhttp.responseText;
                      //  document.getElementById('loading_page').display = block;
                        document.getElementById('loading_page').style.visibility = 'hidden';
                    //    alert('alex');
                 }else{
						document.getElementById('loading_page').innerHTML = 'Loading Page...';
         		 }
         }
         xmlhttp.open("GET", page);
         xmlhttp.send(null);
         //Stop any link loading normaly
         return false;
}
</script>
<style>
#loading_page{
    position: fixed;
    top: 0;
    left: 0;
    z-index: 5000;
    background-color: red;
    font-size: 150%;
    color: white;
    padding: 2px;
}
#contentLYR {
  position:absolute;
  width:200px;
  height:115px;
  z-index:1;
  left: 200px;
  top: 200px;
}

</style>
</head><!--
<body onload="ajaxLoader('marquee.html','contentLYR')">-->
<body onload="loadPage('ajax.php?id=1','contentLYR')">

<div id="loading_page"><br>
<img src="ajax-loader.gif" width="150" height"70" border="1" alt="loading..">
</div>
<div id="contentLYR">
</div>

</body>
</html>