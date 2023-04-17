<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    public $comics = [
        [
            'id' => 1,
            'title' => "Demon's Layer",
            'editor' => "Shueisha",
            'genre' => "Azione",
            'img' => "demonlayer.jpg",
            'abstract' => "Giappone, Periodo Taishō. Tanjiro è il primogenito di una numerosa famiglia orfana del padre, che vive in un'isolata casa di montagna tra i boschi. Un giorno, tornando a casa dopo essere stato al villaggio a vendere il carbone, trova la madre e i fratelli massacrati, ad eccezione della sorella Nezuko che è stata trasformata in un demone, ma ha ancora qualche pensiero ed emozione umana. Tanjiro inizia così il suo viaggio in cerca di una cura per far tornare sua sorella di nuovo umana e per impedire che la stessa tragedia accaduta a loro possa accadere ad altre persone.",
            'release' => "2016"
        ],
        [
            'id' => 2,
            'title' => "Dylan Dog",
            'editor' => "Sergio Bonelli",
            'genre' => "Horror",
            'img' => "dylandog.jpg",
            'abstract' => "Dylan Dog è un personaggio dei fumetti creato da Tiziano Sclavi ed elaborato graficamente da Claudio Villa e Angelo Stano[senza fonte], protagonista dell'omonima serie di genere horror edita dal 1986 dalla Daim Press che poi divenne la Sergio Bonelli Editore.[3] La serie ha raggiunto presto un successo tale da renderlo uno dei fumetti italiani più venduti, oggetto di numerose ristampe[4][5][6][7] e considerato un cult del fumetto italiano[4]. Gli albi della serie a fumetti sono tradotti e pubblicati anche all'estero[8]. Al personaggio è ispirato un film omonimo del 2010[9].",
            'release' => "1986"
        ],
        [
            'id' => 3,
            'title' => "One-Punch Man",
            'editor' => "Shueisha",
            'genre' => "Azione",
            'img' => "onepunchman.jpg",
            'abstract' => "One-Punch Man  è un manga realizzato da One e pubblicato sul suo blog a partire dal 3 luglio 2009[4].",
            'release' => "2012"
        ],
        [
            "id" => 4,
            "title" => "Watchmen",
            "editor" => "DC Comics",
            "genre" => "Superhero",
            "img" => "watchmen.jpg",
            "abstract" => "Le vicende di Watchmen sono ambientate in una realtà alternativa molto simile a quella del mondo reale, in un 1985 in cui Stati Uniti e Unione Sovietica sono in piena guerra fredda e sull'orlo di una guerra nucleare.",
            "release" => "1987"
        ],
        [
            "id" => 5,
            "title" => "The Walking Dead",
            "editor" => "Image Comics",
            "genre" => "Horror",
            "img" => "walkingdead.jpg",
            "abstract" => "Rick Grimes, poliziotto di periferia, viene ferito in seguito a uno scontro a fuoco con un fuggitivo. Al suo risveglio in ospedale non trova nessuno, avventurandosi per i corridoi e le stanze dell'edificio trova solo cadaveri ed esseri che tentano di aggredirlo.",
            "release" => "2003"
        ],
        [
            "id" => 6,
            "title" => "Preacher",
            "editor" => "Vertigo",
            "genre" => "Azione",
            "img" => "preacher.jpg",
            "abstract" => "Jesse Custer è un predicatore squattrinato che vive ad Annville, piccola cittadina del Texas; è stato posseduto da una creatura soprannaturale di nome ''Genesis'' in un incidente che ha provocato la morte della sua intera congregazione di fedeli ed ha raso al suolo la sua chiesa.",
            "release" => "1995"
        ],
        [
            "id" => 7,
            "title" => "One Piece",
            "editor" => "Shūeisha",
            "genre" => "Avventura",
            "img" => "onepiece.jpg",
            "abstract" => "Monkey D. Rufy è un giovane pirata sognatore che da piccolo ha involontariamente mangiato un frutto del diavolo, diventando così un uomo di gomma con la capacità di allungarsi e deformarsi a piacimento.",
            "release" => "1995"
        ],
        [
            "id" => 8,
            "title" => "Avengers",
            "editor" => "Marvel Comics",
            "genre" => "Supereroi",
            "img" => "avengers.jpg",
            "abstract" => "I Vendicatori sono un gruppo di supereroi riconosciuti a livello internazionale come unità di crisi e hanno la collaborazione di molte nazioni ricevendo finanziamenti dall'ONU, per la quale svolgono missioni.",
            "release" => "1963"
        ],
    ];

    public function showHomePage() {

        return view('welcome', ['comics' => $this->comics]);

    }

    public function showComic($id)
    {
        dd($id);
    }

    public function searchComic(Request $request){ 
        
        $filterComics = [];
        $chiaveRicerca = $request->query('searchKey');
        foreach($this->comics as $comic){
            if(Str::contains(strtolower($comic['title']), strtolower($chiaveRicerca)) ) {
                $filterComics[] = $comic;
            }
        }
       return view('searchres', ['comics' => $filterComics, 'chiaveRicerca' => $chiaveRicerca]);
    }

}
