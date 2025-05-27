<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location: index.php");
    }
    $emails = $_SESSION['emails'];
    $id = array_search($_SESSION['usuario'], $emails);
    $nomes = $_SESSION['nomes'];
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <style>/* From Uiverse.io by OnlyCodeChannel */ 
/* From Uiverse.io by Amankrah */ 
.galaxy {
  height: 800px;
  width: 800px;
  background-image: radial-gradient(#ffffff 1px, transparent 1px),
    radial-gradient(#ffffff 1px, transparent 1px);
  background-size: 50px 50px;
  background-position:
    0 0,
    25px 25px;
  position: absolute;
  z-index: -1;
  animation: twinkle 5s infinite;
}

@keyframes twinkle {
  0%,
  100% {
    opacity: 0.5;
  }
  50% {
    opacity: 1;
  }
}

.stardust,
.cosmic-ring,
.starfield,
.nebula {
  max-height: 70px;
  max-width: 314px;
  height: 100%;
  width: 100%;
  position: absolute;
  overflow: hidden;
  z-index: -1;
  border-radius: 12px;
  filter: blur(3px);
}

.input {
  background-color: #05071b;
  border: none;
  width: 301px;
  height: 56px;
  border-radius: 10px;
  color: #a9c7ff;
  padding-inline: 59px;
  font-size: 18px;
}

#search-container {
  display: flex;
  align-items: center;
  justify-content: center;
}

.input::placeholder {
  color: #6e8cff;
}

.input:focus {
  outline: none;
}

#main:focus-within > #input-mask {
  display: none;
}

#input-mask {
  pointer-events: none;
  width: 100px;
  height: 20px;
  position: absolute;
  background: linear-gradient(90deg, transparent, #05071b);
  top: 18px;
  left: 70px;
}

#cosmic-glow {
  pointer-events: none;
  width: 30px;
  height: 20px;
  position: absolute;
  background: #4d6dff;
  top: 10px;
  left: 5px;
  filter: blur(20px);
  opacity: 0.8;
  transition: all 2s;
}

#main:hover > #cosmic-glow {
  opacity: 0;
}

.stardust {
  max-height: 63px;
  max-width: 307px;
  border-radius: 10px;
  filter: blur(2px);
}

.stardust::before {
  content: "";
  z-index: -2;
  text-align: center;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) rotate(83deg);
  position: absolute;
  width: 600px;
  height: 600px;
  background-repeat: no-repeat;
  background-position: 0 0;
  filter: brightness(1.4);
  background-image: conic-gradient(
    rgba(0, 0, 0, 0) 0%,
    #4d6dff,
    rgba(0, 0, 0, 0) 8%,
    rgba(0, 0, 0, 0) 50%,
    #6e8cff,
    rgba(0, 0, 0, 0) 58%
  );
  transition: all 2s;
}

.cosmic-ring {
  max-height: 59px;
  max-width: 303px;
  border-radius: 11px;
  filter: blur(0.5px);
}

.cosmic-ring::before {
  content: "";
  z-index: -2;
  text-align: center;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) rotate(70deg);
  position: absolute;
  width: 600px;
  height: 600px;
  filter: brightness(1.3);
  background-repeat: no-repeat;
  background-position: 0 0;
  background-image: conic-gradient(
    #05071b,
    #4d6dff 5%,
    #05071b 14%,
    #05071b 50%,
    #6e8cff 60%,
    #05071b 64%
  );
  transition: all 2s;
}

.starfield {
  max-height: 65px;
  max-width: 312px;
}

.starfield::before {
  content: "";
  z-index: -2;
  text-align: center;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) rotate(82deg);
  position: absolute;
  width: 600px;
  height: 600px;
  background-repeat: no-repeat;
  background-position: 0 0;
  background-image: conic-gradient(
    rgba(0, 0, 0, 0),
    #1c2452,
    rgba(0, 0, 0, 0) 10%,
    rgba(0, 0, 0, 0) 50%,
    #2a3875,
    rgba(0, 0, 0, 0) 60%
  );
  transition: all 2s;
}

#search-container:hover > .starfield::before {
  transform: translate(-50%, -50%) rotate(-98deg);
}

#search-container:hover > .nebula::before {
  transform: translate(-50%, -50%) rotate(-120deg);
}

#search-container:hover > .stardust::before {
  transform: translate(-50%, -50%) rotate(-97deg);
}

#search-container:hover > .cosmic-ring::before {
  transform: translate(-50%, -50%) rotate(-110deg);
}

