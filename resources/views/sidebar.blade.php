            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="{{ route('dashboard.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading text-warning">Management</div>
                            <a class="nav-link" href="{{ route('projects.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-folder-open"></i></div>
                                Projects
                            </a>
                            <a class="nav-link" href="{{ route('workers.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Workers
                            </a>
                            <a class="nav-link" href="{{ route('assignments.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tasks"></i></div>
                                Assignments
                            </a>

                            <div class="sb-sidenav-menu-heading text-warning">Planning</div>
                            <a class="nav-link" href="{{ route('timelines.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar-alt"></i></div>
                                Timelines / Schedules
                            </a>

                            <div class="sb-sidenav-menu-heading text-warning">Analytics</div>
                            <a class="nav-link" href="{{ route('reports.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-line"></i></div>
                                Reports / Progress tracking
                            </a>
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">

