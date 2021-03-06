@php
  use App\Http\Controllers\ControleController;
@endphp
<!-- Sidebar Menu -->
<nav class="mt-2 mb-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Usuários -->
        @if(ControleController::mostra('UserController', 'index'))
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-users"></i>
                <p>Usuários<i class="right fa fa-angle-left"></i></p>
            </a>
        @endif
        <ul class="nav nav-treeview">
            @if(ControleController::mostra('UserController', 'index'))
            <li class="nav-item">
                <a href="/admin/usuarios" class="nav-link">
                    <i class="nav-icon fa fa-angle-right"></i>
                    <p>Todos os usuários</p>
                </a>
            </li>
            @endif
            @if(ControleController::mostraStatic(['1']))
            <li class="nav-item">
                <a href="/admin/usuarios/criar" class="nav-link">
                    <i class="nav-icon fa fa-angle-right"></i>
                    <p>Novo usuário</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/admin/usuarios/perfis" class="nav-link">
                    <i class="nav-icon fa fa-angle-right"></i>
                    <p>Perfis</p>
                </a>
            </li>
            @endif
        </ul>
        </li>
        @if(ControleController::mostraStatic(['1']))
        <li class="nav-item">
            <a href="/admin/chamados" class="nav-link">
                <i class="nav-icon fas fa-ticket-alt"></i>
                <p>Chamados</p>
            </a>
        </li>
        @endif
        <li class="nav-item">
            <a href="/admin/regionais" class="nav-link">
                <i class="nav-icon fas fa-globe-americas"></i>
                <p>Regionais</p>
            </a>
        </li>
        <!-- Conteúdo -->
        @if(ControleController::mostra('PaginaController', 'index') ||
            ControleController::mostra('NoticiaController', 'index') ||
            ControleController::mostra('CursoController', 'index') ||
            ControleController::mostra('BdoEmpresaController', 'index') ||
            ControleController::mostra('BdoOportunidadeController', 'index'))
        <li class="nav-header">CONTEÚDO</li>
        @endif
        @if(ControleController::mostra('PaginaController', 'index'))
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>Páginas<i class="right fa fa-angle-left"></i></p>
            </a>
        @endif
            <ul class="nav nav-treeview">
                @if(ControleController::mostra('PaginaController', 'index'))
                <li class="nav-item">
                    <a href="/admin/paginas" class="nav-link">
                        <i class="nav-icon fa fa-angle-right"></i>
                        <p>Todas as páginas</p>
                    </a>
                </li>
                @endif
                @if(ControleController::mostra('PaginaController', 'create'))
                <li class="nav-item">
                    <a href="/admin/paginas/criar" class="nav-link">
                        <i class="nav-icon fa fa-angle-right"></i>
                        <p>Criar nova página</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/paginas/categorias" class="nav-link">
                        <i class="nav-icon fa fa-angle-right"></i>
                        <p>Categorias</p>
                    </a>
                </li>
                @endif
            </ul>
        </li>
        @if(ControleController::mostra('NoticiaController', 'index'))
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-newspaper"></i>
                <p>Notícias<i class="right fa fa-angle-left"></i></p>
            </a>
        @endif
            <ul class="nav nav-treeview">
                @if(ControleController::mostra('NoticiaController', 'index'))
                <li class="nav-item">
                    <a href="/admin/noticias" class="nav-link">
                        <i class="nav-icon fa fa-angle-right"></i>
                        <p>Todas as notícias</p>
                    </a>
                </li>
                @endif
                @if(ControleController::mostra('NoticiaController', 'create'))
                <li class="nav-item">
                    <a href="/admin/noticias/criar" class="nav-link">
                        <i class="nav-icon fa fa-angle-right"></i>
                        <p>Criar nova notícia</p>
                    </a>
                </li>
                @endif
            </ul>
        </li>
        @if(ControleController::mostra('CursoController', 'index'))
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-graduation-cap"></i>
                <p>Cursos<i class="right fa fa-angle-left"></i></p>
            </a>
        @endif
            <ul class="nav nav-treeview">
                @if(ControleController::mostra('CursoController', 'index'))
                <li class="nav-item">
                    <a href="/admin/cursos" class="nav-link">
                        <i class="nav-icon fa fa-angle-right"></i>
                        <p>Todos os cursos</p>
                    </a>
                </li>
                @endif
                @if(ControleController::mostra('CursoController', 'create'))
                <li class="nav-item">
                    <a href="/admin/cursos/criar" class="nav-link">
                        <i class="nav-icon fa fa-angle-right"></i>
                        <p>Criar novo curso</p>
                    </a>
                </li>
                @endif
            </ul>
        </li>
        @if(ControleController::mostra('BdoEmpresaController', 'index') ||
            ControleController::mostra('BdoOportunidadeController', 'index'))
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-briefcase"></i>
                <p>B. de Oportunidades<i class="right fa fa-angle-left"></i></p>
            </a>
        @endif
            <ul class="nav nav-treeview">
                @if(ControleController::mostra('BdoEmpresaController', 'index'))
                <li class="nav-item">
                    <a href="/admin/bdo/empresas" class="nav-link">
                        <i class="nav-icon fa fa-angle-right"></i>
                        <p>Empresas</p>
                    </a>
                </li>
                @endif
                @if(ControleController::mostra('BdoOportunidadeController', 'index'))
                <li class="nav-item">
                    <a href="/admin/bdo" class="nav-link">
                        <i class="nav-icon fa fa-angle-right"></i>
                        <p>Oportunidades</p>
                    </a>
                </li>
                @endif
            </ul>
        </li>
        <!-- Atendimento -->
        @if(ControleController::mostra('AgendamentoController', 'index') ||
            ControleController::mostra('AgendamentoBloqueioController', 'index'))
        <li class="nav-header">ATENDIMENTO</li>
        @endif
        @if(ControleController::mostra('AgendamentoController', 'index'))
        <li class="nav-item">
            <a href="/admin/agendamentos" class="nav-link">
                <i class="nav-icon far fa-clock"></i>
                <p>Agendamentos</p>
            </a>
        </li>
        @endif
        @if(ControleController::mostra('AgendamentoBloqueioController', 'index'))
        <li class="nav-item">
            <a href="/admin/agendamentos/bloqueios" class="nav-link">
                <i class="nav-icon fas fa-ban"></i>
                <p>Bloqueios</p>
            </a>
        </li>
        @endif
        <!-- Jurídico -->
        @if(ControleController::mostra('LicitacaoController', 'index') ||
            ControleController::mostra('ConcursoController', 'index'))
        <li class="nav-header">JURÍDICO</li>
        @endif
        @if(ControleController::mostra('LicitacaoController', 'index'))
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-file-alt"></i>
                <p>Licitações<i class="right fa fa-angle-left"></i></p>
            </a>
        @endif
            <ul class="nav nav-treeview">
                @if(ControleController::mostra('LicitacaoController', 'index'))
                <li class="nav-item">
                    <a href="/admin/licitacoes" class="nav-link">
                        <i class="nav-icon fa fa-angle-right"></i>
                        <p>Todas as licitações</p>
                    </a>
                </li>
                @endif
                @if(ControleController::mostra('LicitacaoController', 'create'))
                <li class="nav-item">
                    <a href="/admin/licitacoes/criar" class="nav-link">
                        <i class="nav-icon fa fa-angle-right"></i>
                        <p>Criar nova licitação</p>
                    </a>
                </li>
                @endif
            </ul>
        </li>
        @if(ControleController::mostra('ConcursoController', 'index'))
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-edit"></i>
                <p>Concursos<i class="right fa fa-angle-left"></i></p>
            </a>
        @endif
            <ul class="nav nav-treeview">
                @if(ControleController::mostra('ConcursoController', 'index'))
                <li class="nav-item">
                    <a href="/admin/concursos" class="nav-link">
                        <i class="nav-icon fa fa-angle-right"></i>
                        <p>Todos os concursos</p>
                    </a>
                </li>
                @endif
                @if(ControleController::mostra('ConcursoController', 'create'))
                <li class="nav-item">
                    <a href="/admin/concursos/criar" class="nav-link">
                        <i class="nav-icon fa fa-angle-right"></i>
                        <p>Criar novo concurso</p>
                    </a>
                </li>
                @endif
            </ul>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->