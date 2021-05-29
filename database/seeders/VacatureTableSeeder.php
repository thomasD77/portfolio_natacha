<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class  VacatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vacatures')->insert([
            'title'=>'GEZOCHT: STAGIAIR KABINET GROEN OOSTENDE',
            'profile' => 'Je volgt een opleiding hoger onderwijs en hebt politieke interesse. Je hebt affiniteit met het groene gedachtengoed. Sterke communicatieve vaardigheden zijn een must, je bent gebeten door sociale media en actief op een reeks netwerken. Je spreekt en schrijft vloeiend Nederlands en kan informatie duidelijk overbrengen aan verschillende doelgroepen. Je bent kritisch en denkt actief mee.Je bent flexibel en kan zowel zelfstandig als in teamverband werken, je werkt nauwkeurig en weet je dagtaken efficiënt te organiseren. Strakke deadlines zijn voor jou geen probleem. Af en toe werken in de avonduren of in het weekend is geen probleem voor jou.',
            'offer'=> 'We zijn steeds op zoek naar enthousiaste studenten die stage willen lopen in het kader van een schoolopleiding. Je werkt in een klein multifunctioneel team binnen een dynamische organisatie. Als stagiair ondersteun je het Groen-kabinet op diverse domeinen. Je stagepakket kan aangepast worden naargelang eigen wensen en eisen van de school. Je brengt minstens 3 dagen per week door op het Stadhuis in Oostende. Wij bieden een leuke en unieke werkomgeving waar je veel kunt leren. De stage is bij voorkeur fulltime. Minimumduur van de stage bedraagt tien weken.',
            'duties'=> 'Je volgt de social media accounts van de Groen-schepenen en de lokale groep en detecteert belangrijke content om in te zetten op de website Groen Oostende. Daarnaast volg je ook reacties op social media kanalen van de schepenen en de lokale partij-afdeling op. Je antwoordt zelf in naam van Groen Oostende of wijst openstaande vragen ter opvolging toe aan Groen-mandatarissen.Je staat ook in voor contentcreatie (foto, video, tekstupdates) voor sociale media, dat gebeurt op verplaatsing (bij lokale acties, op stap met de schepenen) en in huis. In overleg met de lokale Groen afdeling: aanvullen social media, helpen bij de opmaak van nieuwsbrieven en online advertising: creatie, targeting en opvolging.',
            'remarque'=> 'IS DEZE STAGE JOU OP HET LIJF GESCHREVEN? Solliciteer dan hier op onze website!',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('vacatures')->insert([
            'title'=>'GEZOCHT: INTRIM STADHUIS OOSTENDE',
            'profile' => 'Je volgt een opleiding hoger onderwijs en hebt politieke interesse. Je hebt affiniteit met het groene gedachtengoed. Sterke communicatieve vaardigheden zijn een must, je bent gebeten door sociale media en actief op een reeks netwerken. Je spreekt en schrijft vloeiend Nederlands en kan informatie duidelijk overbrengen aan verschillende doelgroepen. Je bent kritisch en denkt actief mee.Je bent flexibel en kan zowel zelfstandig als in teamverband werken, je werkt nauwkeurig en weet je dagtaken efficiënt te organiseren. Strakke deadlines zijn voor jou geen probleem. Af en toe werken in de avonduren of in het weekend is geen probleem voor jou.',
            'offer'=> 'We zijn steeds op zoek naar enthousiaste studenten die stage willen lopen in het kader van een schoolopleiding. Je werkt in een klein multifunctioneel team binnen een dynamische organisatie. Als stagiair ondersteun je het Groen-kabinet op diverse domeinen. Je stagepakket kan aangepast worden naargelang eigen wensen en eisen van de school. Je brengt minstens 3 dagen per week door op het Stadhuis in Oostende. Wij bieden een leuke en unieke werkomgeving waar je veel kunt leren. De stage is bij voorkeur fulltime. Minimumduur van de stage bedraagt tien weken.',
            'duties'=> 'Je volgt de social media accounts van de Groen-schepenen en de lokale groep en detecteert belangrijke content om in te zetten op de website Groen Oostende. Daarnaast volg je ook reacties op social media kanalen van de schepenen en de lokale partij-afdeling op. Je antwoordt zelf in naam van Groen Oostende of wijst openstaande vragen ter opvolging toe aan Groen-mandatarissen.Je staat ook in voor contentcreatie (foto, video, tekstupdates) voor sociale media, dat gebeurt op verplaatsing (bij lokale acties, op stap met de schepenen) en in huis. In overleg met de lokale Groen afdeling: aanvullen social media, helpen bij de opmaak van nieuwsbrieven en online advertising: creatie, targeting en opvolging.',
            'remarque'=> 'IS DEZE STAGE JOU OP HET LIJF GESCHREVEN? Solliciteer dan hier op onze website!',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
