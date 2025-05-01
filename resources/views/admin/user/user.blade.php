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
                    <div class="col-sm-6"><h3 class="mb-0">User</h3></div>
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
                <div class="col-1">
                    <a href="{{ route('admin.user.create') }}" class="btn btn-primary mb-2">Add</a>
                </div>
                <div class="col-12"></div>

                <div class="card mb-4">
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>

                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th colspan="3" >Actions</th>
                            </tr>
                            </thead>
                            @foreach($users as $user)
                            <tbody>
                            <tr class="align-middle">
                                <td>{{ $user->id }}</td>
                                <td>{{$user->name}}</td>
                                <td><a href="{{ route('admin.user.show' , $user->id) }}"> <i class="fa-solid fa-eye"></i> </a></td>
                                <td><a href="{{ route('admin.user.edit' , $user->id) }}" class="text-success"> <i class="fa-solid fa-pencil"></i> </a></td>
                                <td>
                                    <form action="{{route('admin.user.delete' ,$user->id)}}" method="POST" >
                                    @csrf
                                        @method('DELETE')
                                        <button type="submit" class="border-0 bg-transparent">
                                        <i class="fa-solid fa-trash text-danger" role="button"></i>
                                        </button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>

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
