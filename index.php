<?php 


class Card {
	public $type;
	public string $title;
	public string $content;
	public array $skills;

	public function __construct( string $type, string $title, string $content, array $skills ){
		$this->type = $type;
		$this->title = $title;
		$this->content = $content;
		$this->skills = $skills;
	}

	public function render():string{
		$icon = "";
		if ($this->type === "code"){
			$icon = "<div class='icon'><img src='assets/svgs/code.svg' /></div>";
		}
		else {
			$icon = "";
		}
		$skillsHTML = '';
		foreach ($this->skills as $skill){
			$skillsHTML .= "<div class='skill-tab' >{$skill}</div>";
		}
		return '<div class="card" >' . $icon . '<h2>' . $this->title . '</h2><p> ' . $this->content . "</p><div style='display: flex; gap: 4px'> {$skillsHTML} </div></div>";
	}

}

$websites = [
	new Card("code", "test", "A CLI tool to quickly split SQL files into smaller, more manageable chunks.", ["wordpress", "test", "js"]),
	new Card("code", "test2", "A CLI tool to quickly split SQL files into smaller, more manageable chunks.", ["wordpress", "test", "js"]),
	new Card("code", "test3", "A CLI tool to quickly split SQL files into smaller, more manageable chunks.", ["wordpress", "test", "js"]),
	new Card("code", "test3", "A CLI tool to quickly split SQL files into smaller, more manageable chunks.", ["wordpress", "test", "js"]),
	new Card("code", "test3", "A CLI tool to quickly split SQL files into smaller, more manageable chunks.", ["wordpress", "test", "js"]),
];

?>

<html>

<head>
<style>
* {
	padding: 0;
	margin: 0;
	box-sizing : border-box;
	font-family: poppins
}

body {
	padding: 10px;
	background: #151515
}

.skill-tab {
	padding: 4px 10px; 
	border-radius: 50px; 
	background: #5f55; 
	color : white; 
	min-width: 40px; 
	text-align: center
}

.card {
	width: 100%; 
	background: #5f52; 
	color: white ; 
	border: 1px solid #5f5a; 
	padding: 20px; 
	border-radius: 10px;
	display: flex;
	flex-direction: column;
	gap: 16px
}

.icon {
	width: 50px;
	aspect-ratio: 1;
	padding: 4px;
	border-radius: 12px;
	background: #5f52
}

.icon img {
	width: 100%;
	filter: brightness(0) invert(1)
}

.grid {
	display: grid; grid-template-columns : repeat(4,1fr); width: 100%; gap: 10px
}

@media(max-width: 900px){
.grid {
display: grid; grid-template-columns : repeat(2,1fr); width: 100%; gap: 10px
}
}

@media(max-width: 700px){
.grid {
display: grid; grid-template-columns : repeat(1,1fr); width: 100%; gap: 10px
}
}

</style>
</head>

<body>

<div class="grid" style="">
<?php

foreach($websites as $website){
	echo $website->render();
}

?>

</div>

</body>

</html>