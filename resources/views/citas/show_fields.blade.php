<!-- Id Paciente Field -->
<div class="col-sm-12">
    {!! Form::label('id_paciente', 'Id Paciente:') !!}
    <p>{{ $cita->id_paciente }}</p>
</div>

<!-- Fecha Cita Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_cita', 'Fecha Cita:') !!}
    <p>{{ $cita->fecha_cita }}</p>
</div>

<!-- Id Doctor Field -->
<div class="col-sm-12">
    {!! Form::label('id_doctor', 'Id Doctor:') !!}
    <p>{{ $cita->id_doctor }}</p>
</div>

