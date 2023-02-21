<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="min-h-[100vh] flex justify-center items-center text-gray-800">
    <main class="w-[380px] h-[600px] bg-white/20 rounded">
        <header class="
        flex 
        gap-5
        justify-center
        items-center
        border-b
        pb-5
        border-dashed">

        <a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-10 h-10 hover:-translate-x-2 transition hover:text-red-400 hover:scale-140 text-red-700 ">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
            <h1 class="text-2xl">MUSICA</h1>
        </header>
        <section class="p-5 my-y overflow-auto h-[524]">
       <?php 
        class playlist{
            //atributos
            private $nombre;
            private $artista = array();
            private$album = array();
            private$cover = array();
            private$año = array();

        //metodos 
        public function __construct($nombre){
            $this ->nombre = $nombre;
        }
        public function setPlayList($artista,$album,$cover,$año){
            $this->artista[] = $artista;
            $this->album[] = $album;
            $this->cover[]=$cover;
            $this->año[]=$año;
        }
        public function getPlayList() {
            echo"<div class='bg-white-50 flex flex-col p-2 ring-2 ring-black/50'>
                    <h2 class='text-ceter'>
                        Play List:$this->nombre
                    </h2>";
            for($i = 0; $i < count($this->artista);$i++){
                echo "<div class='bg-white-50 flex flex-col p-2 ring-2 ring-black/50'></div><img class='rounded-full' src='".$this->cover[$i]."' alt='album cover'>
                    <p><strong>Artista: </strong>".$this->artista[$i]."</p>
                    <p><strong>Album: </strong>".$this->album[$i]."</p>
                    <p><strong>Año: </strong>".$this->año[$i]."</p>";
                }
        echo "</div>";
        }     
        }
$playList = new PlayList('rap');
$playList->setPlayList('Alcolirykoz','Aranjuez','https://miro.medium.com/max/1400/1*XTI6KcBO6mrQS00YifQhhg.jpeg','2020');
 
$playList->setPlayList('Doble porcion',' juegos de azar','https://images.genius.com/def9f79d31313136e694d454c2be33b9.1000x1000x1.png','2019');
 
$playList->setPlayList('Granuja','círculo vicioso','https://i.scdn.co/image/ab67616d0000b27334133a7eeb7bbef836ec7737','2017');

$playList->setPlayList('Crudo','todos tienen que comer','https://i.scdn.co/image/ab67616d0000b273cd02321fa6e8203bdff5c3fd','2016');

$playList->setPlayList('Canserbero','Muerte','https://i.scdn.co/image/ab67616d0000b273fd7bf6e660e2da01813c70f7','2014');
 echo $playList->getPlayList();
 
 
       ?>
       </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>