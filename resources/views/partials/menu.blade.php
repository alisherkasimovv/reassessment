
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container">
        <a class="navbar-brand logo" href="/">Qayta topshirish</a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
            <span class="visually-hidden">Menyuni ochish</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item" style="padding-right: 15px;">
                    <a class="nav-link {{ (request()->is('assess')) ? 'active' : '' }}" href="/assess">Qayta topshirish</a>
                </li>
                <li class="nav-item" style="padding-right: 15px;">
                    <a class="nav-link {{ (request()->is('lecturers')) ? 'active' : '' }}" href="/lecturers">Ustozlar</a>
                </li>
                <li class="nav-item" style="padding-right: 15px;">
                    <a class="nav-link {{ (request()->is('subjects')) ? 'active' : '' }}" href="/subjects">Fanlar</a>
                </li>
                <li class="nav-item" style="padding-right: 15px;">
                    <a class="nav-link {{ (request()->is('faculties')) ? 'active' : '' }}" href="/faculties">Fakultetlar</a>
                </li>
                <li class="nav-item" style="padding-right: 15px;">
                    <a class="nav-link {{ (request()->is('groups')) ? 'active' : '' }}" href="/groups">Guruhlar</a>
                </li>
                <li class="nav-item" style="padding-right: 15px;">
                    <a class="nav-link {{ (request()->is('students')) ? 'active' : '' }}" href="/students">O'quvchilar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
