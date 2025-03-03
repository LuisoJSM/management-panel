@extends('welcome')

@section('contenido')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Inicio</h1>
        </section>


        <section class="content">
            <div class="box">

                <div class="box-header with-border">

                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarSucursal">Agregar Sucursal</button>

                </div>


                <div class="box-body">

                </div>
            </div>
        </section>


    </div>


    <div class="modal fade" id="modalAgregarSucursal">


        <div class="modal-dialog">

            <div class="modal-content">
                <form action="" method="post">
                    <div class="modal-header" style="background: #3cb8dc; color:white">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Agregar sucursal</h4>
                    </div>


                    <div class="modal-body">
                        <div class="box-body">
                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                    <input type="text" class="form-control input-lg" name="nombre" placeholder="Ingresar sucursal" required>

                                </div>

                               
                            </div>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button class="btn btn-danger pull-left" type="button" data-dismiss="modal">Salir</button>
                    </div>

                    
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Agregar Sucursal</button>
                    </div>



                </form>
            </div>

        </div>


    </div>







@endsection
