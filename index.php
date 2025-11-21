<?php 


class Card {
	public string $title;
	public string $content;
	public array $skills;

	public function __construct( string $title, string $content, array $skills ){
		$this->title = $title;
		$this->content = $content;
		$this->skills = $skills;
	}

	public function render():string{
		$skillsHTML = '';
		foreach ($this->skills as $skill){
			$skillsHTML .= "<div style='padding: 4px; border-radius: 50px; background: red; color : white; min-width: 40px; text-align: center' >{$skill}</div>";
		}
		return '<div style="width: 100%; background: #211d49; color: white ; border: 1px solid black; padding: 20px; border-radius: 10px" ><h2>' . $this->title . '</h2><p> ' . $this->content . "</p><div style='display: flex; gap: 4px'> {$skillsHTML} </div></div>";
	}

}

$websites = [
	new Card("test", "this is the first x", ["wordpress", "test", "js"]),
	new Card("test2", "this is the first x", ["wordpress", "test", "js"]),
	new Card("test3", "this is the first x", ["wordpress", "test", "js"]),
];

?>

<html>

<head>
<style>
* {
padding: 0;
margin: 0;
box-sizing : border-box
}

body {
padding: 10px
}
</style>
</head>

<body>
Welcome
<div style="display: grid; grid-template-columns : repeat(4,1fr); width: 100%; gap: 10px">
<?php

foreach($websites as $website){
	echo $website->render();
}

?>

</div>

</body>

</html>