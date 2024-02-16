<?php

namespace App\Command;

use App\Entity\Clients;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class CreateAdminUserCommand extends Command
{
    protected static $defaultName = 'app:create-admin-user';

    private $entityManager;
    private $userPasswordHasher;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $userPasswordHasher)
    {
        $this->entityManager = $entityManager;
        $this->userPasswordHasher = $userPasswordHasher;

        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('Creates a new admin user.')
            ->setHelp('This command allows you to create a user with admin role...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $user = new Clients();
        $user->setEmail('admin@david.com');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setNom("David");
        $user->setNumeroTelephone("0000000000");
        $user->setAdresseFacturation("DTC");
        $user->setPassword($this->userPasswordHasher->hashPassword($user, 'Azerty'));


        $this->entityManager->persist($user);
        $this->entityManager->flush();

        $output->writeln('Admin user successfully created!');

        return Command::SUCCESS;
    }
}
