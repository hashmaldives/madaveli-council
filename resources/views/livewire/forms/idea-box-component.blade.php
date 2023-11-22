<div>

    <form class="hash-form" id="idea_box" wire:submit.prevent="submit">

        <div class="form-row">
            <x-elements.fields.text-field 
                type="text" 
                labelEn="Full Name" 
                labelDh="ފުރިހަމަ ނަން" 
                col="12" 
                name="name" 
                class="form-control" 
                req="true" 
                dualLanguage="true" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="text" 
                labelEn="Email / Phone" 
                labelDh="އީމެއިލް/ ފޯންް" 
                col="12" 
                name="email_phone" 
                class="form-control" 
                req="true" 
                dualLanguage="false" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="text" 
                labelEn="Address" 
                labelDh="އެޑްރެސް" 
                col="12" 
                name="address" 
                class="form-control" 
                req="false" 
                dualLanguage="false" 
                :language=$language
            />
            <x-elements.fields.textarea-field 
                labelEn="Message" 
                labelDh="މެސެޖް" 
                col="12" 
                rows="5" 
                name="user_message" 
                class="form-control" 
                req="true" 
                dualLanguage="true" 
                :language=$language
            />
            <x-elements.fields.multi-file-upload-field 
                labelEn="Attachment" 
                labelDh="އެޓޭޗްމަންޓް" 
                col="12" 
                name="attachment" 
                class="file-upload-input" 
                req="false"
                mimeTypes="( PDF | 5MB Max )"
                :filePreview=$attachment
                dualLanguage="true" 
                :language=$language
            />
            
        </div><!-- / form-row -->

        @if(!empty( nova_get_setting('idea_box_dec_en') && nova_get_setting('idea_box_dec_dh') ))
            <div class="section-heading">
                <x-elements.general.section-heading
                    labelEn="Declaration" 
                    labelDh="ޑިކްލަރޭޝަން" 
                    name="declaration_heading" 
                    class="" 
                    tag="h5"
                    dualLanguage="true" 
                    :language=$language
                />
            </div>
            <div class="form-row">
                @php
                $idea_box_dec_en = nova_get_setting('idea_box_dec_en');
                $idea_box_dec_dh = nova_get_setting('idea_box_dec_dh');
                @endphp
                <x-elements.general.rich-text
                    labelEn="" 
                    labelDh="" 
                    name="declaration" 
                    col="12" 
                    class="" 
                    dualLanguage="true" 
                    :language=$language
                    :contentEn=$idea_box_dec_en
                    :contentDh=$idea_box_dec_dh
                />
            </div>
        @endif
        <div id="success_message">
            <x-elements.alerts.form-processing
                labelEn="Processing" 
                labelDh="ފޮނުވަނީ" 
                target="submit" 
                icon="fas fa-spinner"
                class="" 
                dualLanguage="true" 
                :language=$language
            />
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div><!-- / form-row -->
        <x-elements.buttons.form-submit
            labelEn="Submit" 
            labelDh="ފޮނުވާ" 
            name="submit" 
            class="g-recaptcha btn btn-big primary submit" 
            dualLanguage="true" 
            :language=$language
        />
    </form>
</div>

@push('script')
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
        document.getElementById("idea_box").submit();
        }
    </script>
@endpush