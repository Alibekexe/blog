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
                    <div class="col-sm-6"><h3 class="mb-0"> Edit User</h3></div>
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
                    <form action="{{route('admin.user.update', $user->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <input type="string" class="form-control" name="name"  placeholder="your name" value="{{$user->name}}">
                            @error('name')
                            <div class="text-danger"> {{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email"  placeholder="your email" value="{{$user->email}}">
                            @error('email')
                            <div class="text-danger"> {{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>choose a role</label>
                            <select name="role" class="form-control" >
                                @foreach($roles as $id => $role)
                                    <option value="{{ $id }}"
                                        {{$id == $user->role ? 'selected'  : ''}}
                                    >{{$role }}</option>
                                @endforeach
                                @error('role ')
                                <div class="text-danger"> {{$message}}</div>
                                @enderror
                            </select>
                        </div>
                        <input type="submit"  class="btn btn-primary" value="Edit">
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