#search-container:focus-within > .starfield::before {
  transform: translate(-50%, -50%) rotate(442deg);
  transition: all 4s;
}

#search-container:focus-within > .nebula::before {
  transform: translate(-50%, -50%) rotate(420deg);
  transition: all 4s;
}

#search-container:focus-within > .stardust::before {
  transform: translate(-50%, -50%) rotate(443deg);
  transition: all 4s;
}

#search-container:focus-within > .cosmic-ring::before {
  transform: translate(-50%, -50%) rotate(430deg);
  transition: all 4s;
}

.nebula {
  overflow: hidden;
  filter: blur(30px);
  opacity: 0.4;
  max-height: 130px;
  max-width: 354px;
}

.nebula:before {
  content: "";
  z-index: -2;
  text-align: center;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) rotate(60deg);
  position: absolute;
  width: 999px;
  height: 999px;
  background-repeat: no-repeat;
  background-position: 0 0;
  background-image: conic-gradient(
    #000,
    #4d6dff 5%,
    #000 38%,
    #000 50%,
    #6e8cff 60%,
    #000 87%
  );
  transition: all 2s;
}

#wormhole-icon {
  position: absolute;
  top: 8px;
  right: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 2;
  max-height: 40px;
  max-width: 38px;
  height: 100%;
  width: 100%;
  isolation: isolate;
  overflow: hidden;
  border-radius: 10px;
  background: linear-gradient(180deg, #1c2452, #05071b, #2a3875);
  border: 1px solid transparent;
}

.wormhole-border {
  height: 42px;
  width: 40px;
  position: absolute;
  overflow: hidden;
  top: 7px;
  right: 7px;
  border-radius: 10px;
}

.wormhole-border::before {
  content: "";
  text-align: center;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) rotate(90deg);
  position: absolute;
  width: 600px;
  height: 600px;
  background-repeat: no-repeat;
  background-position: 0 0;
  filter: brightness(1.35);
  background-image: conic-gradient(
    rgba(0, 0, 0, 0),
    #4d6dff,
    rgba(0, 0, 0, 0) 50%,
    rgba(0, 0, 0, 0) 50%,
    #6e8cff,
    rgba(0, 0, 0, 0) 100%
  );
  animation: rotate 4s linear infinite;
}

#main {
  position: relative;
}

#search-icon {
  position: absolute;
  left: 20px;
  top: 15px;
}

@keyframes rotate {
  100% {
    transform: translate(-50%, -50%) rotate(450deg);
  }
}


</style>
        <meta name="viewport" content="width=device-width, initial-scale-1">
        <meta http-equiv="content-language" content="pt-br">
        <title>PHP / Array</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <style>
        body {
            background-color:#808080;
        }
        .user {
            float: right;
        }
    </style>
    <body>
        <center><h1><b>PHP/ARRAY</b></h1></center>
        <hr/>
        <nav>
           &nbsp;&nbsp;<a href="inicial.php" style="color: white; text-decoration: none">HOME |</a><a href="listagem.php" style="color: white; text-decoration: none"> LISTAGEM |</a><a href="gravar.php" style="color: white; text-decoration: none"> SALVAR DADOS</a>
           <div class="user">
                <b style="color: white"><?php echo $nomes[$id]; ?> |</b> <a href="sair.php" style="color: white; text-decoration: none">SAIR</a>&nbsp;&nbsp;
           </div>
        </nav>
        <br/><br/>
        
        <br/><br/>
        <div class="row justify-content-center row-cols-1 row-cols-md-2 text-center">
            <div class="cols">
                <div class="card mb-2 rounded shadow-sw">
                    <div class="card-header py-3">
                        <h3><svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="black" class="bi bi-people" viewBox="0 0 16 16">
                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                        </svg>&nbsp;<b>LISTAGEM DE USUÁRIOS</b></h3>
                    </div>
                    <div class="card-body">
                   <!-- From Uiverse.io by Amankrah --> 
