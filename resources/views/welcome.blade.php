<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Studentlarni baxolash</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="{{ asset('js/jquery.js') }}"></script>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col">
                    <h1>Qayta topshirish</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form>
                <div class="row" style="margin-top: 20px;">
                    <div class="col">
                        <label for="lecturer" class="form-label" style="margin-bottom: 0;">Ism, familiyangiz</label>
                        <select id="lecturer" class="form-select" name="lecturer" required="">
                            <option value="0" selected="">Tanlang...</option>
                        </select>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col">
                        <label for="faculty" class="form-label" style="margin-bottom: 0;">Fakultet:</label>
                        <select id="faculty" class="form-select" name="faculty" required="">
                            <option value="0" selected="">Tanlang...</option>
                        </select>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col">
                        <label for="group" class="form-label" style="margin-bottom: 0;">Guruh:</label>
                        <select id="group" class="form-select" name="group" required="">
                            <option value="0" selected="">Tanlang...</option>
                        </select>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col">
                        <label for="student" class="form-label" style="margin-bottom: 0;">Talaba:</label>
                        <select id="student" class="form-select" name="student" required="">
                            <option value="0" selected="">Tanlang...</option>
                        </select>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col">
                        <label for="subject" class="form-label" style="margin-bottom: 0;">Fan:</label>
                        <select id="subject" class="form-select" name="subject" required="">
                            <option value="0" selected="">Tanlang...</option>
                        </select>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col">
                        <label for="lessonType" class="form-label" style="margin-bottom: 0;">Dars turi:</label>
                        <select id="lessonType" class="form-select" name="lessonType" required="">
                            <option value="NONE" selected="">Tanlang...</option>
                            <option value="MARUZA">Maruza</option>
                            <option value="AMALIYOT">Amaliyot</option>
                        </select>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col-8">
                        <label for="theme" class="form-label" style="margin-bottom: 0;">Mavzu:</label>
                        <input id="theme" class="form-control" type="text" placeholder="Mavzu nomini kiriting...">
                    </div>
                    <div class="col-4">
                        <label for="lessonDate" class="form-label" style="margin-bottom: 0;">Dars sanasi:</label>
                        <input id="lessonDate" class="form-control" type="date">
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col">
                        <label for="lessonScore" class="form-label" style="margin-bottom: 0;">Baxo:</label>
                        <input id="lessonScore" class="form-control" type="number" min="0" max="100" step="1" name="score" placeholder="0...100">
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;margin-bottom: 50px;">
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
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
