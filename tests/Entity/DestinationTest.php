<?php
namespace App\Tests\Entity;

use App\Entity\Destination;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class DestinationTest extends KernelTestCase
{
    private ?ValidatorInterface $validator = null;

    protected function setUp(): void
    {
        self::bootKernel();
        $this->validator = self::getContainer()->get('validator');
    }

    public function testValidDestination(): void
    {
        $destination = new Destination();
        $destination->setNom("Paris");
        $destination->setPays("France");
        
        $errors = $this->validator->validate($destination);
        $this->assertCount(0, $errors);
    }

    public function testNomCannotBeBlank(): void
    {
        $destination = new Destination();
        $destination->setNom("");
        $destination->setPays("France");
        
        $errors = $this->validator->validate($destination);
        $this->assertGreaterThan(0, count($errors));
        $this->assertEquals("Le nom est obligatoire", $errors[0]->getMessage());
    }

    public function testNomCannotContainNumbers(): void
    {
        $destination = new Destination();
        $destination->setNom("Paris123");
        $destination->setPays("France");
        
        $errors = $this->validator->validate($destination);
        $this->assertGreaterThan(0, count($errors));
        $this->assertStringContainsString("lettres", $errors[0]->getMessage());
    }

    public function testPaysCannotBeBlank(): void
    {
        $destination = new Destination();
        $destination->setNom("Paris");
        $destination->setPays("");
        
        $errors = $this->validator->validate($destination);
        $this->assertGreaterThan(0, count($errors));
        $this->assertEquals("Le pays est obligatoire", $errors[0]->getMessage());
    }
}