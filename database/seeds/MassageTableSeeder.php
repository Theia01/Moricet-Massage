<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MassageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('massage')->insert([
            'id' => 1,
            'nom' => 'Massage au Miel',
            'nom_url' => 'massage-au-miel',
            'prix' => '35',
            'resume' => 'Le miel est utilisé pour la peau par l’Homme depuis des milliers d’années. C’est une technique d’apithérapie complète qui agit à plusieurs niveaux :<br>- Elle est détoxifiante et énergétique<br>- Elle a des effets tant externes qu’internes.<br><br> Plus qu’un massage, il s’agit d’une technique de pompage et d’aspiration pour faire migrer les toxines résiduelles stockées dans les graisses vers la surface de la peau et les éliminer. On active également les zones réflexes du corps, ce qui stimule les organes correspondants.',
            'image' => 'miel.png',
            'produits' => 'Miel',
            'description' => 'Le mélange préparé pour le massage est à base de miel d’acacia et de châtaignier, pourvu en acides aminés et autres oligo-éléments. Il est possible de mélanger le miel aux huiles essentielles pour optimiser les effets du massage.  Basé sur l’effet d\'aspiration, le massage au miel permet de faire remonter les toxines à éliminer. Grace aux mouvements des mains sur le corps, le miel va apporter ses effets positifs en pénétrant dans les pores de la peau et en faisant remonter à la surface du corps les toxines et les pollutions qui seront naturellement éliminées.',
            'bienfaits' => 'Bien qu’il ait de nombreuses vertus, le massage au miel commence tout juste à se faire connaître. La texture du miel est propice au gommage des cellules mortes qui s’accumulent sur la surface de l’épiderme. Étant un excellent produit nourrissant, le miel rend la peau plus douce et plus ferme. Les différentes terminaisons nerveuses superficielles de la peau sont également sollicitées lors d’un massage au miel pour réactiver le flux circulatoire. Bref, le miel réveille l’éclat de la peau, quelle que soit la partie du corps massée.',
            'allergies' => 'Le miel contient trois allergènes potentiels. Une allergie au miel peut être à cause du pollen, du venin d’abeille ou du miel lui-même. Une allergie au miel se manifeste par un œdème, des douleurs d’estomac, une confusion, des étourdissements et une anaphylaxie. Si vous soupçonnez une allergie au miel vous devez demander l’aide de votre médecin.',
        ]);
        
        DB::table('massage')->insert([
            'id' => 2,
            'nom' => 'Massage à l\'Aloé vera',
            'nom_url' => 'massage-a-l-aloe-vera',
            'prix' => 35,
            'resume' => 'L’Aloe Vera est recommandé pour soulager de nombreuses affections de la peau. Cette plante peut notamment être utilisée dans les cas suivants :<br><br>- Brûlures: Calmant et apaisant, le gel d’aloès est idéal en cas de brûlure légère ou de coup de soleil. Il procure un effet rafraichissant et soulage immédiatement.<br><br>- Acné: L’apparition de l’acné est caractérisée par une inflammation de la peau et une prolifération bactérienne. Grâce à ses propriétés anti-inflammatoire et régénératrice, l’aloé vera aide non seulement à soigner l’acné et réduire l’effet peau grasse mais également à atténuer les cicatrices qu’elle provoque. Pour cela, il vous suffit de nettoyer votre peau matin et soir avec un gel à l’aloe vera.',
            'image' => 'aloevera.png',
            'produits' => 'Aloé vera',
            'description' => 'L\'huile de massage Aloé Vera calme les irritations, les boutons de fièvre, le feu du rasoir, les coups de soleil, les piqures d’insectes, les blessures.L\'Aloe Vera est très bonne pour la santé car elle contient toutes les vitamines nécessaires quotidiennement (excepté la vitamine D). Elle contient en plus des enzymes, des acides aminés, des sucres et minéraux qui font de cette plante, une ressource nutritionnelle importante pour l\'homme. Tous ces composants sont bénéfiques pour la facilitation de la digestion, réduction de l\'inflammation, ainsi que le nettoyage et l\'apaisement de votre corps.',
            'bienfaits' => 'Si vous avez la peau grasse et de l’acné, sachez que l’aloe vera agit efficacement sur votre peau. Cette plante possède des vertus « assainissantes » permettant de réguler le sébum de la peau ; elle aide à réduire les points noirs et les boutons d’acnés. L’aloe vera permet d’enlever les peaux mortes et d’accélérer la microcirculation. Elle permet également d’hydrater la peau sans la graisser, de resserrer les pores et d’unifier le teint. L’aloe vera protège du vieillissement précoce de la peau, freine l’apparition des rides et des taches, et procure un effet tenseur. C’est un anti-âge naturel qui redonne du tonus aux visages en manque d’élasticité. Par ailleurs, le gel d’aloe vera permet de nourrir votre peau en profondeur, il est donc aussi recommandé pour les peaux matures, fragilisées ou sèches. Si vous présentez des coups de soleil, des cicatrices ou une sécheresse cutanée, pensez à vous masser le visage à l’aloe vera.',
            'allergies' => 'Aujourd’hui, il est établi que le gel de la plante (mucilage clair au cœur des grosses feuilles de la plante) possède des propriétés émollientes pour la peau. Son latex, une sève jaune et amère, contient des molécules laxatives permettant de traiter les symptômes ponctuels de la constipation.',
        ]);

        DB::table('massage')->insert([
            'id' => 3,
            'nom' => 'Massage à l\'huile essentielle de citron',
            'nom_url' => 'massage-a-l-huile-essentielle-de-citron',
            'prix' => 35,
            'resume' => 'L’huile essentielle de citron ne manque pas d’intérêt pour notre organisme. Elle va notamment :<br>booster vos défenses immunitaires et réguler votre métabolisme ;<br>réguler votre système hépatique et contrer vos nausées ;\nrepousser les bactéries grâces à son action antiseptique et antivirale ;<br>tonifier votre système digestif ;<br>fluidifier votre sang ; l’huile essentielle de citron permet d’éviter les troubles circulatoires (notamment les jambes lourdes ou les varices)<br>prévenir certaines maladies cardiovasculaires, à commencer par l’obstruction des bronches du fait de ses propriétés anti-oxydantes et anti-inflammatoires) ;',
            'image' => 'citron.png',
            'produits' => 'Huile essentielle de citron',
            'description' => 'Pour décompresser en fin de journée, associez douze gouttes d’HE de citron à cinq gouttes d’HE de niaouli et cinq gouttes d’HE de lavande. Laissez se diffuser le mélange dans un bol ou un diffuseur (produits disponibles dans la plupart des grandes surfaces).',
            'bienfaits' => 'L’huile essentielle (HE) de citron a des propriétés antiseptiques et antibactériennes qui la rendent efficace contre les infections. Elle favorise également la cicatrisation.',
            'allergies' => 'L’utilisation de l’huile (HE) essentielle de citron peut avoir des effets photosensibilisants, il est donc déconseillé de s’exposer au soleil après son application.',
        ]);
    }
}
