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
	var c = document.get
	
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
		</div>
	</div>
	
	<div class="dom-category" onclick="expand(3);" id="dom-art">Art
		<div class="dom-content" id="dom-art-content">
		</div>
	</div>
	
	<div class="dom-category" onclick="expand(4);" id="dom-travel">Travel
		<div class="dom-content" id="dom-travel-content">
			<img class="dom-image" src="travel/IMG_1418.JPG"></img>
			<img class="dom-image" src="travel/IMG_1501.JPG"></img>
			<img class="dom-image" src="travel/IMG_1561.JPG"></img>
			<img class="dom-image" src="travel/IMG_1622.JPG"></img>
			
		</div>
	</div>
	
</body>
</html>