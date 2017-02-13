<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Dominic A. Marcone</title>
<style>
body
{
	width: 100%;
	margin: 0;
	font-family: courier;
}

.dom-category
{
	width: 99.5%;
	transition-duration: 0.25s;
	height: 40px;
	line-height: 40px;
	text-align: center;
	border-style: solid;
	border-width: 2px;
	border-color: white;
	background: #222;
	color: white;
	font-size: 20px;
	text-shadow: 0 0 16px black;
}

.dom-content
{
	display: none;
	color: black;
	/*scroll-direcion: horizontal;*/
	white-space: nowrap;
	overflow: auto;
}

.dom-image
{
	height: 300px;
	/*width: 400px;*/
}

</style>
<script>

function start()
{
	var h = window.innerHeight - 250;
	
	for(var x = 0; x < 50; x ++)
	{
		try{
			var c = document.getElementById("img-" + x);
			c.style.height = h + "px";
			c.style.width = h*4/3 + "px";	
		}catch(err)
		{}
		
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
	}
}

function expand(item)
{
	var name = getNameByNumber(item);
	var cat = document.getElementById(name);
	var con = document.getElementById(name + "-content");
	collapseAll();
	cat.style.height = (window.innerHeight-200)+ "px";
	cat.style.backgroundColor = "#666";
	con.style.display = "block";
}

</script>
</head>
<body onload="start()">
	<div class="dom-category" onclick="expand(0);" id="dom-bio">Bio
		<div class="dom-content" id="dom-bio-content">
		</div>
	</div>
	
	<div class="dom-category" onclick="expand(1);" id="dom-skills">Skills
		<div class="dom-content" id="dom-skills-content">
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
		
		
			<img class="dom-image" id="img-9" src="projects/svgPong/icon.jpg"
				target="_blank" onclick="window.open('projects/svgPong/game.htm');" />
		</div>
	</div>
	
	<div class="dom-category" onclick="expand(3);" id="dom-art">Art
		<div class="dom-content" id="dom-art-content">
			<img class="dom-image" id="img-10" src="art/img1.jpg" />
			<img class="dom-image" id="img-11" src="art/img2.jpg" />
			<img class="dom-image" id="img-12" src="art/img3.jpg" />
		
		</div>
	</div>
	
	<div class="dom-category" onclick="expand(4);" id="dom-travel">Travel
		<div class="dom-content" id="dom-travel-content">
			<img class="dom-image" id="img-20" src="travel/IMG_1418.JPG" />
			<img class="dom-image" id="img-21" src="travel/IMG_1501.JPG" />
			<img class="dom-image" id="img-22" src="travel/IMG_1561.JPG" />
			<img class="dom-image" id="img-23" src="travel/IMG_1622.JPG" />
			
		</div>
	</div>
	
</body>
</html>