@extends('layout')

@section('content')
    <section class="clean-block" style="color: rgb(255,255,255);">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="mt-5" style="color: var(--bs-dark);text-align: center;font-weight: bold;">{{ $page_title }}</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col d-lg-flex justify-content-lg-center">
                    <div class="table-responsive flex-fill">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style="width: 5%;">#</th>
                                <th style="width: 65%;">Nomi</th>
                                <th style="width: 20%;">Kod raqami</th>
                                <th>Amallar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($faculties as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->faculty_code }}</td>
                                <td>
                                    <div class="btn-group" role="group">
{{--                                        <button class="btn btn-warning" type="button"><i class="far fa-edit"></i></button>--}}
                                        <a class="btn btn-danger" type="button" href="faculties/delete/{{ $item->id }}"><i class="far fa-trash-alt"></i></a>
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
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    {{ $faculties->links() }}
                </div>
                <div class="col-md-6 d-lg-flex justify-content-lg-end">
                    <button class="btn btn-success" type="button" data-bs-target="#modal-1" data-bs-toggle="modal">Yangi qo'shish&nbsp;<i class="fas fa-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="color: var(--bs-blue);">
                        <h4 class="modal-title">Fakultet qo'shish</h4>
                        <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form class="form-control">
                            <div id="theme-container" class="mb-3 mt-1">
                                <div class="form-floating">
                                    <input class="form-control" type="text" id="name" name="name" placeholder="Fakultet nomini kiriting">
                                    <label class="form-label" for="name">Fakultet nomi:</label>
                                </div>
                            </div>
                            <div id="theme-container" class="mb-3 mt-1">
                                <div class="form-floating">
                                    <input class="form-control" type="text" id="faculty-code" name="faculty-code" placeholder="Fakultet kod raqamini kiriting">
                                    <label class="form-label" for="name">Fakultet kod raqami:</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-light" type="button" data-bs-dismiss="modal">Bekor qilish</button>
                        <button class="btn btn-primary" id="save" type="submit">Saqlash</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
