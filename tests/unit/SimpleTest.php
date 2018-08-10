<?php

class SimpleTest extends \PHPUnit\Framework\TestCase 
{

	protected $user;

	public function setUp() {
		$this->user = new \App\Models\User;
	}

	public function testThatWeCanGetFirstName() {

		$this->user->setFirstName('Ivan');

		$this->assertEquals($this->user->getFirstName(), 'Ivan');
	}

	public function testWhatWeCanGetLastName() {

		$this->user->setLastName('Kamenov');

		$this->assertEquals($this->user->getLastName(), 'Kamenov');
	}

	public function testFullNameIsReturned() {

		$this->user->setFirstName('Ivan');
		$this->user->setLastName('Kamenov');

		$this->assertEquals($this->user->getFullName(), 'Ivan Kamenov');
	}

	public function testFirstAndLastNameAreTrimmed() {

		$this->user->setFirstName('  Ivan');
		$this->user->setLastName('Kamenov  ');

		$this->assertEquals($this->user->getFirstName(), 'Ivan');
		$this->assertEquals($this->user->getLastName(), 'Kamenov');
	}

	public function testEmailAddressCanBeSet() {

		$this->user->setEmail('ivan.kamenov@abv.bg');

		$this->assertEquals($this->user->getEmail(), 'ivan.kamenov@abv.bg');
	}

	public function testEmailVariablesContainCorrectValues() {

		$this->user->setFirstName('Ivan');
		$this->user->setLastName('Kamenov');
		$this->user->setEmail('ivan.kamenov@abv.bg');

		$emailVariables = $this->user->getEmailVariables();

		$this->assertArrayHasKey('full_name', $emailVariables);
		$this->assertArrayHasKey('email', $emailVariables);

		$this->assertEquals($emailVariables['full_name'], 'Ivan Kamenov');
		$this->assertEquals($emailVariables['email'], 'ivan.kamenov@abv.bg');
	}

}