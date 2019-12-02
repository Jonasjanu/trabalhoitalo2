


    // output data of each row
 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Matricula</th>
                      <th>Curso</th>
                      <th>Disciplina</th>
                      <th>Situação</th>

                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Matricula</th>
                      <th>Curso</th>
                      <th>Disciplina</th>
                      <th>Situação</th>
                    </tr>
                  </tfoot>
                   <tbody>
 
<?php  


 include 'conn.php';




$sql = "SELECT * from aluno a, disciplina d , inscricao i";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($linha = $result->fetch_assoc()) {
$nomeCompleto = $linha["a.nome_completo"];
$matricula = $linha['a.matricula'];
$curso = $linha['a.curso'];

$nome = $linha['d.nome'];
$situacao = $linha['i.situacao'];


        echo "<tr>
                      <td>" .$nomeCompleto."</td>
                      <td>".$matricula."</td>
                      <td>".$curso."</td>
                      <td>". $nome["curso"]. "</td>
                      <td>". $situacao."</td>
                      </tr>"; 
    }
                  
      } else {
    echo "0 results";
}
$conn->close();

?>
    </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>