-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28-Fev-2016 às 16:05
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toystore`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `about`
--

CREATE TABLE `about` (
  `rgm` int(8) NOT NULL COMMENT 'Apenas numeros',
  `nome` varchar(50) NOT NULL,
  `imagem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `about`
--

INSERT INTO `about` (`rgm`, `nome`, `imagem`) VALUES
(15155536, 'Alan Gomes Coimbra', 'alan.jpg'),
(15725243, 'Augusto Morais Santos', 'augusto.jpg'),
(15478718, 'João Marco Gonçalves', 'joao.jpg'),
(15000893, 'Manoel Messias Soares Santos', 'manoel.jpg'),
(15383245, 'Raphael Baldarena de Lima', 'raphael.jpg'),
(15118444, 'Roberto Vinícius da Silva', 'roberto.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `toys`
--

CREATE TABLE `toys` (
  `codigo` int(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `preco` float(8,2) NOT NULL,
  `descricao` varchar(120) NOT NULL COMMENT 'max. 50 caracteres',
  `detalhe` varchar(600) NOT NULL COMMENT 'max. 600 caracteres',
  `imagem` varchar(200) NOT NULL,
  `publico` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `toys`
--

INSERT INTO `toys` (`codigo`, `nome`, `marca`, `categoria`, `preco`, `descricao`, `detalhe`, `imagem`, `publico`) VALUES
(2, 'Boneca Barbie Salva Vidas Promo', 'Mattel', 'Bonecas', 59.90, 'Boneca Barbie - Salva-vidas - Mattel', 'Esta Barbie da linha profissões está pronta para alcançar seu sonho de se tornar uma salva vidas! Com um maiô e acessórios de salva vidas, ela está pronta para passar o dia na praia protegendo os banhistas!', 'barbie.jpg', 'girl'),
(3, 'Pelúcia Divertida Mente - Alegria', 'Sunny', 'Pelucias', 179.99, 'Pelúcia Luxo com Som - Alegria 15cm - Sunny', 'Divertida Mente é animação que está fazendo maior sucesso nas telinhas. Pensando nisso, que a Sunny Brinquedos traz para você essa maravilhosa Pelúcia Divertida Mente. Fabricado com excelente material, a pelúcia irá divertir toda sua família, além disso, possui componentes eletrônicos, ou seja, basta apertar o local indicado que você conseguirá ouvir os sons, além de ser super fofinha! Escolha o personagem que mais combina com você e que a diversão comece! ', 'insideout.jpg', 'famy'),
(4, 'Laptop Frozen', 'Candide', 'Eletronicos', 145.90, 'Laptop Infantil - Frozen - Candide', 'As crianças estão se conectando cada vez mais cedo com as novas tecnologias e para alinhar isso com o aprendizado, a Candide desenvolveu o Laptop Infantil. Com a temática do filme Frozen, ele possui 30 atividades interativas de português, matemática, lógica e jogos.', 'pcfrozen.jpg', 'girl'),
(5, 'Pelúcia Peppa Pig', 'Candide', 'Pelucias', 79.90, 'Pelúcia Peppa Pig - Candide', 'Todas as crianças adoram os personagens do desenho Peppa, e agora elas poderão brincar com eles em qualquer lugar.\r\nSeus filhos vão adorar criar novas cenas de aventura e diversão com suas figuras prediletas. A Peppa, porquinha mais linda de todas, está charmosa com seu vestido vermelho e sapatinhos fashions.', 'peppa.jpg', 'girl'),
(6, 'Baby Alive - Hora de Comer', 'Hasbro', 'Bonecas', 249.90, 'Boneca Baby Alive Negra - Hora de Comer - Hasbro', 'Agora a sua filha pode ter seu próprio bebê para amar e  "alimentar"! A Baby Alive Hora de Comer precisa de todo o carinho e amor. Faça a comidinha no pratinho e também dê água para a sua Baby Alive. Depois é hora de trocar a fraldinha da sua Baby Alive, pois ela faz xixi e caquinha como um bebê de verdade!', 'alive.jpg', 'famy'),
(7, 'Princesas Clássicas - Rapunzel', 'Mattel', 'Bonecas', 175.91, 'Princesas Clássicas Disney - Rapunzel - Mattel', 'Agora as princesas mais queridas dos filmes da Disney estão disponíveis no sortimento desta coleção. A Cinderela, a Ariel, a Branca de Neve e a Rapunzel estão adoráveis em seus trajes clássicos, iguais aos das histórias.', 'rapunzel.jpg', 'girl'),
(8, 'Monster High Assombrada - Spectra', 'Mattel', 'Bonecas', 99.90, 'Boneca Monster High - Spectra - Mattel', 'É mesmo de arrepiar quando as monstrinhas de Monster High se aventuram em Haunted High, no mundo dos espíritos, para salvar sua amiga Spectra Vondergeist no filme Monster High: Assombrada. Para isso, as nossas monstrinhas favoritas usam Areia de Bicho Papão e se transformam em fantasmas!', 'monster2.jpg', 'girl'),
(9, 'My Little Pony - Estilosa', 'Hasbro', 'Bonecas', 59.90, 'My Little Pony Equestria Girl - Estilosa - Hasbro', 'A Equestria Girl Estilosa irá agitar o palco e também impressionar a todos com as suas roupas estilosas. A magia da amizade nunca muda, e agora sua pequena tem uma amiga para criar lindas histórias de aventura.', 'pony.jpg', 'girl'),
(10, 'Detetive', 'Estrela', 'Jogos', 79.90, 'Jogo Detetive - Estrela', 'Dr. Pessoa é a vítima do crime. São muitas pistas para atrapalhar a investigação. E só um verdadeiro Detetive pode desvendar este mistério!  Todos são suspeitos cabe ao melhor detetive desvendar esse mistério.\r\n', 'detetive.jpg', 'boy'),
(11, 'Jogo da Vida', 'Estrela', 'Jogos ', 72.52, 'Jogo da Vida - Estrela', 'A vida é um jogo! Negócios, carreira, casamento, filhos... Grandes surpresas, situações difíceis ou golpes de sorte não param de acontecer pelo caminho! Você nunca sabe o que lhe espera no futuro!\r\n', 'vida.jpg', 'famy'),
(12, 'Se Vira', 'Estrela', 'Jogos', 39.18, 'Jogo Se Vira - Estrela', 'Esse jogo que exige concentração é muito divertido. O jogador terá de fazer as ações que estiverem descritas nas cartas, como equilibrar a bolinha embaixo do queixo ou por a carta sobre a cabeça.\r\n', 'sevira.jpg', 'famy'),
(13, 'Imagem e Ação', 'Grow', 'Jogos', 71.92, 'Jogo Imagem e Ação - No Limite - Grow', 'Esse jogo vai testar os limites dos jogadores! Dessa vez cada equipe terá até 3 palavras! Mas atenção: o tempo continua o mesmo! Por isso, use toda a sua criatividade, mas seja rápido!', 'imgacao.jpg', 'boy'),
(14, 'Pelúcia Nemo', 'Long Jump', 'Pelucias', 149.89, 'Pelúcia Nemo G - Long Jump', 'O peixinho mais simpático da televisão agora na sua casa! Ele será o seu companheiro para dormir e com ele vocês vão brincar durante horas!\r\n', 'nemo.jpg', 'boy'),
(15, 'Pelúcia Olaf', 'Long Jump', 'Pelucias', 79.11, 'Pelúcia Olaf - 45cm - Long Jump', 'Um abobalhado boneco de neve que adora o verão. Nascido dos poderes mágicos de Elsa, Olaf é de longe o boneco de neve mais amigável que passeia pelas montanhas de Arendelle. A sua capacidade de se desmontar quando convém e quando não convém resultam em momentos estranhos mas de grande humor.\r\n', 'olaf.jpg', 'boy'),
(16, 'Pelúcia Coelho Sansão', 'Multibrink', 'Pelucias', 99.80, 'Pelúcia Sansão - 85cm - Multibrink', 'Parece que a Mônica deixou o coelho favorito dela por aqui. E agora ele pode ser todo seu. Mas cuidado, não dê nós nas orelhas dele. Afinal, ele é bem grande!\r\n', 'sansao.jpg', 'famy'),
(17, 'Cão Spock', 'Candide', 'Pelucias', 284.60, 'Cão Spock Interativo - Profissões - Pirata', 'O Cão Spock é um brinquedo voltado para todas as idades. Ele interage através de reconhecimento de voz. Ele vai ser o verdadeiro companheiro das crianças, para todos os momentos.\r\n', 'spock.jpg', 'boy'),
(18, 'Quadricóptero H-Drone', 'Candide', 'Eletronicos', 263.12, 'Quadricóptero H-Drone R8 Médio - Candide', 'Um brinquedo que transforma o dia em uma verdadeira aventura. O Quadricóptero H-Drone R8 Médio vem com rádio controle de 2.4G, permite manobra de 360º e além disso, sua bateria é recarregável e já acompanha um carregador no próprio controle ou USB do computador.\r\n', 'helicop.jpg', 'boy'),
(19, 'X-Pad Touch da Xuxa', 'Candide', 'Eletronicos', 59.90, 'X-Pad Touch da Xuxa - 40 atividades - Candide', 'Com o X-Pad da Xuxa sua filha vai brincar e aprender de uma forma muita divertida. Leve, compacto e fácil de transportar, o X-Pad tem 40 atividades que abrangem diversos temas.\r\n', 'xpad.jpg', 'famy'),
(20, 'Netbook Barbie', 'Oregon', 'Eletronicos', 69.89, 'Netbook da Barbie 2012 - Rosa - Oregon', 'O Netbook da Barbie tem 30 atividades que englobam vocabulário, musica, matemática, lógica, memória e jogos. Desenvolvido para crianças a partir de 5 anos, conta ainda com ajuste de volume, mouse, tela em alta resolução, voz oficial da Barbie e som digital. É um produto de excelente qualidade, é diversão garantida!\r\n', 'pcbarbie.jpg', 'girl'),
(21, 'Twister Novo', 'Hasbro', 'Jogos', 109.99, 'Jogo Twister - Novos Movimentos - Hasbro', 'Chame os seus amigos para a eletrizante disputa do Twister Novo, uma brincadeira que vai te virar pelo avesso.', 'twister.jpg', ''),
(22, 'Novo Jenga', 'Hasbro', 'Jogos', 82.32, 'Jogo Jenga - Nova Edição - Hasbro', 'Um jogo de estratégia e movimentos precisos! Escolha bem o bloco e seja preciso em seus movimentos. Passando os blocos da base para o topo, mostre que você é habilidoso, tomando cuidado para não derrubar a torre! Esta é a combinação que todos os pais sempre procuraram, brinquedos que divirtam e estimulem o desenvolvimento e imaginação de seus filhos.', 'jenga.jpg', ''),
(23, 'Veículo Batman', 'Candide', 'Eletronicos', 89.99, 'Veículo de Ação Batman com Três Funções - Candide', 'Com o Veículo de Ação do Batman com rádio controle de 3 funções eles vão se divertir por horas e levar ao último estágio, o verbo: brincar. É mais quem um simples carro, ou um mero veículo. É um grande entretenimento no que se refere a brinquedos de aventura. Seu filho e o Batman, o grande super herói do momento vão fazer entreter a garotada de todas as maneiras e possibilidades. O brinquedo utiliza 4 pilhas AA no carro e uma bateria 9V no controle.', 'batman.jpg', ''),
(27, 'Relógio Ben 10', 'Sunny', 'Eletronicos', 98.83, 'Relógio Ben 10 Omnitrix - Sunny', 'Esse Omnitrix possui efeito sonoro, luzes e 10 posições de alienígenas em um disco giratório para escolher o melhor alien Ben 10 para começar a brincadeira feito um herói. Os monstros galácticos brilham no escuro.', 'ben10.jpg', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `nome` varchar(250) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`nome`, `senha`) VALUES
('rvinicius396g', '211297');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `toys`
--
ALTER TABLE `toys`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `toys`
--
ALTER TABLE `toys`
  MODIFY `codigo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
