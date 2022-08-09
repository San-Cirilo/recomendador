<div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="card">
        <div class="col-md-12 text-center">
            <a class="logo-lanube" href="">
                <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShN0nuLT7HIpIANuDi6wbMKpeuCgZsl2PtAA&usqp=CAU" alt="User" style="height: 100px;">
            </a>
        </div>
        <p></p>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Usuarios
            </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <?= $this->Html->link('Crear Usuario',['controller' => 'Usuarios', 'action' => 'add']) ?>
                    </li>
                    <li class="list-group-item">
                        <?= $this->Html->link('Listar Usuarios',['controller' => 'Usuarios', 'action' => 'index']) ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Empresas
            </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <ul class="list-group list-group-flush">
                <li class="list-group-item">
                        <?= $this->Html->link('Crear Empresa',['controller' => 'Empresas', 'action' => 'add']) ?>
                    </li>
                    <li class="list-group-item">
                        <?= $this->Html->link('Listar Empresas',['controller' => 'Empresas', 'action' => 'index']) ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Paises
            </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <?= $this->Html->link('Crear Pais',['controller' => 'Paises', 'action' => 'add']) ?>
                    </li>
                    <li class="list-group-item">
                        <?= $this->Html->link('Listar Paises',['controller' => 'Paises', 'action' => 'index']) ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                Perfiles
            </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <?= $this->Html->link('Crear Perfil',['controller' => 'Perfiles', 'action' => 'add']) ?>
                    </li>
                    <li class="list-group-item">
                        <?= $this->Html->link('Listar Perfiles',['controller' => 'Perfiles', 'action' => 'index']) ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                Planes
            </button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <?= $this->Html->link('Crear Plane',['controller' => 'Planes', 'action' => 'add']) ?>
                    </li>
                    <li class="list-group-item">
                        <?= $this->Html->link('Listar Planes',['controller' => 'Planes', 'action' => 'index']) ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                Industrias
            </button>
        </h2>
        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <?= $this->Html->link('Crear Industria',['controller' => 'Industrias', 'action' => 'add']) ?>
                    </li>
                    <li class="list-group-item">
                        <?= $this->Html->link('Listar Industrias',['controller' => 'Industrias', 'action' => 'index']) ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingSeven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                Estados
            </button>
        </h2>
        <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <?= $this->Html->link('Crear Estado',['controller' => 'Estados', 'action' => 'add']) ?>
                    </li>
                    <li class="list-group-item">
                        <?= $this->Html->link('Listar Estados',['controller' => 'Estados', 'action' => 'index']) ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingEight">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                Productos
            </button>
        </h2>
        <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushEight">
            <div class="accordion-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <?= $this->Html->link('Crear Producto',['controller' => 'Productos', 'action' => 'add']) ?>
                    </li>
                    <li class="list-group-item">
                        <?= $this->Html->link('Listar Productos',['controller' => 'Productos', 'action' => 'index']) ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingNine">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                Prospectos
            </button>
        </h2>
        <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushNine">
            <div class="accordion-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <?= $this->Html->link('Crear Prospecto',['controller' => 'Prospectos', 'action' => 'add']) ?>
                    </li>
                    <li class="list-group-item">
                        <?= $this->Html->link('Listar Prospectos',['controller' => 'Prospectos', 'action' => 'index']) ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTeen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTeen" aria-expanded="false" aria-controls="flush-collapseTeen">
                Referencias
            </button>
        </h2>
        <div id="flush-collapseTeen" class="accordion-collapse collapse" aria-labelledby="flush-headingTeen" data-bs-parent="#accordionFlushTeen">
            <div class="accordion-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <?= $this->Html->link('Crear Referencia',['controller' => 'Referencias', 'action' => 'add']) ?>
                    </li>
                    <li class="list-group-item">
                        <?= $this->Html->link('Listar Referencias',['controller' => 'Referencias', 'action' => 'index']) ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingEleven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven" aria-expanded="false" aria-controls="flush-collapseEleven">
                Solicitudes
            </button>
        </h2>
        <div id="flush-collapseEleven" class="accordion-collapse collapse" aria-labelledby="flush-headingEleven" data-bs-parent="#accordionFlushEleven">
            <div class="accordion-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <?= $this->Html->link('Crear Solicitudes',['controller' => 'Solicitudes', 'action' => 'add']) ?>
                    </li>
                    <li class="list-group-item">
                        <?= $this->Html->link('Listar Solicitudes',['controller' => 'Solicitudes', 'action' => 'index']) ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwenty">
            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwenty" aria-expanded="false" aria-controls="flush-collapseTwenty">
                Tipo de Servicios
            </button>
        </h2>
        <div id="flush-collapseTwenty" class="accordion-collapse collapse " aria-labelledby="flush-headingTwenty" data-bs-parent="#accordionFlushTwenty">
            <div class="accordion-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <?= $this->Html->link('Crear Servicio',['controller' => 'Tiposervicios', 'action' => 'add']) ?>
                    </li>
                    <li class="list-group-item">
                        <?= $this->Html->link('Listar Servicios',['controller' => 'Tiposervicios', 'action' => 'index']) ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>