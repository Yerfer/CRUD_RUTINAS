<div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre', null, [ 'class' => 'form-control', 'placeholder' => 'Introduzca el Nombre de la Nueva Rutina.']) !!}
</div>
<div class="form-group">
    {!! Form::label('descripcion', 'Descripción') !!}
    {!! Form::text('descripcion', null, [ 'class' => 'form-control', 'placeholder' => 'Introduzca una descripción que explique la nueva rutina.']) !!}
</div>
<p>Ejercicios para la semana.</p>
<div class="form-group">
    <table class="table table-bordered">
        <tr>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
        </tr>
        <tr>
            @for($i=1;$i<=5;$i++)
                <td>
                    <select class="form-control" name="{{"Dia_".$i}}">
                        <option value="">Seleccione</option>
                        @foreach($ejercicios as $ejercicio)
                            <option value="{{$ejercicio->id}}">{{$ejercicio->nombre}}</option>
                        @endforeach
                    </select>
                </td>
            @endfor
        </tr>

    </table>
</div>