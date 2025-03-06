@extends('welcome')

@section('contenido')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Gestor de su perfil</h1>
        </section>


        <section class="content">
            <div class="box">




                <div class="box-body">

                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                                <input type="text" name="name" class="form-control input-lg" required value="{{ auth()->user()->name }}">

                            </div>
                        </div>


                        <div class="form-group">
                            <div class="input-group">

                                <span class="input-group-addon">@</span>

                                <input type="email" name="email" class="form-control input-lg" required value="{{ auth()->user()->email }}">

                            </div>
                        </div>



                        <div class="form-group">
                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                                <input type="password" name="pasword" class="form-control input-lg" required>

                            </div>
                        </div>

                            <div class="form-group">
                                <input type="file" name="fotoPerfil">
                                <br>

                                @if(auth()->user()->foto != '')

                                <img src="{{ url('storage/' . auth()->user()->foto) }}" width="150px" height="150px">


                                @else

                                <img src="{{ url('storage/users/anonymous.png') }}" width="150px" height="150px">


                                @endif



                            </div>


                            <div class="box-footer">

                                <button class="btn btn-success pull-right" type="submit">Guardar</button>

                            </div>



                    </form>

                </div>
            </div>
        </section>


    </div>









@endsection
