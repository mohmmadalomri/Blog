@extends('dashboard.layout.layout')
@section('body')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <form class="needs-validation" novalidate action="{{ route('dashboard.setting.update', $setting) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <section id="input-file-browser">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">File input</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 mb-1 mb-sm-0">
                                            <label for="formFile" class="form-label">Words.Logo</label>
                                            <input class="form-control" type="file" id="logo" name="logo" />
                                        </div>

                                        <div class="col-lg-6 col-md-12 mb-1 mb-sm-0">
                                            <label for="formFile" class="form-label">Words.Logo</label>
                                            <img src="{{ asset('storage/' . $setting->logo) }}" alt=""
                                                style="height: 50px" style="width: 50px"">
                                        </div>
                                        <div class="col-lg-6 col-md-12 mb-1 mb-sm-0">
                                            <label for="formFile" class="form-label">Words.favicon</label>
                                            <input class="form-control" type="file" id="favicon" name="favicon" />
                                        </div>

                                        <div class="col-lg-6 col-md-12 mb-1 mb-sm-0">
                                            <label for="formFile" class="form-label">Words.favicon</label>
                                            <img src="{{ asset('storage/' . $setting->favicon) }}" alt=""
                                                style="height: 50px" style="width: 50px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="tooltip-validations" id="tooltip-validation">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">المعلومات الاساسية</h4>
                                </div>
                                <div class="card-body">

                                    <div class="row g-1">
                                        <div class="col-md-4 col-12 mb-3 position-relative">
                                            <label class="form-label" for="validationTooltip01">Words.facebook</label>
                                            <input type="text" class="form-control" name="facebook" id="facebook"
                                                placeholder="First name" required value="{{ $setting->facebook }}" />
                                            <div class="valid-tooltip">Looks good!</div>
                                        </div>
                                        <div class="col-md-4 col-12 mb-3 position-relative">
                                            <label class="form-label" for="validationTooltip02">Words.instgram</label>
                                            <input type="text" class="form-control" name="instgram" id="instgram"
                                                placeholder="Last name" required value="{{ $setting->instgram }}" />
                                            <div class="valid-tooltip">Looks good!</div>
                                        </div>
                                        <div class="col-md-4 col-12 mb-3 position-relative">
                                            <label class="form-label" for="validationTooltip03">Words.phone</label>
                                            <input type="text" class="form-control" name="phone" id="phone"
                                                placeholder="City" required value="{{ $setting->phone }}" />
                                            <div class="invalid-tooltip">Please provide a valid city.</div>
                                        </div>
                                        <div class="col-md-4 col-12 mb-3 position-relative">
                                            <label class="form-label" for="validationTooltip03">Words.email</label>
                                            <input type="text" class="form-control" name="email" id="email"
                                                placeholder="City" required value="{{ $setting->email }}" />
                                            <div class="invalid-tooltip">Please provide a valid city.</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            @foreach (config('app.languge') as $key => $lang)
                                <li class="nav-link" role="presentation">
                                    <button class="nav-link  @if ($loop->index == 0) active @endif"
                                        id="home-tab" data-bs-toggle="tab" data-bs-target="#{{ $key }}"
                                        type="button" role="tab" aria-controls="{{ $key }}"
                                        aria-selected="true">{{ $lang }}</button>
                                </li>
                            @endforeach


                        </ul>
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
                                    <label>{{ __('word.contant') }}- {{ $lang }}</label>
                                    <input type="text" class="form-control" name="{{ $key }}[contant]"
                                        required value="{{ $setting->translate($key)->contant }}" />
                                    <label>{{ __('word.address') }}- {{ $lang }} </label>
                                    <input type="text" class="form-control" name="{{ $key }}[address]"
                                        required value="{{ $setting->translate($key)->address }}" />
                                </div>
                            @endforeach
                        </div>

                    </div>

                </section>
                <br>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>

@endsection
