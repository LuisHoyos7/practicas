<table  class="table table-hover" id="users-table">
    <thead>
        <tr>
            <th> C. Identificación      </th>
            <th> Nombres y Apellidos    </th>
            <th> Telefono               </th>
            <th> Direccion              </th>
            <th> Email o Usuario        </th>
            <th colspan="2"> Accion   </th>
        </tr>
    </thead>
    <tbody>
        @foreach( $users as $index=>$user)
            <tr>
                <td>{{ $user->identificacion }}</td>
                <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                <td>{{ $user->telefono }}</td>
                <td>{{ $user->direccion }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if ( auth()->user()->hasPermission('update_users') )
                        <a href="{{ route('users.edit', $user->id) }}" class="m-portlet__nav-link detalle_users btn btn-outline-brand btn-icon btn-sm" title="Editar Usuario">
                            <i class="la la-edit"></i>
                        </a>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- Paginacinon -->
{{ $users->appends(request()->query())->links() }}

