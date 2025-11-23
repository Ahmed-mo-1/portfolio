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