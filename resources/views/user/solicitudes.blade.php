@extends('layouts.front_end')
@section('section')
Solicitudes
@endsection

@section('css_before')
<!-- 
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/1.10.23/css/dataTables.semanticui.min.css') }}">
 -->
@endsection

@section('css_after')

@endsection

@section('content')

<div class="col-xl-12 col-md-6">
<div class="page-header-title">
    <h5 class="m-b-10">Solicitudes</h5>
</div>
<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
    <li class="breadcrumb-item"><a href="#!">Tables</a></li>
    <li class="breadcrumb-item"><a href="javascript:">Basic Tables</a></li>
</ul>
<!--[ Recent Users ] start-->

<div class="card Recent-Users">
    <div class="card-header">
        <h5>Recent Users</h5>
    </div>
        <div class="card-block px-0 py-3">
            <div class="table-responsive">
                <table class="table table-hover">
                    <tbody>
                        <tr class="unread">
                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td>
                            <td>
                                <h6 class="mb-1">Isabella Christensen</h6>
                                <p class="m-0">Lorem Ipsum is simply…</p>
                            </td>
                            <td>
                                <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i>11 MAY 12:56</h6>
                            </td>
                            <td><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                        </tr>
                        <tr class="unread">
                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-2.jpg" alt="activity-user"></td>
                            <td>
                                <h6 class="mb-1">Mathilde Andersen</h6>
                                <p class="m-0">Lorem Ipsum is simply text of…</p>
                            </td>
                            <td>
                                <h6 class="text-muted"><i class="fas fa-circle text-c-red f-10 m-r-15"></i>11 MAY 10:35</h6>
                            </td>
                            <td><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                        </tr>
                        <tr class="unread">
                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-3.jpg" alt="activity-user"></td>
                            <td>
                                <h6 class="mb-1">Karla Sorensen</h6>
                                <p class="m-0">Lorem Ipsum is simply…</p>
                            </td>
                            <td>
                                <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i>9 MAY 17:38</h6>
                            </td>
                            <td><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                        </tr>
                        <tr class="unread">
                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td>
                            <td>
                                <h6 class="mb-1">Ida Jorgensen</h6>
                                <p class="m-0">Lorem Ipsum is simply text of…</p>
                            </td>
                            <td>
                                <h6 class="text-muted f-w-300"><i class="fas fa-circle text-c-red f-10 m-r-15"></i>19 MAY 12:56</h6>
                            </td>
                            <td><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                        </tr>
                        <tr class="unread">
                            <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-2.jpg" alt="activity-user"></td>
                            <td>
                                <h6 class="mb-1">Albert Andersen</h6>
                                <p class="m-0">Lorem Ipsum is simply dummy…</p>
                            </td>
                            <td>
                                <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i>21 July 12:56</h6>
                            </td>
                            <td><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--[ Recent Users ] end-->


