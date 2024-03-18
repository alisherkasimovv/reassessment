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
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mb-3">
                        <form class="form-control">
                            <div id="inspector-container" class="mb-3 mt-1">
                                <div class="form-floating"><select class="form-select" id="inspector" name="inspector">
                                        <option value="0" selected="">Tanlang...</option>
                                    </select><label class="form-label" for="inspector">Ism, familiyangiz</label></div>
                            </div>
                            <div id="faculty-container" class="mb-3 mt-1">
                                <div class="form-floating"><select class="form-select" id="faculty" name="faculty">
                                        <option value="0">Tanlang...</option>
                                    </select><label class="form-label" for="faculty">Fakultet</label></div>
                            </div>
                            <div id="group-container" class="mb-3 mt-1">
                                <div class="form-floating"><select class="form-select" id="group" name="group">
                                        <option value="0" selected="">Tnalang...</option>
                                    </select><label class="form-label" for="group">Guruh</label></div>
                            </div>
                            <div id="subject-container" class="mb-3 mt-1">
                                <div class="form-floating"><select class="form-select" id="subject" name="subject">
                                        <option value="0" selected="">Tanlang..</option>
                                    </select><label class="form-label" for="subject">Fan</label></div>
                            </div>
                            <div id="student-container" class="mb-3 mt-1">
                                <div class="form-floating">
                                    <select class="form-select" id="student" name="student">
                                        <option value="0" selected="">Tanlang...</option>
                                    </select><label class="form-label" for="student">Talaba ism, familiyasi</label>
                                </div>
                                <div id="previous" class="table-responsive" style="margin-top: 20px;"></div>
                            </div>
                            <div id="lecturer-container" class="mb-3 mt-1">
                                <div class="form-floating"><select class="form-select" id="lecturer" name="lecturer">
                                        <option value="0" selected="">Tanlang...</option>
                                    </select><label class="form-label" for="lecturer">O'qituvchi ism, familiyasi</label></div>
                            </div>
                            <div id="lesson-type-container" class="mb-3 mt-1">
                                <div class="form-floating"><select class="form-select" id="lesson-type" name="lessonType">
                                        <option value="MARUZA" selected="">Maruza</option>
                                        <option value="AMALIYOT">Amaliyot</option>
                                    </select><label class="form-label" for="lesson-type">Dars turi</label></div>
                            </div>
                            <div id="theme-container" class="mb-3 mt-1">
                                <div class="form-floating"><input class="form-control" type="text" id="theme" name="theme" placeholder="Dars mavzusini kiriting"><label class="form-label" for="theme">Dars mavzusi:</label></div>
                            </div>
                            <div id="lesson-date-container" class="mb-3 mt-1">
                                <div class="form-floating"><input class="form-control" id="lesson-date" type="date" name="lessonDate"><label class="form-label" for="lesson-date">Dars o'tkazilgan sana:</label></div>
                            </div>
                            <div id="score-container" class="mb-3 mt-1">
                                <div class="form-floating"><input class="form-control" type="number" id="score" name="score" min="0" max="100" step="1" placeholder="0"><label class="form-label" for="score">Ball:</label></div>
                            </div>
                            <div id="actions-container" class="mb-3 mt-1">
                                <div class="col text-end">
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-secondary" data-bs-toggle="tooltip" data-bss-tooltip="" id="cancel" type="button" title="Barcha ma'lumotlarni tozalash">Bekor qilish</button>
                                        <button class="btn btn-warning" data-bs-toggle="tooltip" data-bss-tooltip="" id="nextRound" type="button" title="O'quvchiga 0 ball qo'ygan holda saqlash">Qayta topshirish</button>
                                        <button class="btn btn-success" data-bs-toggle="tooltip" data-bss-tooltip="" id="success" type="button" title="Balgilangan ball bilan o'quvchi ma'lumotlarini saqlash">Saqlash</button></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
