@extends('dashboard.layout.layout')

@section('vendor-style')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/editors/quill/katex.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/editors/quill/monokai-sublime.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/editors/quill/quill.snow.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/plugins/forms/form-quill-editor.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/pages/page-blog.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/custom-rtl.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
@endsection

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


            <div class="content-body">
                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Table Post</h4>
                            </div>



                            <form class="add-new-record modal-content pt-0" action="{{ route('dashboard.post.store') }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header mb-1">
                                    <h5 class="modal-title" id="exampleModalLabel">New Post</h5>
                                </div>
                                <div class="modal-body flex-grow-1">


                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 mb-1 mb-sm-0">
                                            <label for="formFile" class="form-label"> image</label>
                                            <input class="form-control" type="file" id="image" name="image" />
                                        </div>

                                        <div class="col-lg-6 col-md-12 mb-1 mb-sm-0">
                                            <label for="formFile" class="form-label">Words.image</label>

                                        </div>
                                    </div>
                                    <br>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="basic-icon-default-salary">Category</label>
                                                <select class="select2 form-select" name="category_id" id="category_id">
                                                    <option value="">لا يوجد</option>
                                                    @foreach ($category as $category)
                                                        <option value="{{ $category->id }}">{{ $category->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content" id="myTabContent">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            @foreach (config('app.languge') as $key => $lang)
                                                <li class="nav-link" role="presentation">
                                                    <button
                                                        class="nav-link  @if ($loop->index == 0) active @endif"
                                                        id="home-tab" data-bs-toggle="tab"
                                                        data-bs-target="#{{ $key }}" type="button"
                                                        role="tab" aria-controls="{{ $key }}"
                                                        aria-selected="true">{{ $lang }}</button>
                                                </li>
                                            @endforeach


                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            @foreach (config('app.languge') as $key => $lang)
                                                <div class="tab-pane fade  show @if ($loop->index == 1) active in @endif"
                                                    id="{{ $key }}" role="tabpanel" aria-labelledby="home-tab">
                                                    {{-- <div class="col-md-4 col-12 mb-3 position-relative"
                                                        id="{{ $key }}"> --}}
                                                        <label>{{ __('word.title') }} - {{ $lang }}</label>
                                                        <textarea class="form-control" id="title" name="{{ $key }}[title]"
                                                            placeholder="{{ __('word.title') }}" ></textarea>
                                                    {{-- </div> --}}
                                                    <label>{{ __('word.content') }}</label>
                                                    <textarea type="text" class="form-control" id="contant" name="{{ $key }}[contant]"
                                                        ></textarea>
                                                    <br>
                                                    <div>
                                                        <label>{{ __('word.smallDesc') }}</label>
                                                        {{-- <input type="text" class="form-control"
                                                            name="{{ $key }}[smallDesc]" required
                                                            id="editor" /> --}}
                                                        <textarea class="form-control" name="{{ $key }}[smallDesc]"  id="smallDesc"></textarea>
                                                    </div>
                                                    <div>
                                                        <label>{{ __('word.tags') }}</label>
                                                        {{-- <input type="text" class="form-control"
                                                            name="{{ $key }}[smallDesc]" required
                                                            id="editor" /> --}}
                                                        <textarea class="form-control" name="{{ $key }}[tags]"  id="tags"></textarea>
                                                    </div>

                                                </div>
                                            @endforeach
                                        </div>
                                        <br>


                                    </div>
                                    <button type="submit" class="btn btn-primary data-submit me-1">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>




            {{-- <div class="blog-edit-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div class="avatar me-75">
                                        <img src="{{ asset('images/portrait/small/avatar-s-9.jpg') }}" width="38"
                                            height="38" alt="Avatar" />
                                    </div>
                                    <div class="author-info">
                                        <h6 class="mb-25">Chad Alexander</h6>
                                        <p class="card-text">May 24, 2020</p>
                                    </div>
                                </div>
                                <!-- Form -->
                                <form action="{{ route('dashboard.post.store') }}" method="POST"
                                    enctype="multipart/form-data" class="mt-2">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="blog-edit-title">Title</label>
                                                <input type="text" id="title" name="title" class="form-control"
                                                    value="" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="blog-edit-category">Category</label>
                                                <select id="category_id" class="select2 form-select" name="category_id">
                                                    @foreach ($category as $categorise)
                                                        <option value="{{ $categorise->id }}" selected>
                                                            {{ $categorise->title }}
                                                        </option>
                                                    @endforeach


                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="blog-edit-slug">smallDesc</label>
                                                <input type="text" id="smallDesc" class="form-control"
                                                    name="smallDesc" value="" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="blog-edit-status">Status</label>
                                                <select class="form-select" id="blog-edit-status">
                                                    <option value="Published">Published</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Draft">Draft</option>
                                                </select>
                                            </div>
                                        </div>



                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label">Content</label>
                                                <div id="blog-editor-wrapper">
                                                    <div id="blog-editor-container">
                                                        <div class="editor">
                                                            <textarea name="contant">
                                                                Cupcake ipsum dolor sit. Amet dessert donut candy chocolate bar
                                                                cotton dessert candy
                                                                chocolate. Candy muffin danish. Macaroon brownie jelly beans
                                                                marzipan cheesecake oat cake.
                                                                Carrot cake macaroon chocolate cake. Jelly brownie jelly. Marzipan
                                                                pie sweet roll.
                                                            </textarea>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <div class="border rounded p-2">
                                                <h4 class="mb-1">Featured Image</h4>
                                                <div class="d-flex flex-column flex-md-row">
                                                    <img src="{{ asset('images/slider/03.jpg') }}" id=""
                                                        class="rounded me-2 mb-1 mb-md-0" width="170" height="110"
                                                        alt="Blog Featured Image" />
                                                    <div class="featured-info">
                                                        <small class="text-muted">Required image resolution 800x400, image
                                                            size
                                                            10mb.</small>
                                                        <p class="my-50">
                                                            <a href="" id="">C:\fakepath\banner.jpg</a>
                                                        </p>
                                                        <div class="d-inline-block">
                                                            <input class="form-control" type="file" id="image"
                                                                name="image" accept="image/*" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-50">
                                            <button type="submit" class="btn btn-primary me-1">Crate Posty</button>
                                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection


@section('vendor-script')
    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    {{-- <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../../../app-assets/vendors/js/editors/quill/katex.min.js"></script>
    <script src="../../../app-assets/vendors/js/editors/quill/highlight.min.js"></script>
    <script src="../../../app-assets/vendors/js/editors/quill/quill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/page-blog-edit.js"></script> --}}
    <!-- END: Page JS-->



@endsection
