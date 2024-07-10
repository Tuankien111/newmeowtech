<div>
    @if (session('language') === 'en' || !session('language'))
        <a href="{{ route('change-language', 'vi')}}" class="itemLang">
            <img width="32" height="32" src="https://img.icons8.com/fluency/48/vietnam--v1.png" alt="vietnam--v1" />
        </a>
        @else
        <a href="{{ route('change-language', 'en')}}" class="itemLang">
            <img width="32" height="32" src="https://img.icons8.com/color/48/usa.png" alt="usa" />
        </a>
    @endif
</div>
