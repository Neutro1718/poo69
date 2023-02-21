<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03-private</title>
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
      
            <h1 class="text-2xl">03-private</h1>
        </header>
       <section class="p-5 my-y overflow-auto h-[524]">
        <h2 class="text-center text-2xl mb-6">TABLA</h2>
  <form class="p-2 mb-4 grid grid-cols-2 justify-center gap-4 ring-1 bg-while/20 ring-while/50 rounded-md" actions="" metods="post">
    <div class="flex flex-col gap-4 items-center" >
        <label class="text">Filas:</label>
        <input type="range" name="nr" min="1" max="20" step="1" 
        oninput="onr.value=this.value">
        <output id="onr" class="text-2xl"></output>
    </div>
    <div class="flex flex-col gap-4 items-center">
        <label>Columnas:</label>
        <input type="range" name="nc" min="1" max="20" step="1" 
        oninput="onc.value=this.value">
        <output id="onc" class="text-2xl"></output>
    </div>
<button class="p-2 bg-blue-300 w-[324px] text-white">Confirmar</button>
</form>
<?php
class table{
    private $nr;            
    private $nc;


    public function __construct($nr,$nc){
        $this->nr = $nr;
        $this->nc = $nc;
        $this->maketable();
    }
    private function maketable(){
        echo "<table class='border-collapse mx-auto'>";
        for($r = 1; $r <= $this->nr;$r++){
            echo "<tr>";
            for($c = 1; $c <= $this->nc; $c++){
                echo "<td class='p-2 ring-1 ring-white/50'></td>";
            }
         echo   "</tr>";
           
}
echo "</table>";
    }
  
}
if($_POST)
$table = new table($_POST['nr'],$_POST['nc']);
?>
       </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>