<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TdContact extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $lists = [
            ["name1", "lastname1", 69, true],
            ["name2", "lastname2", 420, true],
        ];

        foreach($lists as $list){
            $tdContact = new \App\Entity\TdContact();
            $tdContact->setName($list[0]);
            $tdContact->setFirstname($list[1]);
            $tdContact->setAge($list[2]);
            $tdContact->setNewsletter($list[3]);
            $manager->persist($tdContact);

        }
        $manager->flush();
    }
}
