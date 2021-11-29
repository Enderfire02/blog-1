<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Contact extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $contact = new \App\Entity\Contact();
        $contact->setName('george');
        $contact->setFirstname('cameron');
        $contact->setEmail('gg@pp.fr');
        $contact->setSujet('yes');
        $contact->setNewsletter('yes');
        $contact->setMessage('no');

        $manager->persist($contact);
        $manager->flush();
    }
}
