<?php
/**
 * Created by PhpStorm.
 * User: stardhtz
 * Date: 30/05/17
 * Time: 13:57
 */
// src/Ens/JobeetBundle/DataFixtures/ORM/LoadJobData.php
namespace Ens\JobeetBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Ens\JobeetBundle\Entity\Job;

class LoadJobData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $job_sensio_labs = new Job();
        $job_sensio_labs->setCategory($em->merge($this->getReference('category-programming')));
        $job_sensio_labs->setType('full-time');
        $job_sensio_labs->setCompany('Sensio Labs');
        $job_sensio_labs->setLogo('sensio-labs.gif');
        $job_sensio_labs->setUrl('http://www.sensiolabs.com/');
        $job_sensio_labs->setPosition('Web Developer');
        $job_sensio_labs->setLocation('Paris, France');
        $job_sensio_labs->setDescription('You\'ve already developed websites with symfony and you want to work with Open-Source technologies. You have a minimum of 3 years experience in web development with PHP or Java and you wish to participate to development of Web 2.0 sites using the best frameworks available.');
        $job_sensio_labs->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $job_sensio_labs->setIsPublic(true);
        $job_sensio_labs->setIsActivated(true);
        $job_sensio_labs->setToken('job_sensio_labs');
        $job_sensio_labs->setEmail('job@example.com');
        //$job_sensio_labs->setExpiresAt(new \DateTime('2017-10-10'));

        $job_extreme_sensio = new Job();
        $job_extreme_sensio->setCategory($em->merge($this->getReference('category-design')));
        $job_extreme_sensio->setType('part-time');
        $job_extreme_sensio->setCompany('Extreme Sensio');
        $job_extreme_sensio->setLogo('extreme-sensio.gif');
        $job_extreme_sensio->setUrl('http://www.extreme-sensio.com/');
        $job_extreme_sensio->setPosition('Web Designer');
        $job_extreme_sensio->setLocation('Paris, France');
        $job_extreme_sensio->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.');
        $job_extreme_sensio->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $job_extreme_sensio->setIsPublic(true);
        $job_extreme_sensio->setIsActivated(true);
        $job_extreme_sensio->setToken('job_extreme_sensio');
        $job_extreme_sensio->setEmail('job@example.com');
        //$job_extreme_sensio->setExpiresAt(new \DateTime('2017-10-10'));

        $job_extreme_sensioa = new Job();
        $job_extreme_sensioa->setCategory($em->merge($this->getReference('category-design')));
        $job_extreme_sensioa->setType('part-time');
        $job_extreme_sensioa->setCompany('Extreme Sensio');
        $job_extreme_sensioa->setLogo('extreme-sensio.gif');
        $job_extreme_sensioa->setUrl('http://www.extreme-sensio.com/');
        $job_extreme_sensioa->setPosition('Web Designer');
        $job_extreme_sensioa->setLocation('Paris, France');
        $job_extreme_sensioa->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.');
        $job_extreme_sensioa->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $job_extreme_sensioa->setIsPublic(true);
        $job_extreme_sensioa->setIsActivated(true);
        $job_extreme_sensioa->setToken('job_extreme_sensioa');
        $job_extreme_sensioa->setEmail('job@example.com');
        //$job_extreme_sensioa->setExpiresAt(new \DateTime('2017-10-10'));

        $job_extreme_sensiob = new Job();
        $job_extreme_sensiob->setCategory($em->merge($this->getReference('category-design')));
        $job_extreme_sensiob->setType('part-time');
        $job_extreme_sensiob->setCompany('Extreme Sensio');
        $job_extreme_sensiob->setLogo('extreme-sensio.gif');
        $job_extreme_sensiob->setUrl('http://www.extreme-sensio.com/');
        $job_extreme_sensiob->setPosition('Web Designer');
        $job_extreme_sensiob->setLocation('Paris, France');
        $job_extreme_sensiob->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.');
        $job_extreme_sensiob->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $job_extreme_sensiob->setIsPublic(true);
        $job_extreme_sensiob->setIsActivated(true);
        $job_extreme_sensiob->setToken('job_extreme_sensiob');
        $job_extreme_sensiob->setEmail('job@example.com');
        //$job_extreme_sensiob->setExpiresAt(new \DateTime('2017-10-10'));

        $job_extreme_sensioc = new Job();
        $job_extreme_sensioc->setCategory($em->merge($this->getReference('category-design')));
        $job_extreme_sensioc->setType('part-time');
        $job_extreme_sensioc->setCompany('Extreme Sensio');
        $job_extreme_sensioc->setLogo('extreme-sensio.gif');
        $job_extreme_sensioc->setUrl('http://www.extreme-sensio.com/');
        $job_extreme_sensioc->setPosition('Web Designer');
        $job_extreme_sensioc->setLocation('Paris, France');
        $job_extreme_sensioc->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.');
        $job_extreme_sensioc->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $job_extreme_sensioc->setIsPublic(true);
        $job_extreme_sensioc->setIsActivated(true);
        $job_extreme_sensioc->setToken('job_extreme_sensioc');
        $job_extreme_sensioc->setEmail('job@example.com');
        //$job_extreme_sensioc->setExpiresAt(new \DateTime('2017-10-10'));

        $job_extreme_sensiod = new Job();
        $job_extreme_sensiod->setCategory($em->merge($this->getReference('category-design')));
        $job_extreme_sensiod->setType('part-time');
        $job_extreme_sensiod->setCompany('Extreme Sensio');
        $job_extreme_sensiod->setLogo('extreme-sensio.gif');
        $job_extreme_sensiod->setUrl('http://www.extreme-sensio.com/');
        $job_extreme_sensiod->setPosition('Web Designer');
        $job_extreme_sensiod->setLocation('Paris, France');
        $job_extreme_sensiod->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.');
        $job_extreme_sensiod->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $job_extreme_sensiod->setIsPublic(true);
        $job_extreme_sensiod->setIsActivated(true);
        $job_extreme_sensiod->setToken('job_extreme_sensiod');
        $job_extreme_sensiod->setEmail('job@example.com');
        //$job_extreme_sensiod->setExpiresAt(new \DateTime('2017-10-10'));

        $job_extreme_sensioe = new Job();
        $job_extreme_sensioe->setCategory($em->merge($this->getReference('category-design')));
        $job_extreme_sensioe->setType('part-time');
        $job_extreme_sensioe->setCompany('Extreme Sensio');
        $job_extreme_sensioe->setLogo('extreme-sensio.gif');
        $job_extreme_sensioe->setUrl('http://www.extreme-sensio.com/');
        $job_extreme_sensioe->setPosition('Web Designer');
        $job_extreme_sensioe->setLocation('Paris, France');
        $job_extreme_sensioe->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.');
        $job_extreme_sensioe->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $job_extreme_sensioe->setIsPublic(true);
        $job_extreme_sensioe->setIsActivated(true);
        $job_extreme_sensioe->setToken('job_extreme_sensioe');
        $job_extreme_sensioe->setEmail('job@example.com');
        //$job_extreme_sensioe->setExpiresAt(new \DateTime('2017-10-10'));

        $job_extreme_sensiof = new Job();
        $job_extreme_sensiof->setCategory($em->merge($this->getReference('category-design')));
        $job_extreme_sensiof->setType('part-time');
        $job_extreme_sensiof->setCompany('Extreme Sensio');
        $job_extreme_sensiof->setLogo('extreme-sensio.gif');
        $job_extreme_sensiof->setUrl('http://www.extreme-sensio.com/');
        $job_extreme_sensiof->setPosition('Web Designer');
        $job_extreme_sensiof->setLocation('Paris, France');
        $job_extreme_sensiof->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.');
        $job_extreme_sensiof->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $job_extreme_sensiof->setIsPublic(true);
        $job_extreme_sensiof->setIsActivated(true);
        $job_extreme_sensiof->setToken('job_extreme_sensiof');
        $job_extreme_sensiof->setEmail('job@example.com');
        //$job_extreme_sensiof->setExpiresAt(new \DateTime('2017-10-10'));

        $job_extreme_sensiog = new Job();
        $job_extreme_sensiog->setCategory($em->merge($this->getReference('category-design')));
        $job_extreme_sensiog->setType('part-time');
        $job_extreme_sensiog->setCompany('Extreme Sensio');
        $job_extreme_sensiog->setLogo('extreme-sensio.gif');
        $job_extreme_sensiog->setUrl('http://www.extreme-sensio.com/');
        $job_extreme_sensiog->setPosition('Web Designer');
        $job_extreme_sensiog->setLocation('Paris, France');
        $job_extreme_sensiog->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.');
        $job_extreme_sensiog->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $job_extreme_sensiog->setIsPublic(true);
        $job_extreme_sensiog->setIsActivated(true);
        $job_extreme_sensiog->setToken('job_extreme_sensiog');
        $job_extreme_sensiog->setEmail('job@example.com');
        //$job_extreme_sensiog->setExpiresAt(new \DateTime('2017-10-10'));

        $job_extreme_sensioh = new Job();
        $job_extreme_sensioh->setCategory($em->merge($this->getReference('category-design')));
        $job_extreme_sensioh->setType('part-time');
        $job_extreme_sensioh->setCompany('Extreme Sensio');
        $job_extreme_sensioh->setLogo('extreme-sensio.gif');
        $job_extreme_sensioh->setUrl('http://www.extreme-sensio.com/');
        $job_extreme_sensioh->setPosition('Web Designer');
        $job_extreme_sensioh->setLocation('Paris, France');
        $job_extreme_sensioh->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.');
        $job_extreme_sensioh->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $job_extreme_sensioh->setIsPublic(true);
        $job_extreme_sensioh->setIsActivated(true);
        $job_extreme_sensioh->setToken('job_extreme_sensioh');
        $job_extreme_sensioh->setEmail('job@example.com');
        //$job_extreme_sensioh->setExpiresAt(new \DateTime('2017-10-10'));

        $job_extreme_sensioi = new Job();
        $job_extreme_sensioi->setCategory($em->merge($this->getReference('category-design')));
        $job_extreme_sensioi->setType('part-time');
        $job_extreme_sensioi->setCompany('Extreme Sensio');
        $job_extreme_sensioi->setLogo('extreme-sensio.gif');
        $job_extreme_sensioi->setUrl('http://www.extreme-sensio.com/');
        $job_extreme_sensioi->setPosition('Web Designer');
        $job_extreme_sensioi->setLocation('Paris, France');
        $job_extreme_sensioi->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.');
        $job_extreme_sensioi->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $job_extreme_sensioi->setIsPublic(true);
        $job_extreme_sensioi->setIsActivated(true);
        $job_extreme_sensioi->setToken('job_extreme_sensioi');
        $job_extreme_sensioi->setEmail('job@example.com');
        //$job_extreme_sensioi->setExpiresAt(new \DateTime('2017-10-10'));

        $job_extreme_sensioj = new Job();
        $job_extreme_sensioj->setCategory($em->merge($this->getReference('category-manager')));
        $job_extreme_sensioj->setType('full-time');
        $job_extreme_sensioj->setCompany('Pertamini');
        $job_extreme_sensioj->setLogo('extreme-sensio.gif');
        $job_extreme_sensioj->setUrl('http://www.pertamini.com/');
        $job_extreme_sensioj->setPosition('Director');
        $job_extreme_sensioj->setLocation('Jogja');
        $job_extreme_sensioj->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.');
        $job_extreme_sensioj->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $job_extreme_sensioj->setIsPublic(true);
        $job_extreme_sensioj->setIsActivated(true);
        $job_extreme_sensioj->setToken('job_extreme_sensioj');
        $job_extreme_sensioj->setEmail('job@pertamini.com');
        //$job_extreme_sensioa->setExpiresAt(new \DateTime('2017-10-10'));

        $job_extreme_sensiok = new Job();
        $job_extreme_sensiok->setCategory($em->merge($this->getReference('category-manager')));
        $job_extreme_sensiok->setType('full-time');
        $job_extreme_sensiok->setCompany('Pertamini');
        $job_extreme_sensiok->setLogo('extreme-sensio.gif');
        $job_extreme_sensiok->setUrl('http://www.pertamini.com/');
        $job_extreme_sensiok->setPosition('Director');
        $job_extreme_sensiok->setLocation('Jogja');
        $job_extreme_sensiok->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.');
        $job_extreme_sensiok->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $job_extreme_sensiok->setIsPublic(true);
        $job_extreme_sensiok->setIsActivated(true);
        $job_extreme_sensiok->setToken('job_extreme_sensiok');
        $job_extreme_sensiok->setEmail('job@pertamini.com');
        //$job_extreme_sensioa->setExpiresAt(new \DateTime('2017-10-10'));

        $job_extreme_sensiol = new Job();
        $job_extreme_sensiol->setCategory($em->merge($this->getReference('category-manager')));
        $job_extreme_sensiol->setType('full-time');
        $job_extreme_sensiol->setCompany('Pertamini');
        $job_extreme_sensiol->setLogo('extreme-sensio.gif');
        $job_extreme_sensiol->setUrl('http://www.pertamini.com/');
        $job_extreme_sensiol->setPosition('Director');
        $job_extreme_sensiol->setLocation('Jogja');
        $job_extreme_sensiol->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.');
        $job_extreme_sensiol->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $job_extreme_sensiol->setIsPublic(true);
        $job_extreme_sensiol->setIsActivated(true);
        $job_extreme_sensiol->setToken('job_extreme_sensiol');
        $job_extreme_sensiol->setEmail('job@pertamini.com');
        //$job_extreme_sensioa->setExpiresAt(new \DateTime('2017-10-10'));

        $job_expired = new Job();
        $job_expired->setCategory($em->merge($this->getReference('category-programming')));
        $job_expired->setType('full-time');
        $job_expired->setCompany('Sensio Labs');
        $job_expired->setLogo('sensio-labs.gif');
        $job_expired->setUrl('http://www.sensiolabs.com/');
        $job_expired->setPosition('Web Developer Expired');
        $job_expired->setLocation('Paris, France');
        $job_expired->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit.');
        $job_expired->setHowToApply('Send your resume to lorem.ipsum [at] dolor.sit');
        $job_expired->setIsPublic(true);
        $job_expired->setIsActivated(true);
        $job_expired->setToken('job_expired');
        $job_expired->setEmail('job@example.com');
        $job_expired->setCreatedAt(new \DateTime('2005-12-01'));

        // ...

        for($i = 100; $i <= 130; $i++)
        {
            $job = new Job();
            $job->setCategory($em->merge($this->getReference('category-programming')));
            $job->setType('full-time');
            $job->setCompany('Company '.$i);
            $job->setPosition('Web Developer');
            $job->setLocation('Paris, France');
            $job->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit.');
            $job->setHowToApply('Send your resume to lorem.ipsum [at] dolor.sit');
            $job->setIsPublic(true);
            $job->setIsActivated(true);
            $job->setToken('job_'.$i);
            $job->setEmail('job@example.com');
            $em->persist($job);


        }

        // ...

        $em->persist($job_expired);
        $em->persist($job_sensio_labs);
        $em->persist($job_extreme_sensio);
        $em->persist($job_extreme_sensioa);
        $em->persist($job_extreme_sensiob);
        $em->persist($job_extreme_sensioc);
        $em->persist($job_extreme_sensiod);
        $em->persist($job_extreme_sensioe);
        $em->persist($job_extreme_sensiof);
        $em->persist($job_extreme_sensiog);
        $em->persist($job_extreme_sensioh);
        $em->persist($job_extreme_sensioi);
        $em->persist($job_extreme_sensioj);
        $em->persist($job_extreme_sensiok);
        $em->persist($job_extreme_sensiol);

        $em->flush();

    }


    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }


}