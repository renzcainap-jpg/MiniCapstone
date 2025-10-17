@include('header')
@include('sidebar')

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Reports / Progress tracking</h1>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Active Projects: 7</div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">On Track: 5</div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">At Risk: 2</div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Delayed: 1</div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-line me-1"></i>
                                Progress Overview
                            </div>
                            <div class="card-body">
                                <canvas id="reportsProgressChart" height="80"></canvas>
                            </div>
                        </div>
                    </div>
                </main>
@include('footer')

