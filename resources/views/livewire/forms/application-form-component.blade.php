<div>

    <form {{$language == 'dh' ? 'dir=rtl' : 'dir=ltr'}} class="hash-form" id="application_form" wire:submit.prevent="submit">
        <div class="section-heading mt-0">
            <x-elements.general.section-heading
                labelEn="Personal Details" 
                labelDh="ހުށަހަޅާ ފަރާތުގެ މައުލޫމާތު" 
                name="personal_details" 
                class="" 
                tag="h5"
                dualLanguage="true" 
                :language=$language
            />
        </div>
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
                labelEn="Phone" 
                labelDh="ފޯންް" 
                col="12" 
                name="phone" 
                class="form-control" 
                req="true" 
                dualLanguage="false" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="text" 
                labelEn="Email" 
                labelDh="އީމެއިލް" 
                col="12" 
                name="email" 
                class="form-control" 
                req="false" 
                dualLanguage="false" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="text" 
                labelEn="Permanent Address" 
                labelDh="ދާއިމީ އެޑްރެސް" 
                col="12" 
                name="permanent_address" 
                class="form-control" 
                req="true" 
                dualLanguage="false" 
                :language=$language
            />
            <x-elements.fields.text-field 
                type="text" 
                labelEn="Present Address" 
                labelDh="މިހާރު ދިރިއުޅޭ އެޑްރެސް" 
                col="12" 
                name="present_address" 
                class="form-control" 
                req="true" 
                dualLanguage="false" 
                :language=$language
            />
        </div>
        <div class="section-heading mt-0">
            <x-elements.general.section-heading
                labelEn="Application Details" 
                labelDh="އެދޭ ޚިދުމަތުގެ ތަފްސީލް" 
                name="title" 
                class="" 
                tag="h5"
                dualLanguage="true" 
                :language=$language
            />
        </div>
        <div class="form-row">
            @php 
                $categoryList[] = array(
                    "nameEn" => "Select an option", 
                    "valueEn" => "0",
                    "nameDh" => "ހިޔާރު ކުރައްވާ", 
                    "valueDh" => "0",
                    "disabled" => 'disabled',
                );
                $listingOptions = json_encode( $categoryList );
            @endphp
            <x-elements.fields.select-field
                labelEn="Application Type" 
                labelDh="ހުށަހަޅާ ފޯމުގެ ބާވަތް" 
                col="12" 
                name="application_form_category_id" 
                class="select" 
                req="true"
                :options="$listingOptions"
                dualLanguage="true" 
                :language=$language
            />
        </div>
        <div class="form-row">
            <x-elements.fields.textarea-field 
                labelEn="Message (Optional)" 
                labelDh="މެސެޖް (ބޭނުމީޔާ ލިޔަން)" 
                col="12" 
                rows="5" 
                name="user_message" 
                class="form-control" 
                req="false" 
                dualLanguage="true" 
                :language=$language
            />
            @php 
                $contentEn = 'You may upload more than one documents.';
                $contentDh = 'އެއްލިއުމަށްވުރެ އިތުރަށްވެސް އަޕްލޯޑް ކުރެވިދާނެ.';
            @endphp
            <x-elements.general.info-banner
                name="" 
                col="12" 
                class="info-text" 
                design="light" 
                icon="" 
                dualLanguage="true" 
                :language=$language
                :contentEn=$contentEn
                :contentDh=$contentDh
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

        @if(!empty( nova_get_setting('application_form_dec_en') && nova_get_setting('application_form_dec_dh') ))
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
                $dec_en = nova_get_setting('application_form_dec_en');
                $dec_dh = nova_get_setting('application_form_dec_dh');
                @endphp
                <x-elements.general.rich-text
                    labelEn="" 
                    labelDh="" 
                    name="declaration" 
                    col="12" 
                    class="" 
                    dualLanguage="true" 
                    :language=$language
                    :contentEn=$dec_en
                    :contentDh=$dec_dh
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
                    <span>{{ session('message') }}</span>
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
        document.getElementById("application_form").submit();
        }
    </script>
@endpush