<div class="col-xl-12 col-md-6">
<!--[ Recent Users ] start-->
    <div class="card Recent-Users">
        <div class="card-header">
            <h5>Recent Users</h5>
            
        </div>
        
            <div class="card-block px-0 py-3">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Today</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active show" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">This Week</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">All</a>
                </li>
            </ul>
                <div class="table-responsive">
                <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Activity</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h6 class="m-0"><img class="rounded-circle m-r-10" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user">Ida Jorgensen</h6>
                        </td>
                        <td>
                            <h6 class="m-0">The quick brown fox</h6>
                        </td>
                        <td>
                            <h6 class="m-0">3:28 PM</h6>
                        </td>
                        <td>
                            <h6 class="m-0 text-c-green">Done</h6>
                        </td>
                        <td class="text-center"><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                    </tr>

                    <tr>
                        <td>
                            <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user">Ida Jorgensen</h6>
                        </td>
                        <td>
                            <h6 class="m-0">The quick brown fox</h6>
                        </td>
                        <td>
                            <h6 class="m-0">4:28 PM</h6>
                        </td>
                        <td>
                            <h6 class="m-0 text-c-green">Done</h6>
                        </td>
                        <td class="text-center"><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <table class="table table-hover">
            <thead>
                    <tr>
                        <th>User</th>
                        <th>Activity</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h6 class="m-0"><img class="rounded-circle m-r-10" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user">Ida Jorgensen</h6>
                        </td>
                        <td>
                            <h6 class="m-0">The quick brown fox</h6>
                        </td>
                        <td>
                            <h6 class="m-0">3:28 PM</h6>
                        </td>
                        <td>
                            <h6 class="m-0 text-c-green">Done</h6>
                        </td>
                        <td class="text-center"><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                    </tr>

                    <tr>
                        <td>
                            <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user">Ida Jorgensen</h6>
                        </td>
                        <td>
                            <h6 class="m-0">The quick brown fox</h6>
                        </td>
                        <td>
                            <h6 class="m-0">4:28 PM</h6>
                        </td>
                        <td>
                            <h6 class="m-0 text-c-green">Done</h6>
                        </td>
                        <td class="text-center"><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="assets/images/user/avatar-2.jpg" alt="activity-user">Albert Andersen</h6>
                        </td>
                        <td>
                            <h6 class="m-0">Jumps over the lazy</h6>
                        </td>
                        <td>
                            <h6 class="m-0">2:37 PM</h6>
                        </td>
                        <td>
                            <h6 class="m-0 text-c-red">Missed</h6>
                        </td>
                        <td class="text-center"><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="m-0"><img class="rounded-circle m-r-10" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user">Ida Jorgensen</h6>
                        </td>
                        <td>
                            <h6 class="m-0">The quick brown fox</h6>
                        </td>
                        <td>
                            <h6 class="m-0">3:28 PM</h6>
                        </td>
                        <td>
                            <h6 class="m-0 text-c-green">Done</h6>
                        </td>
                        <td class="text-center"><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user">Ida Jorgensen</h6>
                        </td>
                        <td>
                            <h6 class="m-0">The quick brown fox</h6>
                        </td>
                        <td>
                            <h6 class="m-0">4:28 PM</h6>
                        </td>
                        <td>
                            <h6 class="m-0 text-c-green">Done</h6>
                        </td>
                        <td class="text-center"><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="assets/images/user/avatar-3.jpg" alt="activity-user">Silje Larsen</h6>
                        </td>
                        <td>
                            <h6 class="m-0">Dog the quick brown</h6>
                        </td>
                        <td>
                            <h6 class="m-0">10:23 AM</h6>
                        </td>
                        <td>
                            <h6 class="m-0 text-c-purple">Delayed</h6>
                        </td>
                        <td class="text-center"><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <table class="table table-hover">
            <thead>
                    <tr>
                        <th>User</th>
                        <th>Activity</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h6 class="m-0"><img class="rounded-circle m-r-10" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user">Ida Jorgensen</h6>
                        </td>
                        <td>
                            <h6 class="m-0">The quick brown fox</h6>
                        </td>
                        <td>
                            <h6 class="m-0">3:28 PM</h6>
                        </td>
                        <td>
                            <h6 class="m-0 text-c-green">Done</h6>
                        </td>
                        <td class="text-center"><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                    </tr>

                    <tr>
                        <td>
                            <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user">Ida Jorgensen</h6>
                        </td>
                        <td>
                            <h6 class="m-0">The quick brown fox</h6>
                        </td>
                        <td>
                            <h6 class="m-0">4:28 PM</h6>
                        </td>
                        <td>
                            <h6 class="m-0 text-c-green">Done</h6>
                        </td>
                        <td class="text-center"><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
                    
                </div>
            </div>
    </div>
</div>
<!--[ Recent Users ] end-->

@endsection

@section('js_after')
<script src="{{ asset('assets/js/table.js') }}"></script>
<!-- 
    <script src="{{ asset('https://code.jquery.com/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('https://cdn.datatables.net/1.10.23/js/dataTables.semanticui.min.js') }}"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js') }}"></script>
 -->
@endsection