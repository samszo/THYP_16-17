<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>renseignement</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

 <script type="text/javascript" src="js/d3.v3.js"></script>
 	<script type="text/javascript" src="js/jquery.min.js" ></script>
	
	<script>try{Typekit.load();}catch(e){}</script> 
</head>
<body>

<div id="Lapage">
<div id="bande">
	<span class="titreSite">renseignement</span>
	<br />
	
</div>
 

	<div id="contenu">
	
		<center>
				<!--<div class="img">-->
							<ul id="THYP">
			</ul>
			<ul id="THYPtofs">
			</ul> 
				
					
					<!--<a href="about/Dave-Wrightson.html">-->
						
						 <script type="text/javascript">
		var rssPhoto = "http://picasaweb.google.com/data/feed/base/user/107069028374380439764/albumid/6340716155566922545?alt=rss&kind=photo&hl=en_US";
	    var urlData = "php/lecteurFlux.php?url=THYP1617data";
    		d3.csv(urlData, function(data)
    	    {
    	      
    	        data.forEach(function(d,i){
	    	       
	    	        var h = '<a href="renseignement.php">'
	    	        +'<div class="person">'
	    	        +'<img src="h.jpg" id="tof_'+d['lien vers la photo']+'" >'
	    	        +'<div>'
	    	        +'<h4>'+d['Prénom']+' '+d.Nom+'</h4>'
	    	        +'<h5>'+d['N° étudiant']+'</h5>'
					+'<h5>'+d['Vos compétences']+'</h5>'
					+'<h5>'+d['E-mail']+'</h5>'
	    	        +'</div>'
	    	        +'</div>'
	    	        +'</a>';		    	        	
    	            $('<li></li>').html(h).appendTo('#THYP');
    	        });
    	        d3.xml("../samszo/php/lecteurFlux.php?url=THYP1617photo", "application/xml", function(xml) {
    	        	var tofs = xml.documentElement.getElementsByTagName("enclosure"); 
    	        	for (i = 0; i < tofs.length; i++) { 
    	        		console.log(tofs[i].getAttribute("url"));
        	        	d3.select("#tof_"+i)
        	        		.attr('src',tofs[i].getAttribute("url"))
        	        		.style('width',100);
    	        		
    	        	}
    	        	});
    	        
    	    })
    	    </script>
		
		<div style="clear:both;"></div>
		

	</div>
</div>

</body>
</html>