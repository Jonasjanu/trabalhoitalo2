<?php

require_once __DIR__ . '/vendor/autoload.php';

$nome= $_POST['nome_completo'];
$matricula= $_POST['matricula'];
$telefone= $_POST['telefone'];
$email= $_POST['email'];
$curso= $_POST['curso'];
$periodo= $_POST['periodo'];
$disciplina= $_POST['disciplina'];

$protocolo = date('YmdHis').''.$matricula;
$html = "<h1> SELEÇÃO PARA PROGRAMA MONITORIA VOLUNTÁRIA IFCE - CAMPUS-ACOPIARA</h1>
<H2>  TERMO DE ACORDO</H2>

<p>Eu, aluno (a) ______________________________ portador (a) do RG____________________________  e do CPF ____________________________, regulamente matriculado (a) no Curso: __________________________ do IFCE - Campus Acopiara, sob a matrícula __________________________,
telefone ___________________________________, e-mail ________________________________________, concordo em participar do Programa de Monitoria Voluntária do IFCE -
Campus Acopiara na condição de Estudante-Monitor e estou ciente das condições abaixo relacionadas: 


<p>1. O Estudante-Monitor deve cumprir as normas estabelecidas no Regulamento do Programa de Monitoria do IFCE;</p>

<p>2. A Monitoria Voluntária será realizada na (s) disciplina (s) /unidade (s) curricular (es), código (s) do (s) Curso (s), sob orientação e supervisão do Professor-Orientador;</p>

<p>3. As atividades de Monitoria Voluntária obedecerão ao Plano de Trabalho elaborado pelo Professor-Orientador e aprovado pelo Coordenador de Curso;</p>


<p>4. O período de vigência da Monitoria Voluntária será de 29/08/2019 a 23/12/2019;: </p>

<p>5. As atividades serão exercidas sem qualquer vínculo empregatício com o IFCE e em regime de 10 (dez) horas semanais de atividades acadêmicas, não podendo ser superior a
4 (quatro) horas diárias:</p>

<p>6. Os horários das atividades serão estabelecidos em comum acordo com o Professor-Orientador e não poderão coincidir com as atividades acadêmicas do Estudante-Monitor.</P>

<p>7. O registro da carga horária será feito por ficha de frequência mensal, assinada pelo Professor-Orientador e entregue na gestão máxima de ensino do campus.</p>

<p>8. O Estudante-Monitor não terá direito ao auxílio transporte.</p>

<p>9. O Estudante-monitor voluntário não pode receber bolsa do IFCE.</p>

<p>10. São atribuições do Estudante-Monitor:</P>
<p>I. auxiliar os docentes em tarefas didáticas, compatíveis com o seu grau de conhecimento	relacionadas a:

<p>a) assistência aos estudantes dos cursos de graduação para resolução de exercícios e esclarecimento de dúvidas;</p>

<p>b) preparação de atividades teóricas e/ou práticas compatíveis com seu grau de conhecimento e experiência; e</p>

<p>c) elaboração de material didático complementar.</P>

<p>II.  zelar pelo patrimônio e nome da Instituição, bem como cumprir suas normas internas;</p>

<p>III. participar no apoio ao desenvolvimento de atividades institucionais como semana de curso, exposição tecnológica, feira de profissões, ou outros eventos promovidos pelas
Coordenações de Curso ou Departamentos 
Acadêmicos;</P>

<p>IV. elaborar bimestralmente ou semestralmente, o Relatório de Atividades desenvolvidas;</p>

<p>11.  São vedadas ao Estudante-Monitor as seguintes atividades:</p>
<p>I. o exercício de atividades técnico-administrativas;</P>

<p>II.   a regência de classe, em aulas teóricas e/ou práticas, em substituição ao professor titular da disciplina/unidade curricular;</p>

<p>III. o preenchimento de documentos oficiais, de responsabilidade docente.</P>

<p>IV. a correção de prova ou outros trabalhos acadêmicos que impliquem na atribuição de mérito ou julgamento de valor; e</p>

<p>V. a resolução de listas de exercícios ou outros trabalhos acadêmicos, limitando-se ao auxílio aos estudantes que buscam o apoio da Monitoria Voluntária.</p>

<p>12.O Termo de Acordo poderá ser interrompido por qualquer uma das partes, por meio de manifestação por escrito com 30 (trinta) dias de antecedência. E, por estarem de
inteiro e comum acordo com as condições e com o texto deste Termo de Acordo, o Professor-Orientador, o Estudante-Monitor e o Coordenador do Curso o assinam em 3 (três)
vias de igual teor e forma.</p>




<div>
<p div style='text-align:right'> Acopiara-Ce, 09 de Dezembro de 2019.</p>


<

<p div align='center'>_______________________________________________________<br></br>
						Assinatura do Estudante(a).</p>




</div>
<br></br>




<fieldset>

<h1> Protocolo de Inscrição</h1>

".$protocolo.' <br> nome
'.$nome;



$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();

//$nome= $_GET['nome_completo'];
echo $nome;
echo '<br>';
echo $matricula;
echo '<br>';
echo $telefone;
echo '<br>';
echo $email;
echo '<br>';
echo $disciplina;
echo '<br>';
echo $periodo;
echo '<br>';
echo $curso;
echo '<br>';

#<form>

$matricula= $_GET['matricula'];
echo $matricula;
echo '<br>';

$telefone= $_GET['telefone'];
echo $telefone;
echo '<br>';

$email= $_GET['email'];
echo $email;
echo '<br>';

$protocolo = date('YmdHis').''.$matricula;
echo $protocolo;
echo "<br>
<input type='hidden' value='<?php echo ano  + dia +  matricula + ('dmYHi');> name='protocolo' >

</form>";
?>



