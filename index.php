<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta content="width=420 initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<title>Dominic A. Marcone</title>
<style>
body
{
	width: 100%;
	margin: 0;
	font-family: courier;
	text-decoration: none;
	overflow: hidden;
}

a
{
	text-decoration: none;
	color: black;
}

.dom-category
{
	width: 99.5%;
	transition-duration: 0.5s;
	height: 40px;
	line-height: 40px;
	text-align: center;
	border-style: solid;
	border-width: 2pt;
	border-color: white;
	background: #222;
	color: white;
	font-size: 20px;
	text-shadow: 0 0 16px black;
	position: static;
}

.dom-content
{
	display: none;
	color: black;
	/*scroll-direcion: horizontal;*/
	white-space: nowrap;
	overflow-x: scroll;
	overflow-y: hidden;
	text-shadow: none;
	-webkit-overflow-scrolling: touch;
}

.dom-vert-content
{
		white-space: normal;
		overflow-y: scroll;
		overflow-x: hidden;
		text-align: left;
		margin-left: 20px;
}

.dom-image
{
	height: 300px;
	/*width: 400px;*/
}

.star
{
	position: absolute;
}

.years-2{
	clip: rect(0px,256px,256px,0px);
	transform: translate(0px,0);
}

.years-3{
	clip: rect(0px, 512px, 256px, 256px);
	transform: translate(-256px,0);
}

.years-4{
	clip: rect(0px, 768px, 256px, 512px);
	transform: translate(-512px,0);
}

.years-6{
	clip: rect(0px, 1024px, 256px, 768px);
	transform: translate(-768px,0);
}

.years-8{
	clip: rect(0px, 1280px, 256px, 1024px);
	transform: translate(-1024px,0);
}


#img-display
{
	display:none;
	position:absolute;
	left:0;
	top:0;
	z-index:10;
	overflow: scroll;
	background: #00000044;
}

</style>
<script>

function start()
{
	collapseAll();
	window.addEventListener("resize", function(event){
		sizeUp();
	});
	
	for(var x = 10; x < 50; x++)
	{
		try{
			var c = document.getElementById("img-" + x);
			c.addEventListener("click", function(event){
				var imgDisplay = document.getElementById("img-display");
				imgDisplay.style.display = "block";
				imgDisplay.src = event.target.src;
			});
		}catch(err)
		{}

	}
	
	sizeUp();
}

function sizeUp()
{
	var h = window.innerHeight - 240;
	
	for(var x = 0; x < 50; x++)
	{
		try{
			var c = document.getElementById("img-" + x);
			c.style.height = h + "px";
			c.style.width = h*4/3 + "px";
		}catch(err)
		{}
	}
	
	for(var x = 0; x < 10; x++)
	{
		try {
			c = document.getElementById(getNameByNumber(x) + "-content");
			c.style.height = h + "px";
		}catch(err)
		{}
	}
	
	for(var x = 0; x < 10; x++)
	{
		try{
			c = document.getElementById(getNameByNumber(x));
			if(c.style.height != "40px")
				c.style.height = (window.innerHeight-200)+ "px";
		}catch(err)
		{}
	}
	
	var imgDisplay = document.getElementById("img-display");
	if(window.innerWidth>window.innerHeight)
	{
		imgDisplay.style.width = window.innerWidth + "px";
		imgDisplay.style.height = window.innerWidth*3/4 + "px";
	}else
	{
		imgDisplay.style.height = window.innerHeight + "px";
		imgDisplay.style.width = window.innerHeight*4/3 + "px";
	}
}

function getNameByNumber(num)
{
	switch(num){
	case 0 : 
		return "dom-bio";
	case 1 :
		return "dom-skills";
	case 2 :
		return "dom-projects";
	case 3 :
		return "dom-art";
	case 4 : 
		return "dom-travel";
	}
	return "ERROR!"
}

function collapseAll()
{
	for(var x = 0; x < 5; x++){
		var name = getNameByNumber(x);
		var y = document.getElementById(name);
		var z = document.getElementById(name + "-content");
		y.style.height = "40px";
		y.style.backgroundColor = "#222";
		z.style.display = "none";
		z.style.zIndex = "0";
	}
}

function expand(item)
{
	var name = getNameByNumber(item);
	var cat = document.getElementById(name);
	var con = document.getElementById(name + "-content");
	collapseAll();
	cat.style.height = (window.innerHeight-200)+ "px";
	cat.style.backgroundColor = "#BBB";
	con.style.display = "block";
	con.style.zIndex = "1";
	sizeUp();
}

