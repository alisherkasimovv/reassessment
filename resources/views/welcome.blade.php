<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Talabalar</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col text-center mt-5 mb-5">
            <h1>Qayta topshirish</h1>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mb-3">
            <form class="form-control">
                <div class="mb-3 mt-1">
                    <div class="form-floating">
                        <select id="inspector" class="form-select" name="inspector" required="" aria-label="Ism, familiyangiz">
                            <option value="0" selected="">Tanlang...</option>
                        </select>
                        <label for="inspector">Ism, familiyangiz</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <select id="faculty" class="form-select" name="faculty" required="">
                            <option value="0" selected="">Tanlang...</option>
                        </select>
                        <label for="faculty">Fakultet:</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <select id="group" class="form-select" name="group" required="">
                            <option class="form-select-option" value="0" selected="">Tanlang...</option>
                        </select>
                        <label for="group">Guruh:</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <select id="subject" class="form-select" name="subject" required="">
                            <option value="0" selected="">Tanlang...</option>
                        </select>
                        <label for="subject">Fan:</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <select id="student" class="form-select" name="student" required="" aria-label="Talaba">
                            <option value="0" selected="">Tanlang...</option>
                        </select>
                        <label for="student">Talaba:</label>
                    </div>
                    <div id="previous" class="table-responsive" style="margin-top: 20px;">

                    </div>
                </div>
                <div class="mb-3 mt-1">
                    <div class="form-floating">
                        <select id="lecturer" class="form-select" name="lecturer" required="" aria-label="O'qituvchi ism familiyasi">
                            <option value="0" selected="">Tanlang...</option>
                        </select>
                        <label for="lecturer">O'qituvchi ism familiyasi</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <select id="lessonType" class="form-select" name="lessonType" required="">
                            <option value="NONE" selected="">Tanlang...</option>
                            <option value="MARUZA">Maruza</option>
                            <option value="AMALIYOT">Amaliyot</option>
                        </select>
                        <label for="lessonType">Dars turi:</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input id="theme" class="form-control" type="text" placeholder="Mavzu nomini kiriting...">
                        <label for="theme">Mavzu:</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input id="lessonDate" class="form-control" type="date">
                        <label for="lessonDate">Dars sanasi:</label>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="form-floating">
                        <input id="lessonScore" class="form-control" type="number" min="0" max="100" step="1" name="score" placeholder="0...100">
                        <label for="lessonScore">Baxo:</label>
                    </div>
                </div>
                <div class="mt-3 mb-2">
                    <div class="col text-end">
                        <div class="btn-group" role="group">
                            <button id="cancel" class="btn btn-secondary" type="button">Bekor qilish</button>
                            <button id="nextRound" class="btn btn-warning" type="button">Qayta topshirish</button>
                            <button id="success" class="btn btn-success" type="button">Saqlash</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-5 mb-5">
        <div class="col text-center text-small text-muted">
            <p>Bog'lanish uchun: <a href="https://t.me/a_kasimovv">Telegram</a></p>
        </div>
    </div>
</div>
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>--}}
<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
