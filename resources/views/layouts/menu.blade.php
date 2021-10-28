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

