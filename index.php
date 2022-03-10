<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Seja bem vindo! 
        <?php
            $nome = "Matheus";
            echo "Meu nome é ".$nome;

            echo '<hr/>';
            // chamar a variavel da variavel;
            $Matheus = "Yusuke";
            echo "\nMeu nome é ".$$nome;

            echo '<hr/>';

            $idade = 17;
            if($idade < 18) {
                echo 'Menor de idade!';
            } else {
                echo 'Maior de idade!';
            }

            echo '<hr/>';

            $i = 0;
            while($i < 10) {
                echo $i;
                echo '<hr/>';
                $i++;
            }
            echo '<hr/>';
            
            for ($j=0; $j < 10; $j++) { 
                echo $j;
                echo '<hr/>';
            }

            function printParams($params) {
                echo $params;
            }
            
            printParams("Matheus");


            class Pessoa {
                public $nome;
                public $idade;

                public function __construct($nome,$idade) {
                    $this->nome = $nome;
                    $this->idade = $idade;
                }

                public function printInformacoes() {
                    echo $this->nome;
                    echo '<br/>';
                    echo $this->idade;
                }
            }
            $pessoa = new Pessoa("Matheus" , 17);

            $pessoa->printInformacoes();


            $arrays = ["Matheus" , "Lucas" , "João"];
?>
    </p>
</body>
</html> 