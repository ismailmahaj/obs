<div class="sidebar" data-color="blue" >
	<div class="sidebar-wrapper">
        <div class="logo">
            <a href="/admin" class="simple-text">
                Destiny Trophy
            </a>
        </div>
        <ul class="nav">
            <li @if((isset($current)) && ($current == 'dashboard')) class="active" @endif >
                <a href="/admin">
                    <i class="pe-7s-graph"></i>
                    <p>Tableau de bord</p>
                </a>
            </li>
            <li @if((isset($current)) && ($current == 'dashboard')) class="active" @endif >
                <a href="/admin/membres">
                    <i class="pe-7s-id"></i>
                    <p>Binômes</p>
                </a>
            </li>
        </ul>
	</div>
</div>
