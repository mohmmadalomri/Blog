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
                            <h2 class="content-header-title float-start mb-0">Category Tables</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Category Tables
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

            {{-- <div class="modal modal-slide-in fade" id="modals-slide-in">
                <div class="modal-dialog sidebar-sm">
                    <form class="add-new-record modal-content pt-0" action="{{ route('dashboard.category.store') }}"
                        method="POST">
                        @csrf
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                        <div class="modal-header mb-1">
                            <h5 class="modal-title" id="exampleModalLabel">New category</h5>
                        </div>
                        <div class="modal-body flex-grow-1">
                            <div class="mb-1">
                                <label class="form-label" for="basic-icon-default-fullname">Full title</label>
                                <input type="text" class="form-control dt-full-name" id="title" name="title"
                                    placeholder="" aria-label="John Doe" />
                            </div>


                            <div class="mb-4">
                                <label class="form-label" for="basic-icon-default-salary">parent</label>
                                <select class="form-label" name="parent" id="parent">
                                    <option value="0">لا يوجد</option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                @foreach (config('app.languge') as $key => $lang)
                                    <div class="tab-pane fade  show @if ($loop->index == 0) active in @endif"
                                        id="{{ $key }}" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="col-md-4 col-12 mb-3 position-relative" id="{{ $key }}">
                                            <label>{{ __('word.title') }} - {{ $lang }}</label>
                                            <input type="text" class="form-control" id="validationTooltip01"
                                                name="{{ $key }}[title]" placeholder="{{ __('word.title') }}"
                                                value="{{ $setting->translate($key)->title }}" required />
                                        </div>
                                        <label>{{ __('word.contant') }}</label>
                                        <input type="text" class="form-control" name="{{ $key }}[contant]" required
                                            value="{{ $setting->translate($key)->contant }}" />
                                        <label>{{ __('word.address') }} </label>
                                        <input type="text" class="form-control" name="{{ $key }}[address]" required
                                            value="{{ $setting->translate($key)->address }}" />
                                    </div>
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-primary data-submit me-1">Submit</button>
                            <button type="reset" class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div> --}}
            <div class="content-body">
                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Table Category</h4>
                                <a href="{{ route('dashboard.category.create') }}" class="btn btn-primary">Add new
                                    category</a>
                            </div>


                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Parent</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($category as $categorise)
                                            <tr>
                                                <td>
                                                    <span class="fw-bold">{{ $categorise->title }}</span>
                                                </td>
                                                <td>{{ $categorise->parent }}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button"
                                                            class="btn btn-sm dropdown-toggle hide-arrow py-0"
                                                            data-bs-toggle="dropdown">
                                                            <i data-feather="more-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item"
                                                                href="{{ route('dashboard.category.edit', $categorise->id) }}">
                                                                <i data-feather="edit-2" class="me-50"></i>
                                                                <span>Edit</span>
                                                            </a>
                                                            <form action="/dashboard/category/{{ $categorise->id }}"
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
