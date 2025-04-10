-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2025 at 04:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giovanna_portal_noticias`
--

-- --------------------------------------------------------

--
-- Table structure for table `giovanna_noticias`
--

CREATE TABLE `giovanna_noticias` (
  `id` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `titulo_noticia` varchar(100) NOT NULL,
  `descricao_noticia` text NOT NULL,
  `conteudo_noticia` longtext NOT NULL,
  `palavras_chave` varchar(255) NOT NULL,
  `slug_noticia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `giovanna_noticias`
--

INSERT INTO `giovanna_noticias` (`id`, `data_criacao`, `titulo_noticia`, `descricao_noticia`, `conteudo_noticia`, `palavras_chave`, `slug_noticia`) VALUES
(8, '2025-04-09 22:30:35', 'Avanço Tecnológico Revoluciona a Educação em Comunidades Rurais', 'Projeto brasileiro leva tecnologia de ponta a comunidades rurais, transformando a educação com internet, IA e ensino personalizado. Já impactou mais de 10 mil alunos em cinco estados.', 'Em um marco histórico para a educação no Brasil, uma nova tecnologia desenvolvida por pesquisadores da Universidade de São Paulo (USP) está transformando a maneira como estudantes de comunidades rurais aprendem. O projeto, chamado EducaTech Rural, leva conexão à internet, equipamentos interativos e uma plataforma de ensino personalizada para regiões anteriormente desassistidas.\r\n\r\nA iniciativa foi lançada há pouco mais de um ano e, desde então, já impactou positivamente a vida de mais de 10 mil alunos em cinco estados brasileiros. Utilizando painéis solares, dispositivos de baixo consumo e inteligência artificial, o sistema se adapta às necessidades e dificuldades de cada estudante, oferecendo um ensino mais justo e eficiente.\r\n\r\n“Antes, a gente dependia de apostilas antigas e muitas vezes incompletas. Agora temos acesso a vídeos, exercícios interativos e até professores virtuais”, conta Ana Beatriz, aluna do 9º ano em uma escola no interior do Maranhão. A diretora da escola, Luciana Mendes, afirma que o desempenho dos estudantes melhorou significativamente desde a chegada da tecnologia. “Os índices de evasão caíram quase 40% em menos de um ano.”\r\n\r\nAlém dos alunos, os professores também foram capacitados para usar as novas ferramentas. “No começo foi desafiador, mas agora vejo o quanto isso nos ajuda a preparar aulas mais dinâmicas e eficientes”, diz o professor João Carlos, que atua há 15 anos em escolas rurais.\r\n\r\nO projeto recebeu apoio do governo federal, ONGs internacionais e empresas privadas, como forma de incentivar o desenvolvimento sustentável da educação em regiões isoladas. A meta é expandir a plataforma para todas as regiões do Brasil até 2030.\r\n\r\nEspecialistas em educação destacam que essa iniciativa pode reduzir significativamente as desigualdades educacionais do país. “Quando combinamos tecnologia e pedagogia, conseguimos encurtar distâncias e criar oportunidades reais de mudança social”, afirma a socióloga e educadora Helena Prado.\r\n\r\nNo futuro, os idealizadores do EducaTech Rural pretendem integrar também conteúdos de formação profissional e empreendedorismo, visando preparar os alunos não só para o ensino superior, mas também para o mercado de trabalho e o desenvolvimento de suas comunidades.\r\n\r\nEnquanto isso, histórias como a de Ana Beatriz se multiplicam, provando que, com investimento e inovação, é possível transformar vidas – mesmo nos cantos mais distantes do país.', 'educação rural, tecnologia na educação, EducaTech Rural, inclusão digital, ensino em comunidades iso', 'avanco-tecnologico-revoluciona-a-educacao-em-comunidades-rurais'),
(13, '2025-04-10 01:47:43', 'Nova Tecnologia Promete Reduzir em 70% o Consumo de Energia em Casas Inteligentes', 'Pesquisadores desenvolvem sistema inovador que otimiza o uso de energia em casas inteligentes, promovendo economia e sustentabilidade.', 'Em um avanço significativo no setor de tecnologia residencial, cientistas de uma universidade renomada anunciaram o desenvolvimento de um sistema que promete reduzir em até 70% o consumo de energia elétrica em casas inteligentes. A tecnologia utiliza inteligência artificial para monitorar e ajustar automaticamente o funcionamento de eletrodomésticos e sistemas de climatização, com base no comportamento dos moradores e nas condições climáticas externas.\r\n\r\nA inovação, segundo os pesquisadores, tem potencial para revolucionar o conceito de moradias sustentáveis, ao mesmo tempo em que proporciona maior comodidade e economia para os usuários. Além disso, o sistema é compatível com a maioria dos dispositivos já disponíveis no mercado, facilitando a implementação sem necessidade de grandes reformas.\r\n\r\n\"Estamos falando de uma solução acessível, eficiente e que realmente faz diferença tanto para o bolso do consumidor quanto para o meio ambiente\", afirmou o coordenador do projeto, Dr. Luiz Henrique Ramos.\r\n\r\nA expectativa é que a nova tecnologia comece a ser comercializada ainda este ano, após a finalização dos testes em larga escala.', 'tecnologia, energia, casas inteligentes, inovação, sustentabilidade, consumo energético, economia do', 'nova-tecnologia-promete-reduzir-em-70-o-consumo-de-energia-em-casas-inteligentes'),
(14, '2025-04-10 01:50:34', 'Nova tecnologia promete dobrar a velocidade da internet residencial no Brasil até 2026', 'Empresa brasileira desenvolve tecnologia inédita que pode revolucionar o acesso à internet em áreas urbanas e rurais, com testes previstos ainda para este ano.', 'Uma nova tecnologia de transmissão de dados, criada por uma startup brasileira de inovação em telecomunicações, promete dobrar a velocidade da internet residencial até o final de 2026. A inovação, que combina inteligência artificial com uma nova arquitetura de fibra óptica, foi apresentada nesta semana durante a conferência TechConnect Brasil, realizada na capital paulista.\r\n\r\nSegundo a empresa responsável, chamada Lynx Fiber, o novo sistema será capaz de aumentar significativamente a estabilidade e velocidade da conexão mesmo em regiões afastadas dos grandes centros urbanos. A expectativa é que os primeiros testes com usuários reais comecem no segundo semestre de 2025.\r\n\r\n“Nossa missão é tornar o acesso à internet de alta velocidade mais democrático e eficiente para todos os brasileiros, inclusive nas regiões mais isoladas”, afirma Camila Ribeiro, CEO da Lynx Fiber.\r\n\r\nA proposta também busca reduzir custos para operadoras e consumidores, utilizando materiais recicláveis e estruturas mais leves, o que pode baratear a instalação e manutenção da infraestrutura.\r\n\r\nEspecialistas acreditam que a iniciativa pode posicionar o Brasil como um dos líderes em inovação na área de telecomunicações na América Latina.', 'internet, tecnologia, inovação, velocidade, Brasil, conexão, fibra óptica, acessibilidade digital', 'nova-tecnologia-promete-dobrar-a-velocidade-da-internet-residencial-no-brasil-ate-2026'),
(15, '2025-04-10 02:12:12', 'Seleção Brasileira surpreende e vence a Argentina por 3 a 0 em amistoso internacional', 'Com atuação brilhante de jovens promessas, Brasil derrota a Argentina em jogo preparatório para a Copa do Mundo e anima torcedores com nova fase da equipe.', 'Em uma exibição de gala, a Seleção Brasileira venceu a Argentina por 3 a 0 em um amistoso internacional realizado no Hard Rock Stadium, nos Estados Unidos. A partida, que serviu como preparação para a Copa do Mundo de 2026, marcou o início de uma nova fase do time sob o comando do técnico Leandro Silva, que apostou em jovens jogadores revelados recentemente no futebol nacional.\r\n\r\nOs gols brasileiros foram marcados por João Pedro, atacante do Palmeiras, Lucas Costa, meia do Flamengo, e André Luiz, lateral do Grêmio. A equipe mostrou entrosamento, velocidade e uma postura ofensiva que animou os torcedores, tanto no estádio quanto nas redes sociais, onde o jogo rapidamente se tornou um dos assuntos mais comentados.\r\n\r\n“Estamos construindo algo novo, com uma geração talentosa e comprometida. Esse resultado mostra que estamos no caminho certo”, disse Leandro Silva após a partida.\r\n\r\nJá a seleção argentina, que jogou sem alguns de seus principais nomes, teve dificuldade em se impor durante os 90 minutos e terminou o jogo sob vaias de sua própria torcida.\r\n\r\nCom a vitória, o Brasil reafirma seu favoritismo para o próximo mundial e volta a campo no mês que vem contra a França, em outro amistoso de peso.', 'seleção brasileira, futebol, amistoso, Brasil x Argentina, Copa do Mundo, esportes, jovens talentos', 'selecao-brasileira-surpreende-e-vence-a-argentina-por-3-a-0-em-amistoso-internacional'),
(16, '2025-04-10 02:14:28', 'Congresso aprova novo pacote de medidas para combater a corrupção no serviço público', 'Com ampla maioria, deputados e senadores aprovam pacote anticorrupção que prevê punições mais rígidas e maior transparência na administração pública.', 'O Congresso Nacional aprovou, na noite desta terça-feira, um novo pacote de medidas voltado ao combate à corrupção no serviço público. O projeto, que tramitava há mais de um ano, foi aprovado com 298 votos na Câmara dos Deputados e 61 votos no Senado, após intensos debates entre lideranças partidárias.\r\n\r\nChamado de “Lei da Integridade Pública”, o pacote prevê punições mais duras para agentes públicos envolvidos em esquemas de desvio de verba, além de exigir mais transparência nos contratos firmados entre governos e empresas privadas. Também inclui a criação de um portal nacional de fiscalização, que permitirá à população acompanhar, em tempo real, os gastos de órgãos públicos em todas as esferas.\r\n\r\n“Este é um marco no enfrentamento à corrupção institucionalizada no Brasil. Estamos dando um passo importante para reconstruir a confiança da população nas instituições”, afirmou a senadora Marina Duarte (PSD-SP), uma das autoras do projeto.\r\n\r\nApesar da aprovação quase unânime, partidos de oposição criticaram trechos da proposta, alegando que algumas medidas podem abrir margem para perseguições políticas.\r\n\r\nO texto agora segue para sanção presidencial e deve entrar em vigor nos próximos meses. O governo promete lançar campanhas de conscientização sobre os novos mecanismos de controle e incentivar a participação da sociedade civil na fiscalização.', 'política, corrupção, Congresso Nacional, lei, Brasil, transparência, governo, ética', 'congresso-aprova-novo-pacote-de-medidas-para-combater-a-corrupcao-no-servico-publico');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `giovanna_noticias`
--
ALTER TABLE `giovanna_noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `giovanna_noticias`
--
ALTER TABLE `giovanna_noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
