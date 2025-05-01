@extends('admin.layouts.main')
@section('content')
<div class="app-wrapper">
    <!--begin::Header-->
    <nav class="app-header navbar navbar-expand bg-body">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Start Navbar Links-->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                        <i class="bi bi-list"></i>
                    </a>
                </li>
            </ul>
            <!--end::Start Navbar Links-->
            <!--begin::End Navbar Links-->

        </div>
        <!--end::Container-->
    </nav>
    <!--end::Header-->
    <!--begin::Sidebar-->
    @include('admin.includes.sidebar')
    <!--end::Sidebar-->
    <!--begin::App Main-->
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6"><h3 class="mb-0">Post Title</h3></div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->

                <div class="col-12">
                    <form action="{{ route('admin.post.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <input type="string" class="form-control" name="title"  aria-describedby="emailHelp" value={{old('title')}}>
                            @error('title')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea id="summernote" name="content" > {{old('content')}}</textarea>
                            @error('content')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                                <label for="exampleInputFile">Post Photo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="preview_image">
                                        <label class="custom-file-label" >Choose file</label>
                                    </div>
                                </div>
                            @error('preview_image')
                            <div class="text-danger"> {{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Main post Photo</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="main_image">
                                    <label class="custom-file-label" >Choose file</label>
                                </div>
                            </div>
                            @error('main_image')
                            <div class="text-danger"> {{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Tags</label>
                            <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Select a Tags" style="width: 100%;">
                                @foreach($tags as $tag)

                                    <option {{is_array($tag) && in_array($tag->id , old('tag_ids')) ? 'selected' : ''}} value="{{$tag->id}}"> {{$tag->title}}</option>
                                @endforeach
                                    @error('tag_ids')
                                    <div class="text-danger"> {{$message}}</div>
                                    @enderror
                            </select>
                        </div>
                        <div class="form-group ">
                            <input type="submit"  class="btn btn-primary" value="Add">
                        </div>
                    </form>
                </div>


                <!--end::Row-->

            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content-->
    </main>
    <!--end::App Main-->
    <!--begin::Footer-->
    <footer class="app-footer">
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline"></div>
        <!--end::To the end-->
        <!--begin::Copyright-->
        <strong>
           Blog
        </strong>

        <!--end::Copyright-->
    </footer>
    <!--end::Footer-->
</div>
@endsection
