<?php

namespace Tests\Feature;


use Tests\TestCase;
use App\Title;

class BasicTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSymptomsModelCount()
    {
        $title = new Title;
        $this->assertTrue(count($title->all() ) ==6, 'It should have 5 titles');
    }

    public function testLastTitlesShouldBeProfessor()
    {
        $title = new Title;
        $titlesArray = $title->all();
        $this->assertEquals('Professor',array_pop($titlesArray),'Title last element should be Professor');

    }

    public function testRegistrationForm()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }

    public function testNameDisplay()
    {
        $response = $this->get('/register');
        $this->assertStringContainsString('Name', $response->getContent(), 'HTML Content "Name" Not found');

    }



}
