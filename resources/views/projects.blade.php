@include('header')
@include('sidebar')

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Projects</h1>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <p class="mb-0 text-muted">Manage your active and archived projects.</p>
                            <a href="#" class="btn btn-primary btn-sm">Create Project</a>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-folder-open me-1"></i>
                                Project List
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover align-middle mb-0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Owner</th>
                                                <th>Status</th>
                                                <th>Start</th>
                                                <th>Due</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>New Office Build</td>
                                                <td>Jane Doe</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td>2025-09-01</td>
                                                <td>2026-02-15</td>
                                                <td class="text-end"><a href="#" class="btn btn-sm btn-outline-secondary">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>Warehouse Renovation</td>
                                                <td>John Smith</td>
                                                <td><span class="badge bg-warning text-dark">On Hold</span></td>
                                                <td>2025-06-10</td>
                                                <td>2025-12-20</td>
                                                <td class="text-end"><a href="#" class="btn btn-sm btn-outline-secondary">View</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
@include('footer')