<div class="galaxy"></div>
<div id="search-container">
  <div class="nebula"></div>
  <div class="starfield"></div>
  <div class="cosmic-dust"></div>
  <div class="cosmic-dust"></div>
  <div class="cosmic-dust"></div>

  <div class="stardust"></div>

  <div class="cosmic-ring"></div>

  <div id="main">
    <input
      class="input"
      name="text"
      type="text"
      placeholder="Explore the cosmos..."
    />
    <div id="input-mask"></div>
    <div id="cosmic-glow"></div>
    <div class="wormhole-border"></div>
    <div id="wormhole-icon">
      <svg
        stroke-linejoin="round"
        stroke-linecap="round"
        stroke-width="2"
        stroke="#a9c7ff"
        fill="none"
        height="24"
        width="24"
        viewBox="0 0 24 24"
      >
        <circle r="10" cy="12" cx="12"></circle>
        <path
          d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"
        ></path>
        <path d="M2 12h20"></path>
      </svg>
    </div>
    <div id="search-icon">
      <svg
        stroke-linejoin="round"
        stroke-linecap="round"
        stroke-width="2"
        stroke="url(#cosmic-search)"
        fill="none"
        height="24"
        width="24"
        viewBox="0 0 24 24"
      >
        <circle r="8" cy="11" cx="11"></circle>
        <line y2="16.65" x2="16.65" y1="21" x1="21"></line>
        <defs>
          <linearGradient gradientTransform="rotate(45)" id="cosmic-search">
            <stop stop-color="#a9c7ff" offset="0%"></stop>
            <stop stop-color="#6e8cff" offset="100%"></stop>
          </linearGradient>
        </defs>
      </svg>
    </div>
  </div>
</div>

</button>

                    
                </button>            
                </div>



                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>NOME</th>
                                <th>E-MAIL</th>
                                <th>GENERO</th>
                                <th>AÇÕES</th>
                            </tr>
                            <?php
                                $reg = count($_SESSION['nomes']);
                                for ($i=0; $i <= $reg-1 ; $i++) { 
                                    echo "<tr>";
                                        echo "<td>$i</td>";
                                        echo "<td>".$_SESSION['nomes'][$i]."</td>";
                                        echo "<td>".$_SESSION['emails'][$i]."</td>";
                                        echo "<td>".$_SESSION['generos'][$i]."</td>";
                                        echo "<td><a href='editar.php?pos=$i' class='editar-btn' data-bs-toggle='modal' data-bs-target='#exampleModal' data-id='$i' data-nome='".$_SESSION['nomes'][$i]."' data-email='".$_SESSION['emails'][$i]."' data-genero='".$_SESSION['generos'][$i]."' data-senha='".$_SESSION['senhas'][$i]."'><svg xmlns='http://www.w3.org/2000/svg' width='22' height='22' fill='green' class='bi bi-pencil' viewBox='0 0 16 16'>
                                            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/>
                                            </svg></a> | <a href='excluir.php?pos=$i'><svg xmlns='http://www.w3.org/2000/svg' width='22' height='22' fill='red' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                            <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
                                            </svg></a></td>";
                                    echo "</tr>";
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
            <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>ATUALIZAR USUÁRIO</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>
                        <form action='editar.php' method='post'>
                            <label class='form-label'>NOME</label>
                            <input class='form-control' type='text' name='nome' id='edit-nome' required/>
                            <br/>
                            <label class='form-label'>E-MAIL</label>
                            <input class='form-control' type='email' name='email' id='edit-email' required/>
                            <br/>
                            <label class='form-label'>GENERO</label>
                            <select class='form-select' aria-label='Selecione um genero' name='genero' id='edit-genero' required>
                                <option selected>Selecione um genero</option>
                                <option value='Masculino'>Masculino</option>
                                <option value='Feminino'>Feminino</option>
                                <option value='Outro'>Outro</option>
                            </select>
                            <br/>
                            <label class='form-label'>SENHA</label>
                            <input class='form-control' type='password' id='edit-senha' name='senha'/>
                            <br/>
                            <input type='hidden' name='id' id='edit-id'/>
                            <input type='submit' class='btn btn-success' value='ATUALIZAR'/>
                        </form>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>FECHAR</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
            const botoesEditar = document.querySelectorAll('.editar-btn');
            botoesEditar.forEach(function(botao) {
            botao.addEventListener('click', function () {
                // Pega os valores do botão clicado
            const id = this.getAttribute('data-id');
            const nome = this.getAttribute('data-nome');
            const email = this.getAttribute('data-email');
            const genero = this.getAttribute('data-genero');
            const senha = this.getAttribute('data-senha');
                // Preenche os campos do modal
            document.getElementById('edit-id').value = id;
            document.getElementById('edit-nome').value = nome;
            document.getElementById('edit-email').value = email;
            document.getElementById('edit-genero').value = genero;
            document.getElementById('edit-senha').value = senha;
            });
            });
            });
        </script>
    </body>
</html>