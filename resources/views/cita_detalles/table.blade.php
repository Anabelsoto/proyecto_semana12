<div class="table-responsive">
    <table class="table" id="citaDetalles-table">
        <thead>
            <tr>
                <th>Idcita</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($citaDetalles as $citaDetalle)
            <tr>
                <td>{{ $citaDetalle->idcita }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['citaDetalles.destroy', $citaDetalle->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('citaDetalles.show', [$citaDetalle->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('citaDetalles.edit', [$citaDetalle->id]) }}" class='btn btn-default btn-xs'>
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
