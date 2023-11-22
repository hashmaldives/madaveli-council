@if ($language == 'dh')
    @php \Carbon\Carbon::setLocale('dv'); @endphp
@else
    @php \Carbon\Carbon::setLocale('en'); @endphp
@endif
@php
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if (!empty($data->title_en)):
        $pageTitle = $data->title_en . ' - ' . nova_get_setting('og_site_name');
    else:
        $pageTitle = nova_get_setting('og_site_name');
    endif;
@endphp
<div class="page-container"
    style="background-image: url('{{ getMedia(nova_get_setting('website_pattern'), null) }}'); background-repeat: repeat;">
    <div class="container page-content no-image">
        <div class="page-title">
            <div class="page-title-inner">
                <span class="lang-{{ $language }} visible">
                    <h2>{{ $language == 'dh' ? $data->title_dh : $data->title_en }}</h2>
                </span>
                <div class="single-under-title d-flex">
                    {{ hashSocialShare($actual_link, $pageTitle) }}
                </div> <!-- / single-under-title -->
            </div><!-- / page-title-inner -->
        </div><!-- / page-title -->
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="page-text ">
                    {{ collect($formData) }}
                    <form class="hash-form" id="{{ $data->slug }}" wire:submit.prevent="submit">
                        
                        <div class="row">
                            @foreach ($data->form_data as $key => $section)
                                @include('layouts/form-blocks', ['section' => $section,'skey' => $key])
                            @endforeach
                        </div>
                        <!--row-->
                        <div id="success_message">
                            <x-elements.alerts.form-processing labelEn="Processing" labelDh="ފޮނުވަނީ" target="submit"
                                icon="fas fa-spinner" class="" dualLanguage="true" :language=$language />
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                        </div>
                        <x-elements.buttons.form-submit labelEn="{{ $data->submit_btn_title_en }}"
                            labelDh="{{ $data->submit_btn_title_dh }}" name="submit"
                            class="g-recaptcha btn btn-big primary {{ $data->slug }}" dualLanguage="true"
                            :language=$language />
                    </form>
                </div> <!-- / page-text -->
            </div> <!-- / col-lg-8 -->
        </div>
        <!--row-->
    </div><!-- / container -->
</div> <!-- / page-container -->

@push('script')
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("{{ $data->slug }}").submit();
        }
    </script>
@endpush
