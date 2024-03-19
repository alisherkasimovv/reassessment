<footer class="page-footer dark" style="padding-top: 0;">
    <div class="footer-copyright" style="margin-top: 0;">
        <p>© 2024. Bog'lanish:&nbsp;<a class="fw-semibold" href="https://t.me/a_kasimovv" target="_blank">Telegram</a></p>
    </div>
</footer>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
@if (request()->is('assess'))
    <script src="{{ asset('js/assessment.js') }}"></script>
@elseif(request()->is('faculties'))
    <script src="{{ asset('js/faculties.js') }}"></script>
@elseif(request()->is('groups'))
    <script src="{{ asset('js/groups.js') }}"></script>
@elseif(request()->is('lecturers'))
    <script src="{{ asset('js/lecturers.js') }}"></script>
@elseif(request()->is('students'))
    <script src="{{ asset('js/students.js') }}"></script>
@elseif(request()->is('subjects'))
    <script src="{{ asset('js/subjects.js') }}"></script>
@endif
