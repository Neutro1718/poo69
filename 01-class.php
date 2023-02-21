<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
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
      
            <h1 class="text-2xl">Main Menu</h1>
        </header>
        <section class="p-5 my-y overflow-auto h-[524]">
            <?php
         class vehiculo{
 //atributos
            public $marca;
            public $referencia;
            public $modelo;
            public $color;

//metodos
            public function setAtributos($marca, $referencia, $modelo, $color){
                $this->marca = $marca;
                $this->referencia = $referencia;
                $this->modelo = $modelo;
                $this->color = $color;
         }

         public function getAtributos(){
          return "<div class='p-4 ring-1  ring-while/50 rounded-md'>
                <p><strong>marca:</strong> $this->marca</p> 
                <p><strong>referencia:</strong> $this->referencia</p> 
                <p><strong>modelo:</strong> $this->modelo</p> 
                <p><strong>color:</strong> $this->color</p> 
            </div>";
         }
        }
         //crear un objeto
         $vehiculo1 = new vehiculo();
         $vehiculo1 ->setAtributos('mercedes', 'benz', '2023', 'negro');
    
         echo $vehiculo1 ->getAtributos();

         $vehiculo2 = new vehiculo();
         $vehiculo2 ->setAtributos('twingo', 'brand', '2021', 'banco');
    
         echo $vehiculo2 ->getAtributos();

         $vehiculo3 = new vehiculo();
         $vehiculo3 ->setAtributos('toyota', 'europe', '2018', 'azul');
    
         echo $vehiculo3 ->getAtributos();
         //acceder atributos
       // echo $vehiculo1->marca;
         ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>