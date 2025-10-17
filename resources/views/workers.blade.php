@include('header')
@include('sidebar')

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Workers</h1>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <p class="mb-0 text-muted">Directory of workers and their roles.</p>
                            <a href="#" class="btn btn-primary btn-sm">Add Worker</a>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-users me-1"></i>
                                Worker List
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover align-middle mb-0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Role</th>
                                                <th>Project</th>
                                                <th>Status</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Alex Johnson</td>
                                                <td>Site Engineer</td>
                                                <td>New Office Build</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td class="text-end"><a href="#" class="btn btn-sm btn-outline-secondary">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>Maria Gomez</td>
                                                <td>Electrician</td>
                                                <td>Warehouse Renovation</td>
                                                <td><span class="badge bg-secondary">Inactive</span></td>
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

