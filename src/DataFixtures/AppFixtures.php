<?php

namespace App\DataFixtures;

use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $u1 = new Users();
        $u1->setName('Donec odio justo');
        $u1->setDescription('Curabitur in libero ut massa volutpat convallis. 
            Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.

            Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.

            Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.');
        $u1->setImageUrl('https://robohash.org/3?set=set3&size=180x180');
        $manager->persist($u1);

        $u2 = new Users();
        $u2->setName("Grey Brim");
        $u2->setDescription('Duis bibendum, felis sed interdum venenatis, turpis 
            enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.

            In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.

            Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.');
        $u2->setImageUrl("https://robohash.org/$%7Bid%7D?set=set3&size=180x180");
        $manager->persist($u2);

        $u3 = new Users();
        $u3->setName('Vincent Abouchou');
        $u3->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing
            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation');
        $u3->setImageUrl("https://i.ibb.co/QdJwgmp/brown-cowboy.png");
        $manager->persist($u3);

        $u4 = new Users();
        $u4->setName('Deann Payne');
        $u4->setDescription('Donec diam neque, vestibulum eget, vulputate ut,
           ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.

            Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.

            In sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.');
        $u4->setImageUrl('https://randomuser.me/api/portraits/women/67.jpg');
        $manager->persist($u4);

        $manager->flush();
    }
}
