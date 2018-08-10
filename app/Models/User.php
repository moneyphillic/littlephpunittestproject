<?php 

namespace App\Models;

class User {

	private $first_name = 'Ivan';
	private $last_name = 'Kamenov';
	private $email = 'ivan.kamenov@abv.bg';

	public function getFirstName() {
		return $this->first_name;
	}

	public function setFirstName($firstName) {
		$this->first_name = trim($firstName);
	}

	public function getLastName() {
		return $this->last_name;
	}

	public function setLastName($lastName) {
		$this->last_name = trim($lastName);
	}

	public function getFullName() {
		return "$this->first_name $this->last_name";
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function getEmailVariables() {
		return array(
				'full_name' => $this->getFullName(),
				'email' => $this->getEmail(),
			);
	}

}