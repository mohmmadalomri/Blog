@extends('dashboard.layout.layout')
@section('body')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Users Tables</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Users Tables
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="app-todo.html">
                                    <i class="me-1" data-feather="check-square">
                                    </i><span class="align-middle">Todo</span>
                                </a><a class="dropdown-item" href="app-chat.html">
                                    <i class="me-1" data-feather="message-square">
                                    </i><span class="align-middle">Chat</span></a>
                                <a class="dropdown-item" href="app-email.html">
                                    <i class="me-1" data-feather="mail">
                                    </i><span class="align-middle">Email</span>
                                </a><a class="dropdown-item" href="app-calendar.html">
                                    <i class="me-1" data-feather="calendar">
                                    </i><span class="align-middle">Calendar</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Button trigger modal -->
            <!-- Modal to add new record -->

            <div class="modal modal-slide-in fade" id="modals-slide-in">
                <div class="modal-dialog sidebar-sm">
                    <form class="add-new-record modal-content pt-0" action="{{ route('dashboard.user.store') }}"
                        method="POST">
                        @csrf
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                        <div class="modal-header mb-1">
                            <h5 class="modal-title" id="exampleModalLabel">New Record</h5>
                        </div>
                        <div class="modal-body flex-grow-1">
                            <div class="mb-1">
                                <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                <input type="text" class="form-control dt-full-name" id="name" name="name"
                                    placeholder="John Doe" aria-label="John Doe" />
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="basic-icon-default-post">Email</label>
                                <input type="email" id="email" name="email" class="form-control dt-post"
                                    placeholder="Email" aria-label="Web Developer" />
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="basic-icon-default-post">Password</label>
                                {{-- <input type="Password" id="Password" name="Password" class="form-control dt-post"
                                    placeholder="Password" aria-label="" /> --}}
                                <div class="input-group input-group-merge form-password-toggle">
                                    <input class="form-control form-control-merge" id="password" type="password"
                                        name="password" placeholder=" " aria-describedby="login-password"
                                        tabindex="2" /><span class="input-group-text cursor-pointer"><i
                                            data-feather="eye"></i></span>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="basic-icon-default-salary">Status</label>
                                <select class="form-label" name="status" id="status">
                                    <option value="admin">admin</option>
                                    <option value="writer">writer</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary data-submit me-1">Submit</button>
                            <button type="reset" class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Table Basic</h4>

                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modals-slide-in">Add new</button>


                            </div>


                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Users</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>
                                                    <span class="fw-bold">{{ $user->name }}</span>
                                                </td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    {{ $user->id }}
                                                </td>
                                                @if ($user->status == 'admin')
                                                    <td><span
                                                            class="badge rounded-pill badge-light-primary me-1">{{ $user->status }}</span>
                                                    </td>
                                                @else
                                                    <td><span
                                                            class="badge rounded-pill badge-light-success me-1">{{ $user->status }}</span>
                                                    </td>
                                                @endif
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button"
                                                            class="btn btn-sm dropdown-toggle hide-arrow py-0"
                                                            data-bs-toggle="dropdown">
                                                            <i data-feather="more-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item"
                                                                href="/dashboard/user/{{ $user->id }}/edit'">
                                                                <i data-feather="edit-2" class="me-50"></i>
                                                                <span>Edit</span>
                                                            </a>
                                                            <form action="/dashboard/user/{{ $user->id }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                <button class="dropdown-item">
                                                                    <i data-feather="trash" class="me-50"></i>
                                                                    <span>Delete</span>
                                                                </button>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach




                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