</script>
</head>
<body onload="start()">
	<div class="dom-category" onclick="expand(0);" id="dom-bio">Bio
		<div class="dom-content dom-vert-content" id="dom-bio-content">
			<h1>Marcone, Dominic</h1>
			<h4><a href="mailto:dammarcone@yahoo.com">dammarcone@yahoo.com</a></h4>
			<p>
			<?php
				$file = fopen("bio.txt","r");
				echo fread($file,filesize("bio.txt"));
				fclose($file);
			?>
			</p>
		</div>
	</div>
	
	<div class="dom-category" onclick="expand(1);" id="dom-skills">Skills
		<div class="dom-content dom-vert-content" id="dom-skills-content">
		<ul>
			<li><b>C</b> - started learning in 2007</li>
			<li><b>Java</b> - started learning 2010</li>
			<li><b>HTML, CSS, Javascript</b>- started 2014</li>
		</ul>
		<img src="stars.png" class="star years-2" />
		<img src="stars.png" class="star years-3" />
		<img src="stars.png" class="star years-4" />
		<img src="stars.png" class="star years-6" /	>
		<img src="stars.png" class="star years-8" />
		
		<ul>
			<li><b>PowerPoint</b> - Advanced</li>
			<li><b>Word</b> - Advanced</li>
			<li><b>Excell</b> - Advanced</li>
			<li><b>Access</b> - Proficient</li>
			<li><b>Photoshop</b> - Advanced</li>
			<li><b>Blender</b> - Advanced</li>
		</ul>
		
		<ul>
			<li><b>Windows</b> - Advanced</li>
			<li><b>Mac</b> - Proficient</li>
			<li><b>Various Linux Distro's</b> - Good</li>
			<li><b>Android OS</b> - Proficient</li>
			<li><b>iOS</b> - Advanced</li>
		</ul>
				
		</div>
	</div>
	
	<div class="dom-category" onclick="expand(2);" id="dom-projects">Programming
		<div class="dom-content" id="dom-projects-content">
			<img class="dom-image" id="img-1" src="projects/canvasGame/icon.jpg"
				target="_blank" onclick="window.open('projects/canvasGame/index.htm');" />
				
			<img class="dom-image" id="img-2" src="projects/shotCounter/icon.jpg"
				target="_blank" onclick="window.open('projects/shotCounter/index.htm');" />
			
			<img class="dom-image" id="img-3" src="projects/randomProjects/drawLines.jpg"
				target="_blank" onclick="window.open('projects/randomProjects/drawLines.htm');" />
		
			<img class="dom-image" id="img-4" src="projects/randomProjects/moreCanvas.jpg"
				target="_blank" onclick="window.open('projects/randomProjects/moreCanvas.htm');" />
		
			<img class="dom-image" id="img-9" src="projects/svgPong/icon.jpg"
				target="_blank" onclick="window.open('projects/svgPong/game.htm');" />
		</div>
	</div>
	
	<div class="dom-category" onclick="expand(3);" id="dom-art">Art
		<div class="dom-content" id="dom-art-content">
			<img class="dom-image" id="img-10" src="art/img1.jpg" />
			<img class="dom-image" id="img-11" src="art/img2.jpg" />
			<img class="dom-image" id="img-12" src="art/img3.jpg" />
			<img class="dom-image" id="img-13" src="art/img4.jpg" />
			<img class="dom-image" id="img-14" src="art/img5.jpg" />
		
		</div>
	</div>
	
	<div class="dom-category" onclick="expand(4);" id="dom-travel">Travel
		<div class="dom-content" id="dom-travel-content">
			<img class="dom-image" id="img-20" src="travel/IMG_1418.JPG" />
			<img class="dom-image" id="img-21" src="travel/IMG_1501.JPG" />
			<img class="dom-image" id="img-22" src="travel/IMG_1561.JPG" />
			<img class="dom-image" id="img-23" src="travel/IMG_1622.JPG" />
			<img class="dom-image" id="img-24" src="travel/DSC_0024.JPG" />
			<img class="dom-image" id="img-25" src="travel/DSC_0013.JPG" />
			<img class="dom-image" id="img-26" src="travel/FILE0034.JPG" />
			<img class="dom-image" id="img-27" src="travel/DSC_0012.JPG" />
			<img class="dom-image" id="img-28" src="travel/DSC_0182.JPG" />
			
		</div>
	</div>
	
	<img id="img-display" onclick="document.getElementById('img-display').style.display='none';"/>
	
</body>
</html>