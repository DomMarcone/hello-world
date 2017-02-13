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
	width: 100%;
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

@media screen and (min-width: 640px)
{
	.dom-category
	{
		transform: rotate(-90deg);
		-ms-transform: rotate(-90deg);
	}
}
</style>
<script>

function getItemByNumber(num)
{
	switch(num)
	{
		case 0 :
			return document.getElementById("dom-bio");
		
		case 1 :
			return document.getElementById("dom-skills");
			
		case 2 :
			return document.getElementById("dom-projects");
			
		case 3 : 
			return document.getElementById("dom-art");
	}
	return "ERROR!";
}

function collapseAll()
{
	for(var x = 0; x < 4; x++){
		var y = getItemByNumber(x);
		y.style.height = "40px";
		y.style.backgroundColor = "#222";
	}
}

function expand(item)
{
	var cat = getItemByNumber(item);
	collapseAll();
	cat.style.height = (window.innerHeight-160)+ "px";
	cat.style.backgroundColor = "#666";
}

</script>
</head>
<body>
	<div class="dom-category" onclick="expand(0);" id="dom-bio">Bio</div>
	<div class="dom-category" onclick="expand(1);" id="dom-skills">Skills</div>
	<div class="dom-category" onclick="expand(2);" id="dom-projects">Programming</div>
	<div class="dom-category" onclick="expand(3);" id="dom-art">Art</div>
</body>
</html>