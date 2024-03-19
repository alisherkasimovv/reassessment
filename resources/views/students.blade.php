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
                                <th style="width: 45%;">Ism, familiya</th>
                                <th style="width: 35%;">Guruh</th>
                                <th style="width: 10%;">O'qish tartibi</th>
                                <th>Amallar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->full_name }}</td>
                                <td>{{ $item->group->name }}</td>
                                <td>{{ $item->study_type }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-warning" type="button"><i class="far fa-edit"></i></button>
                                        <a class="btn btn-danger" type="button" href="groups/delete/{{ $item->id }}"><i class="far fa-trash-alt"></i></a>
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
                    {{ $students->links() }}
                </div>
                <div class="col-md-6 d-lg-flex justify-content-lg-end"><button class="btn btn-success" type="button">Yangi qo'shish&nbsp;<i class="fas fa-plus"></i></button></div>
            </div>
        </div>
    </section>
@endsection
