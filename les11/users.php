<?php
class User{
	public $id;
	public $Name;
	public $Login;
	public $Password;
	public $Bdate;
	public $Phone;
	public $Sex;
public function draw(){
	echo '<div class = "user-container">';
    echo '<div class = "id">'.$this->id."</div>";  //константа зис используется для доступа к функциям и свойствам класса
    echo '<div class = "Name">'.$this->Name."</div>";
    echo '<div class = "Login">'.$this->Login."</div>";
    echo '<div class = "Password">'.$this->Password."</div>";
    echo '<div class = "Bdate">'.$this->Bdate."</div>";
    echo '<div class = "Phone">'.$this->Phone."</div>";
    echo '<div class = "Sex">'.$this->Sex."</div>";
    echo '<button onclick = "remove_user('.$this->id.')">В АД!!!</button>';
    echo "</div>";
}
}



?>