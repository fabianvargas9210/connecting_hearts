@extends('layout')

@section('content')

<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1> Connecting Hearst Panel de contactos </h1>
            </div>
        </div>
    </div>
</div>


<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="page-portfolio-item.html"><img src="estilos/purpose/img/panel/ceacol-colegios.png" alt="Project Name"></a>
                    </div>
                    <div class="portfolio-info-fade">
                        <ul>
                            <li class="portfolio-project-name">Instituciones Educativas</li>
                            <li>Rectores</li>
                            <li>Docentes</li>
                            <li class="read-more"><a href="{{ route('tipo', ['colegio', '2']) }}" class="btn">Contacto</a></li>
                        </ul>
                    </div>
                     </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="page-portfolio-item.html"><img src="estilos/purpose/img/panel/ceacol-facilitadores.png" alt="Project Name"></a>
                    </div>
                    <div class="portfolio-info-fade">
                        <ul>
                            <li class="portfolio-project-name">Equipo CEA</li>
                            <li>Facilitadores - Misioneros</li>
                            <li>Colaboradores</li>
                            <li class="read-more"><a href="{{ route('tipo', ['equipo', '3']) }}" class="btn">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="page-portfolio-item.html"><img src="estilos/purpose/img/panel/ceacol-gobierno.png" alt="Project Name"></a>
                    </div>
                    <div class="portfolio-info-fade">
                        <ul>
                            <li class="portfolio-project-name">Gobierno</li>
                            <li>Empleados publicos</li>
                            <li>Organizaciones Gubernamentales</li>
                            <li class="read-more"><a href="{{ route('tipo', ['gobierno', '4']) }}" class="btn">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="page-portfolio-item.html"><img src="estilos/purpose/img/panel/ceacol-iglesias.png" alt="Project Name"></a>
                    </div>
                    <div class="portfolio-info-fade">
                        <ul>
                            <li class="portfolio-project-name">ministerios</li>
                            <li>Lideres / Pastores</li>
                            <li>Iglesias</li>
                            <li class="read-more"><a href="{{ route('tipo', ['iglesia', '5']) }}" class="btn">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="page-portfolio-item.html"><img src="estilos/purpose/img/panel/ceacol-empresas.png" alt="Project Name"></a>
                    </div>
                    <div class="portfolio-info-fade">
                        <ul>
                            <li class="portfolio-project-name">Empresas</li>
                            <li>Aliados</li>
                            <li>Proveedores</li>
                            <li class="read-more"><a href="{{ route('tipo', ['empresa', '6']) }}" class="btn">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="page-portfolio-item.html"><img src="../public/estilos/purpose/img/panel/ceacol-otros.png" alt="Project Name"></a>
                    </div>
                    <div class="portfolio-info-fade">
                        <ul>
                            <li class="portfolio-project-name">TODOS</li>
                            <li>Buscar en todos los cotnactos</li>
                            <li></li>
                            <li class="read-more"><a href="{{ route('tipo', ['general', '1']) }}" class="btn">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop