@extends('admin.master')
@section('admin-content')
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Number of Admins</h4>
                                <div class="text-end">
                                    <h2 class="font-light mb-0"><i class="ti-arrow-up text-success"></i> {{(int)count($admins)}}</h2>
                                    <span class="text-muted">max 50 admins</span>
                                </div>
                                <span class="text-{{((count($admins)*2)<90? 'info' : 'danger' )}}">{{(int)((count($admins)*2)."%  " )}}used</span>
                                <div class="progress">
                                    <div class="progress-bar bg-{{((count($admins)*2)<90 ? 'info' : 'danger' )}}" role="progressbar"
                                        style="width:{{(count($admins)*2)}}% ; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100">{{(int)((count($admins)*2)."%  " )}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Number of Users</h4>
                                <div class="text-end">
                                    <h2 class="font-light mb-0"><i class="ti-arrow-up text-info"></i> {{(int)count($users)}}</h2>
                                    <span class="text-muted"> Our Target Users Number is 10,000</span>
                                </div>
                                <span class="text-{{((count($users)/100)<90? 'info' : 'danger' )}}">{{(int)((count($users)/100)."%  " )}}of target</span>
                                <div class="progress">
                                    <div class="progress-bar bg-{{((count($users)/100)<90 ? 'info' : 'danger' )}}" role="progressbar"
                                        style="width: {{(count($users)/100)}}%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100">{{(int)((count($users)/100)."%  " )}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- calculate the number of females and the number of males -->
                @php
                    $female = 0;
                    $male = 0;
                @endphp
                @foreach($users as $user)
                    @if($user->user_gender==='female')
                        @php
                            /** @var TYPE_NAME $female */
                           $female++;
                        @endphp
                    @else
                        @php
                            /** @var TYPE_NAME $male */
                           $male++;
                        @endphp
                    @endif
                    @endforeach
                <div class="row">
                    <!-- Column -->
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Number of females</h4>
                                <div class="text-end">
                                    <h2 class="font-light mb-0"><i class="ti-arrow-up text-success"></i> {{$female}}</h2>
                                    <span class="text-muted">Here you can show the percentage of females in our site</span>
                                </div>
                                <span class="text-{{(($female/count($users)*100)<($male/count($users)*100) ? 'danger' : 'info' )}}">{{(int)($female/count($users)*100)." %"}} is females</span>
                                <div class="progress">
                                    <div class="progress-bar bg-{{(($female/count($users)*100)<($male/count($users)*100) ? 'danger' : 'info' )}}" role="progressbar"
                                        style="width:{{($female/count($users)*100)}}% ; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100">{{(int)(($female/count($users)*100)."%  " )}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Number of males</h4>
                                <div class="text-end">
                                    <h2 class="font-light mb-0"><i class="ti-arrow-up text-success"></i> {{(int)$male}}</h2>
                                    <span class="text-muted">Here you can show the percentage of males in our site</span>
                                </div>
                                <span class="text-{{(($male/count($users)*100)<($female/count($users)*100)? 'danger' : 'info' )}}">{{(int)($male/count($users)*100)." %"}} is males</span>
                                <div class="progress">
                                    <div class="progress-bar bg-{{(($male/count($users)*100)<($female/count($users)*100) ? 'danger' : 'info' )}}" role="progressbar"
                                         style="width:{{($male/count($users)*100)}}% ; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                         aria-valuemax="100">{{(int)(($male/count($users)*100)."%  " )}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body" style="background-color: rgb(0 175 217 / 42%);">
                                <h4 class="card-title">Users Interactivity</h4>
                                <div class="flot-chart">
                                    <div class="flot-chart-content " id="flot-line-chart"
                                        style="padding: 15px; position: relative;">
                                        <div class="row">
                                            <!-- Column -->
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title"> Number of Posts </h4>
                                                        <div class="text-end">
                                                            <h2 class="font-light mb-0"><i class="ti-arrow-up text-success"></i> {{(int)count($posts)}}</h2>
                                                            <span class="text-muted">Target Number of Posts is 1M</span>
                                                        </div>
                                                        <span class="text-{{((count($posts)/10000)<90? 'danger' : 'info' )}}">{{(int)((count($posts)/1000000)."%   " )}}achieved</span>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-{{((count($posts)/10000)<90 ? 'danger' : 'info' )}}" role="progressbar"
                                                                 style="width:{{(count($posts)/10000)}}% ; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                                                 aria-valuemax="100">{{(int)((count($posts)/10000)."%  " )}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Column -->
                                            <!-- Column -->
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Number of follow actions</h4>
                                                        <div class="text-end">
                                                            <h2 class="font-light mb-0"><i class="ti-arrow-up text-info"></i> {{(int)count($follows)}}</h2>
                                                            <span class="text-muted"> Our Target follows Number is 50,000</span>
                                                        </div>
                                                        <span class="text-{{((count($follows)/500)<90? 'info' : 'danger' )}}">{{(int)((count($follows)/500)."%  " )}}of target</span>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-{{((count($follows)/500)<90 ? 'info' : 'danger' )}}" role="progressbar"
                                                                 style="width: {{(count($follows)/500)}}%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                                                 aria-valuemax="100">{{(int)((count($follows)/500)."%  " )}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Column -->
                                        </div>
                                        <div class="row">
                                            <!-- Column -->
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title"> Number of Comments</h4>
                                                        <div class="text-end">
                                                            <h2 class="font-light mb-0"><i class="ti-arrow-up text-success"></i> {{(int)count($comments)}}</h2>
                                                            <span class="text-muted">Target Number of Comments is 5M</span>
                                                        </div>
                                                        <span class="text-{{((count($comments)/50000)<90? 'danger' : 'info' )}}">{{(int)((count($comments)/5000000)."%   " )}}' achieved'</span>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-{{((count($comments)/50000)<90 ? 'danger' : 'info' )}}" role="progressbar"
                                                                 style="width:{{(count($comments)/50000)}}% ; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                                                 aria-valuemax="100">{{(int)((count($comments)/50000)."%  " )}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Column -->
                                            <!-- Column -->
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Number of Likes actions</h4>
                                                        <div class="text-end">
                                                            <h2 class="font-light mb-0"><i class="ti-arrow-up text-info"></i> {{(int)count($follows)}}</h2>
                                                            <span class="text-muted"> Our Target follows Number is 50,000</span>
                                                        </div>
                                                        <span class="text-{{((count($follows)/500)<90? 'info' : 'danger' )}}">{{(int)((count($follows)/500)."%  " )}}of target</span>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-{{((count($follows)/500)<90 ? 'info' : 'danger' )}}" role="progressbar"
                                                                 style="width: {{(count($follows)/500)}}%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                                                 aria-valuemax="100">{{(int)((count($follows)/500)."%  " )}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Column -->
                                        </div>
                                        <canvas class="flot-base w-100" height="400"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex">
                                    <h4 class="card-title col-md-10 mb-md-0 mb-3 align-self-center">Recently Joined Users</h4>
                                </div>
                                <div class="table-responsive mt-5">
                                    <table class="table stylish-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0" colspan="2">User</th>
                                                <th class="border-top-0">email</th>
                                                <th class="border-top-0">phone</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users->slice((count($users)-10),(count($users))) as $user)
                                            <tr>
                                                <td style="width:50px;"><span class="round">{{substr($user->name, 0, 1)}}</span></td>
                                                <td class="align-middle">
                                                    <h6>{{$user->name}}</h6><small class="text-muted">created at {{" ".$user->created_at}}</small>
                                                </td>
                                                <td class="align-middle">{{$user->email}}</td>
                                                <td class="align-middle">{{$user->phone}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent blogss -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Recent blogss -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
@endsection
