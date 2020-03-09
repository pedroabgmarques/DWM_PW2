<?php
	
	class Book{
		//Properties
		private $title;
		private $author;
		private $price;

		//Construcor
		function __construct($title, $author, $price){
			$this->title = $title;
			$this->author = $author;
			$this->price = $price;
		}

		//Methods
		function getTitle(){
			return $this->title;
		}

		function getAuthor(){
			return $this->author;
		}

		function getPrice(){
			return $this->price;
		}	
	}

	//Instanciar alguns objetos do tipo "Book"
	$livro1 = new Book("Harry Potter", "J. K. Rowling", 20.79);
	$livro2 = new Book("Biblia", "Deus", 99.99);
	$livro3 = new Book("Momo", "Michal Ende", 15.68);
	$livro4 = new Book("Ensaio sobre a Cegueira", "Saramago", 23.77);
	$livro5 = new Book("A Montanha Mágica", "Thomas Mann", 18.66);
	$livro6 = new Book("Ensaio sobre a Cegueira 2", "Saramago", 23.77);
	$livro7 = new Book("Ensaio sobre a Cegueira 3", "Saramago", 23.77);

	//Inserir os objetos instanciados num array
	$carrinhoCompras = array($livro1, $livro2, $livro3, $livro4, $livro5, $livro6, $livro7);

	//Calcula o total do carrinho de compras
	//O segundo parametro indica se queremos o total tendo em conta os descontos ou não
	function GetTotal($carrinhoCompras, $comDesconto){
		$total = 0;
		foreach($carrinhoCompras as $livro){
			if($comDesconto){
				//Queremos ter em conta os descontos
				if($livro->getPrice() > 20){
					//Este livro tem desconto!
					$total += $livro->getPrice() - ($livro->getPrice() * 0.1);
				}else{
					//Este não tem desconto
					$total += $livro->getPrice();
				}
			}else{
				//Não queremos ter em conta os descontos, basta somar
				$total += $livro->getPrice();
			}
			
		}
		return $total;
	}

	//Devolve um array de titulos com desconto
	function TitulosComDesconto($carrinhoCompras){
		$titulos = array();
		foreach($carrinhoCompras as $livro){
			if($livro->getPrice() > 20){
				array_push($titulos, $livro->getTitle());
			}
		}
		return $titulos;
	}

	//Variáveis para simplificar o php no HTML
	$totalSemDescontos = GetTotal($carrinhoCompras, false);
	$totalComDescontos = GetTotal($carrinhoCompras, true);
	$totalDoDesconto = GetTotal($carrinhoCompras, false) - GetTotal($carrinhoCompras, true);

?>


<!DOCTYPE html>
<html>
<head>
	<title>PHP Objects</title>
</head>
<body>

	<h1>Carrinho de Compras</h1>

	<?php foreach($carrinhoCompras as $livro){ ?>

			<h2><?php echo $livro->getTitle(); ?></h2>
			Author: <?php echo $livro->getAuthor(); ?><br>
			<strong><?php echo $livro->getPrice(); ?></strong>€

	<?php } ?>
	
	<h3>Subtotal: <?php echo $totalSemDescontos; ?>€</h3>

	<h3>Livros com desconto: </h3><?php 

		foreach(TitulosComDesconto($carrinhoCompras) as $titulo){
			echo $titulo ."<br>";
		}

	 ?>

	 <h3>Total com descontos: <?php echo $totalComDescontos; ?>€</h3>

	 <h3>Você poupa: <?php echo $totalDoDesconto; ?>€</h3>

</body>
</html>