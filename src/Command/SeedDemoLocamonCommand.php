<?php

namespace App\Command;

use App\Entity\Locamon;
use App\Entity\Pokemon;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:seed-demo-locamon',
    description: 'Crée quelques Locamon de démonstration (pour la boutique et le test Stripe).',
)]
class SeedDemoLocamonCommand extends Command
{
    public function __construct(private EntityManagerInterface $em)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->addOption('force', null, InputOption::VALUE_NONE, 'Crée les Locamon même si la table en contient déjà.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $repo = $this->em->getRepository(Locamon::class);

        if (!$input->getOption('force') && $repo->count([]) > 0) {
            $io->warning(sprintf('La table locamon contient déjà %d entrée(s). Utilisez --force pour en ajouter quand même.', $repo->count([])));
            return Command::SUCCESS;
        }

        // pokemonId => [nickname, prix en CENTIMES/jour, stock, niveau, nature, shiny]
        // (le prix est stocké en centimes : 1200 => 12,00 € ; cf. Locamon::getPriceInEuros)
        $demo = [
            25  => ['Sparky',   1200, 5,    50, 'Hardy',   false],
            6   => ['Blaze',    3000, 3,    72, 'Adamant', false],
            150 => ['Genesis',  9900, 1,   100, 'Timid',   true],
        ];

        $created = 0;
        foreach ($demo as $pokemonId => [$nickname, $price, $stock, $level, $nature, $shiny]) {
            $pokemon = $this->em->getRepository(Pokemon::class)->find($pokemonId);
            if (!$pokemon) {
                $io->note(sprintf('Pokémon #%d introuvable, ignoré.', $pokemonId));
                continue;
            }

            $locamon = (new Locamon())
                ->setPokemon($pokemon)
                ->setNickname($nickname)
                ->setPrice($price)
                ->setStock($stock)
                ->setLevel($level)
                ->setNature($nature)
                ->setShiny($shiny)
                ->setIvHp(31)->setIvAtk(31)->setIvDef(31)
                ->setIvSpAtk(31)->setIvSpDef(31)->setIvSpd(31)
                ->setEvHp(0)->setEvAtk(252)->setEvDef(0)
                ->setEvSpAtk(0)->setEvSpDef(0)->setEvSpd(252);

            $this->em->persist($locamon);
            $created++;
        }

        $this->em->flush();

        $io->success(sprintf('%d Locamon de démonstration créés.', $created));

        return Command::SUCCESS;
    }
}
