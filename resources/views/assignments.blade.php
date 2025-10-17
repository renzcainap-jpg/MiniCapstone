@include('header')
@include('sidebar')

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Assignments</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-tasks me-1"></i>
                                Current Assignments
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover align-middle mb-0">
                                        <thead>
                                            <tr>
                                                <th>Task</th>
                                                <th>Assignee</th>
                                                <th>Project</th>
                                                <th>Due</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Site Survey</td>
                                                <td>Alex Johnson</td>
                                                <td>New Office Build</td>
                                                <td>2025-10-28</td>
                                                <td><span class="badge bg-success">On Track</span></td>
                                            </tr>
                                            <tr>
                                                <td>Material Procurement</td>
                                                <td>Maria Gomez</td>
                                                <td>Warehouse Renovation</td>
                                                <td>2025-11-05</td>
                                                <td><span class="badge bg-warning text-dark">At Risk</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
@include('footer')

