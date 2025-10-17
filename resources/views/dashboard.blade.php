@include('header')
@include('sidebar')

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <div class="bg-dark text-white rounded-3 p-4 mb-4">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-hard-hat me-3 text-warning" style="font-size: 2rem;"></i>
                                <div>
                                    <h2 class="h4 mb-1">Welcome to Group LBC Construction Portal</h2>
                                    <p class="mb-0 text-white-50">Track projects, manage teams, plan schedules, and monitor progress at a glance.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 mb-4">
                            <div class="col-6 col-md-3 col-xl-2">
                                <a href="{{ route('projects.index') }}" class="text-decoration-none">
                                    <div class="card h-100 quick-action">
                                        <div class="card-body d-flex align-items-center">
                                            <i class="fas fa-folder-open text-warning me-2"></i>
                                            <span class="fw-semibold">Projects</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2">
                                <a href="{{ route('workers.index') }}" class="text-decoration-none">
                                    <div class="card h-100 quick-action">
                                        <div class="card-body d-flex align-items-center">
                                            <i class="fas fa-users text-warning me-2"></i>
                                            <span class="fw-semibold">Workers</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2">
                                <a href="{{ route('assignments.index') }}" class="text-decoration-none">
                                    <div class="card h-100 quick-action">
                                        <div class="card-body d-flex align-items-center">
                                            <i class="fas fa-tasks text-warning me-2"></i>
                                            <span class="fw-semibold">Assignments</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2">
                                <a href="{{ route('timelines.index') }}" class="text-decoration-none">
                                    <div class="card h-100 quick-action">
                                        <div class="card-body d-flex align-items-center">
                                            <i class="fas fa-calendar-alt text-warning me-2"></i>
                                            <span class="fw-semibold">Schedules</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2">
                                <a href="{{ route('reports.index') }}" class="text-decoration-none">
                                    <div class="card h-100 quick-action">
                                        <div class="card-body d-flex align-items-center">
                                            <i class="fas fa-chart-line text-warning me-2"></i>
                                            <span class="fw-semibold">Reports</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Active Projects: 7</div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Workers On Site: 42</div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Tasks Due This Week: 18</div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Incidents: 1</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Overall Progress
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Weekly Workload
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-clipboard-list me-1"></i>
                                Recent Activity
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover align-middle mb-0">
                                        <thead>
                                            <tr>
                                                <th>When</th>
                                                <th>Event</th>
                                                <th>Project</th>
                                                <th>By</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Today 09:15</td>
                                                <td>Material delivery checked in</td>
                                                <td>New Office Build</td>
                                                <td>Alex Johnson</td>
                                            </tr>
                                            <tr>
                                                <td>Yesterday 16:20</td>
                                                <td>Assigned task "Install conduit"</td>
                                                <td>Warehouse Renovation</td>
                                                <td>Maria Gomez</td>
                                            </tr>
                                            <tr>
                                                <td>Yesterday 10:05</td>
                                                <td>Safety briefing completed</td>
                                                <td>New Office Build</td>
                                                <td>Jane Doe</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
@include('footer')
