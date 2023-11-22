<div>
    <button class="{{ $class }}" 
        data-sitekey="{{env('CAPTCHA_SITE_KEY')}}" 
        data-callback='onSubmit' 
        data-action='submit'>
        @if($dualLanguage == true)
            <h6 class="lang-{{ $language }} visible">{{ $language == 'dh' ? $labelDh : $labelEn }}</h6>
        @else 
            <h6>{{ $labelEn }}</h6>
        @endif
    </button>
</div>