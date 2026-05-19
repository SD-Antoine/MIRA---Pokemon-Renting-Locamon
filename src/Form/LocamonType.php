<?php

namespace App\Form;

use App\Entity\Locamon;
use App\Entity\Pokemon;
use App\Repository\PokemonRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Range;

class LocamonType extends AbstractType
{
    public function __construct(private PokemonRepository $pokemonRepository)
    {
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('pokemon', EntityType::class, [
                'class' => Pokemon::class,
                'choice_label' => function(Pokemon $p) {
                    // Get French name from translations, fallback to ID if not found
                    try {
                        foreach ($p->getTranslations() as $translation) {
                            if ($translation->getLang() === 'fr') {
                                return $translation->getName();
                            }
                        }
                    } catch (\Exception $e) {
                        // Fallback if lazy loading fails
                    }
                    return 'Pokemon #' . $p->getId();
                },
                'placeholder' => 'Choose a base Pokemon',
                'required' => true,
            ])
            ->add('nickname', TextType::class, ['required' => false])
            ->add('ivHp', IntegerType::class, ['required' => false, 'constraints' => [new Range(['min'=>0,'max'=>31])]])
            ->add('ivAtk', IntegerType::class, ['required' => false, 'constraints' => [new Range(['min'=>0,'max'=>31])]])
            ->add('ivSpAtk', IntegerType::class, ['required' => false, 'constraints' => [new Range(['min'=>0,'max'=>31])]])
            ->add('ivDef', IntegerType::class, ['required' => false, 'constraints' => [new Range(['min'=>0,'max'=>31])]])
            ->add('ivSpDef', IntegerType::class, ['required' => false, 'constraints' => [new Range(['min'=>0,'max'=>31])]])
            ->add('ivSpd', IntegerType::class, ['required' => false, 'constraints' => [new Range(['min'=>0,'max'=>31])]])

            ->add('evHp', IntegerType::class, ['required' => false, 'constraints' => [new Range(['min'=>0,'max'=>252])]])
            ->add('evAtk', IntegerType::class, ['required' => false, 'constraints' => [new Range(['min'=>0,'max'=>252])]])
            ->add('evSpAtk', IntegerType::class, ['required' => false, 'constraints' => [new Range(['min'=>0,'max'=>252])]])
            ->add('evDef', IntegerType::class, ['required' => false, 'constraints' => [new Range(['min'=>0,'max'=>252])]])
            ->add('evSpDef', IntegerType::class, ['required' => false, 'constraints' => [new Range(['min'=>0,'max'=>252])]])
            ->add('evSpd', IntegerType::class, ['required' => false, 'constraints' => [new Range(['min'=>0,'max'=>252])]])

            ->add('price', IntegerType::class, ['required' => false])
            ->add('stock', IntegerType::class, ['required' => false])
            ->add('level', IntegerType::class, ['required' => true])
            ->add('nature', TextType::class, ['required' => true])
            ->add('shiny', CheckboxType::class, ['required' => false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Locamon::class,
            'csrf_protection' => true,
        ]);
    }
}
