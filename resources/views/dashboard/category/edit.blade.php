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


            <div class="content-body">
                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Table Category</h4>

                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modals-slide-in">Add new</button>


                            </div>


                            {{-- <div class="modal modal-slide-in fade" id="modals-slide-in">
                                <div class="modal-dialog sidebar-sm"> --}}
                            <form class="add-new-record modal-content pt-0"
                                action="{{ route('dashboard.category.update', $category->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close">×</button>
                                <div class="modal-header mb-1">
                                    <h5 class="modal-title" id="exampleModalLabel">New category</h5>
                                </div>
                                <div class="modal-body flex-grow-1">
                                    {{-- <div class="mb-1">
                                                <label class="form-label" for="basic-icon-default-fullname">Full title</label>
                                                <input type="text" class="form-control dt-full-name" id="title" name="title"
                                                    placeholder="" aria-label="John Doe" />
                                            </div> --}}

                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 mb-1 mb-sm-0">
                                            <label for="formFile" class="form-label"> image</label>
                                            <input class="form-control" type="file" id="image" name="image" />
                                        </div>

                                        <div class="col-lg-6 col-md-12 mb-1 mb-sm-0">
                                            <label for="formFile" class="form-label">Words.image</label>
                                            {{-- <img src="{{ asset('storage/' . $categories->) }}" alt=""
                                                    style="height: 50px" style="width: 50px""> --}}
                                        </div>
                                    </div>
                                    <br>
                                    <div class="mb-4">
                                        <label class="form-label" for="basic-icon-default-salary">parent</label>
                                        <select class="form-label" name="parent" id="parent">
                                            <option value="0">لا يوجد</option>
                                            @foreach ($category as $categorise)
                                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="tab-content" id="myTabContent">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            @foreach (config('app.languge') as $key => $lang)
                                                <li class="nav-link" role="presentation">
                                                    <button
                                                        class="nav-link  @if ($loop->index == 0) active @endif"
                                                        id="home-tab" data-bs-toggle="tab"
                                                        data-bs-target="#{{ $key }}" type="button" role="tab"
                                                        aria-controls="{{ $key }}"
                                                        aria-selected="true">{{ $lang }}</button>
                                                </li>
                                            @endforeach


                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            @foreach (config('app.languge') as $key => $lang)
                                                <div class="tab-pane fade  show @if ($loop->index == 1) active in @endif"
                                                    id="{{ $key }}" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="col-md-4 col-12 mb-3 position-relative"
                                                        id="{{ $key }}">
                                                        <label>{{ __('word.title') }} - {{ $lang }}</label>
                                                        <input type="text" class="form-control"
                                                            id="validationTooltip01" name="{{ $key }}[title]"
                                                            placeholder="{{ __('word.title') }}" value=""
                                                            required />
                                                    </div>
                                                    <label>{{ __('word.content') }}</label>
                                                    <input type="text" class="form-control"
                                                        name="{{ $key }}[content]" required value="" />

                                                </div>
                                            @endforeach
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary data-submit me-1">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
