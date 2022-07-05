@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-white">Login API</h1>
            <div class="card p-4">
                <h2>Requeriments</h2>
                <div class="px-4">
                    <p>• Desarrollar un login en Laravel para poder hacer el CRUD del mismo.</p>
                    <p>• Mostrar Usuarios registrados en una vista aparte.</p>
                    <p>• El login puede tener el diseño que deseen.</p>
                    <p>• Para el registro de usuario solo se necesita campo de Nombre, Correo, Password,
                        Teléfono y Dirección.
                    </p>
                    <p>• Para que la prueba tenga mayor valides favor de subir el proyecto a un repositorio
                        GIT público y enviaron la liga de los 2 desarrollos.
                    </p>
                    <p>• Si no se puede realizar el punto anterior. Enviarnos el código mediante we
                        transfer.</p>
                    <p>• Las versiones deseables para el desarrollo en laravel utilizar 8^ en adelante.</p>
                    <p>• (Extra) En relacion al CRUD decidi hacerlo con un concepto diferente y con un poco mas de complejidad una relacion de uno a muchos a la vez aplicando el concepto anterior de los usuarios.</p>
                </div>
            </div>
            <div class="card p-4 my-4">
                <h2 class="text-center">Use cases</h2>
                <div class="row">

                    <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                        <h3 class="text-center">Supported use cases</h3>
                        <div class="px-4">
                            <p>
                                • As a user i’d like view my tasks
                            </p>
                            <p>
                                • As a user i’d like show the detail of any task
                            </p>
                            <p>
                                • As a user i’d like to add new tasks
                            </p>
                            <p>
                                • As a user i’d like to edit any task
                            </p>
                            <p>
                                • As a user i’d like to complete any task
                            </p>
                            <p>
                                • As an unregistered user i’d like to register
                            </p>
                            <p>
                                • As an unregistered user i’d like to log in
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                        <h3 class="text-center">Unsupported use cases</h3>
                        <div class="px-4">
                            <p>
                                • As an unregistered user i’d like to see the dashboard
                            </p>
                            <p>
                                • As an unregistered user i’d like to add a task
                            </p>
                            <p>
                                • As an unregistered user i’d like to interact with any task
                            </p>
                            <p>
                                • As an unregistered user I’d like to see other people's tasks
                            </p>
                            <p>
                                • As a user I’d like to see other people’s tasks
                            </p>
                            <p>
                                • As a user I’d like to interact with other people’s tasks
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
