<div class="table-responsive">
    <table class="table" id="citas-table">
        <thead>
            <tr>
                <th>Id Paciente</th>
        <th>Fecha Cita</th>
        <th>Id Doctor</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($citas as $cita)
            <tr>
                <td>{{ $cita->id_paciente }}</td>
            <td>{{ $cita->fecha_cita }}</td>
            <td>{{ $cita->id_doctor }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['citas.destroy', $cita->idcita], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('citas.show', [$cita->idcita]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('citas.edit', [$cita->idcita]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
