@include('header')
@include('sidebar')

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Timelines / Schedules</h1>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-calendar-alt me-1"></i>
                                        Upcoming Milestones
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Foundation Complete
                                                <span class="badge bg-primary rounded-pill">Oct 30</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Electrical Rough-In
                                                <span class="badge bg-primary rounded-pill">Nov 12</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Drywall Start
                                                <span class="badge bg-primary rounded-pill">Dec 03</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-clock me-1"></i>
                                        Schedule Overview
                                    </div>
                                    <div class="card-body">
                                        <p class="text-muted mb-2">Overall progress</p>
                                        <div class="progress" style="height: 10px;">
                                            <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
@include('footer')

