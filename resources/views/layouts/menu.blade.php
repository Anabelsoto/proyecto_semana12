<li class="nav-item">
    <a href="{{ route('citas.index') }}"
       class="nav-link {{ Request::is('citas*') ? 'active' : '' }}">
        <p>Citas</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('vuecita.index') }}"
       class="nav-link {{ Request::is('vuecita*') ? 'active' : '' }}">
        <p>Vue Cita</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('citaDetalles.index') }}"
       class="nav-link {{ Request::is('citaDetalles*') ? 'active' : '' }}">
        <p>Cita Detalles</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('vuecita_detalle.index') }}"
       class="nav-link {{ Request::is('vuecita_detalle*') ? 'active' : '' }}">
        <p>Vue Cita Detalle</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('doctors.index') }}"
       class="nav-link {{ Request::is('doctors*') ? 'active' : '' }}">
        <p>Doctors</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('vuedoctor.index') }}"
       class="nav-link {{ Request::is('vuedoctor*') ? 'active' : '' }}">
        <p>Vue Doctor</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('pacientes.index') }}"
       class="nav-link {{ Request::is('pacientes*') ? 'active' : '' }}">
        <p>Pacientes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('vuepaciente.index') }}"
       class="nav-link {{ Request::is('vuepaciente*') ? 'active' : '' }}">
        <p>Vue Paciente</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('usuarios.index') }}"
       class="nav-link {{ Request::is('usuarios*') ? 'active' : '' }}">
        <p>Usuarios</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('vueusuario.index') }}"
       class="nav-link {{ Request::is('vueusuario*') ? 'active' : '' }}">
        <p>Vue Usuario</p>
    </a>
</li>

