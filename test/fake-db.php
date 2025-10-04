<?php  
class activity{
    public function __construct($name, $time, $beschrijving, $inschrijven = false){
        $this->name = (string)$name;
        $this->time = (int)$time;
        $this->beschrijving = (string)$beschrijving;
        $this->inschrijven = (bool)$inschrijven;
    }

    public function to_arr(){
        return [
            "name" => $this->name,
            "time"=> $this->time,
            "beschrijving"=> $this->beschrijving,
            "inschrijven" => $this->inschrijven
        ];
    }
}

//maandag
$m_1 = new activity("Gezamelijk ontbijt", 1000, "Samen ontbijten bij het hoofdgebouw");
$m_2 = new activity("Computeren", 1100, "Leren omgaan met de computer (aanmelden benodigd)", true);
$m_3 = new activity("Schilderen", 1400, "Gezamenlijke schilderles in de recreatieruimte");

//dinsdag
$d_1 = new activity("Wandeling", 1000, "Een korte wandeling door het park");
$d_2 = new activity("Lunch", 1200, "Gezamenlijke lunch in de eetzaal");
$d_3 = new activity("Film kijken", 1500, "Een leuke film in de gemeenschappelijke ruimte");
$d_4 = new activity("Bingo", 1900, "Bingo met kleine prijzen (aanmelden verplicht)", true);

//woensdag
$w_1 = new activity("Ochtendgym", 1030, "Lichte bewegingsoefeningen met begeleiding (aanmelden verplicht)", true);
$w_2 = new activity("Koffie & taart", 1100, "Koffie drinken met vers gebak");
$w_3 = new activity("Muziekmiddag", 1500, "Live muziek door lokale artiesten");

//donderdag
$do_1 = new activity("Boekenclub", 1000, "Samen lezen en bespreken van een kort verhaal");
$do_2 = new activity("Lunch", 1200, "Gezamenlijke lunch in de eetzaal");
$do_3 = new activity("Handwerken", 1400, "Breien, haken en borduren");
$do_4 = new activity("Quizavond", 1900, "Gezellige quiz met vragen over vroeger (aanmelden verplicht)", true);

//vrijdag
$v_1 = new activity("Ontbijt", 1000, "Gezamenlijk ontbijt met verse broodjes");
$v_2 = new activity("Bewegen op muziek", 1100, "Lichte dans- en beweegactiviteit");
$v_3 = new activity("Kookworkshop", 1500, "Samen koken met verse ingrediënten (aanmelden verplicht)", true);

//zaterdag
$za_1 = new activity("Bloemschikken", 1000, "Mooie bloemstukken maken voor het weekend");
$za_2 = new activity("Marktbezoek", 1300, "Bezoek aan de lokale markt (begeleiding aanwezig)");
$za_3 = new activity("Spelletjesmiddag", 1600, "Gezelschapsspellen in de woonkamer");

//zondag
$zo_1 = new activity("Kerkdienst", 1000, "Gezamenlijke kerkdienst in de kapel");
$zo_2 = new activity("Lunch", 1200, "Zondagslunch met soep en broodjes");
$zo_3 = new activity("Familiebezoek", 1400, "Bezoekmoment voor familie en vrienden");


//structuur: rooster -> dag -> activiteit -> naam, tijd, beschrijving
$dataBase = [
    "rooster" => [
        [ $m_1->to_arr(), $m_2->to_arr(), $m_3->to_arr() ],
        [ $d_1->to_arr(), $d_2->to_arr(), $d_3->to_arr(), $d_4->to_arr() ],
        [ $w_1->to_arr(), $w_2->to_arr(), $w_3->to_arr() ],
        [ $do_1->to_arr(), $do_2->to_arr(), $do_3->to_arr(), $do_4->to_arr() ],
        [ $v_1->to_arr(), $v_2->to_arr(), $v_3->to_arr() ],
        [ $za_1->to_arr(), $za_2->to_arr(), $za_3->to_arr() ],
        [ $zo_1->to_arr(), $zo_2->to_arr(), $zo_3->to_arr() ]
    ]
];

?>