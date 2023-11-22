@props(['skey','section'])
<div class="form-section {{'col-lg-'.(isset($section['attributes']['column']) ? $section['attributes']['column'] : '') }}">
    <div class="section-heading mt-0">
        <x-elements.general.section-heading
            labelEn="{{ isset($section['attributes']['section_title_en']) ? $section['attributes']['section_title_en'] : '' }}" 
            labelDh="{{ isset($section['attributes']['section_title_dh']) ? $section['attributes']['section_title_dh'] : '' }}" 
            name="title" 
            class="" 
            tag="h5"
            dualLanguage="true" 
            :language=$language
        />
    </div>
    <div class="row">
        @foreach ($section['attributes']['fields'] as $fkey => $item)
                
                @switch($item['layout'])

                    @case('heading')
                        <x-elements.general.section-heading
                            labelEn="{{ $item['attributes']['heading_en'] }}" 
                            labelDh="{{ $item['attributes']['heading_dh'] }}" 
                            name="{{ Str::snake($item['attributes']['heading_en'], '_') }}" 
                            class="section-heading" 
                            tag="{{ $item['attributes']['heading'] }}"
                            dualLanguage="true" 
                            :language=$language
                        />
                    @break
                
                    @case('textfield')
                        <x-elements.fields.text-field 
                            type="text" 
                            labelEn="{{ $item['attributes']['label_en'] }}" 
                            labelDh="{{ $item['attributes']['label_dh'] }}" 
                            col="{{$item['attributes']['column'] ?? ''}}" 
                            name="{{ Str::slug($item['attributes']['label_en'], '_') }}" 
                            class="form-control" 
                            req="{{ $item['attributes']['required'] == true ? 'true' : '' }}" 
                            dualLanguage="true" 
                            :language=$language
                        />
                    @break

                    @case('numberfield')
                        <x-elements.fields.text-field 
                            type="number" 
                            labelEn="{{ $item['attributes']['label_en'] }}" 
                            labelDh="{{ $item['attributes']['label_dh'] }}" 
                            col="{{$item['attributes']['column'] ?? ''}}" 
                            name="{{ Str::snake($item['attributes']['label_en'], '_') }}" 
                            class="form-control" 
                            req="{{ $item['attributes']['required'] == true ? 'true' : '' }}" 
                            dualLanguage="false" 
                            :language=$language
                        />
                    @break

                    @case('datefield')
                        <x-elements.fields.text-field 
                            type="date" 
                            labelEn="{{ $item['attributes']['label_en'] }}" 
                            labelDh="{{ $item['attributes']['label_dh'] }}" 
                            col="{{$item['attributes']['column'] ?? ''}}" 
                            name="{{ Str::snake($item['attributes']['label_en'], '_') }}" 
                            class="form-control" 
                            req="{{ $item['attributes']['required'] == true ? 'true' : '' }}" 
                            dualLanguage="true" 
                            :language=$language
                        />
                    @break

                    @case('datetimefield')
                        <x-elements.fields.text-field 
                            type="datetime" 
                            labelEn="{{ $item['attributes']['label_en'] }}" 
                            labelDh="{{ $item['attributes']['label_dh'] }}" 
                            col="{{$item['attributes']['column'] ?? ''}}" 
                            name="{{ Str::snake($item['attributes']['label_en'], '_') }}" 
                            class="form-control" 
                            req="{{ $item['attributes']['required'] == true ? 'true' : '' }}" 
                            dualLanguage="true" 
                            :language=$language
                        />
                    @break

                    @case('emailfield')
                        <x-elements.fields.text-field 
                            type="email" 
                            labelEn="{{ $item['attributes']['label_en'] }}" 
                            labelDh="{{ $item['attributes']['label_dh'] }}" 
                            col="{{$item['attributes']['column'] ?? ''}}" 
                            name="{{ Str::snake($item['attributes']['label_en'], '_') }}" 
                            class="form-control" 
                            req="{{ $item['attributes']['required'] == true ? 'true' : '' }}" 
                            dualLanguage="false" 
                            :language=$language
                        />
                    @break

                    @case('textareafield')
                    
                        <x-elements.fields.textarea-field 
                            labelEn="{{ $item['attributes']['label_en'] }}" 
                            labelDh="{{ $item['attributes']['label_dh'] }}" 
                            col="{{$item['attributes']['column'] ?? ''}}" 
                            rows="5"
                            name="{{ Str::snake($item['attributes']['label_en'], '_') }}" 
                            class="form-control" 
                            req="{{ $item['attributes']['required'] == true ? 'true' : '' }}" 
                            dualLanguage="true" 
                            :language=$language
                            skey="{{ $skey }}"
                            fkey="{{ $fkey }}"
                        />
                    @break

                    @case('textareafield')
                        <x-elements.fields.textarea-field 
                            labelEn="{{ $item['attributes']['label_en'] }}" 
                            labelDh="{{ $item['attributes']['label_dh'] }}" 
                            col="{{$item['attributes']['column'] ?? ''}}" 
                            rows="5"
                            name="{{ Str::snake($item['attributes']['label_en'], '_') }}" 
                            class="form-control" 
                            req="{{ $item['attributes']['required'] == true ? 'true' : '' }}" 
                            dualLanguage="true" 
                            :language=$language
                        />
                    @break

                    @case('infotext')
                        @php 
                            $contentEn = $item['attributes']['content_en'];
                            $contentDh = $item['attributes']['content_dh'];
                        @endphp
                        <x-elements.general.rich-text
                            labelEn="{{ $item['attributes']['label_en'] }}" 
                            labelDh="{{ $item['attributes']['label_dh'] }}" 
                            name="{{ Str::snake($item['attributes']['label_en'], '_') }}" 
                            col="{{$item['attributes']['column'] ?? ''}}" 
                            class="info-text" 
                            dualLanguage="true" 
                            :language=$language
                            :contentEn=$contentEn
                            :contentDh=$contentDh
                        />
                    @break

                    @case('infobanner')
                        @php 
                            $contentEn = $item['attributes']['content_en'];
                            $contentDh = $item['attributes']['content_dh'];
                        @endphp
                        <x-elements.general.info-banner
                            name="" 
                            col="{{$item['attributes']['column'] ?? ''}}" 
                            class="info-text" 
                            design="{{$item['attributes']['design'] ?? ''}}" 
                            icon="{{$item['attributes']['icon'] ?? ''}}" 
                            dualLanguage="true" 
                            :language=$language
                            :contentEn=$contentEn
                            :contentDh=$contentDh
                        />
                    @break

                    @case('filefield')
                        @php 
                            $types = implode(", ", $item['attributes']['allowed_file_types'])
                        @endphp
                        <x-elements.fields.file-upload-field 
                            labelEn="{{ $item['attributes']['label_en'] }}" 
                            labelDh="{{ $item['attributes']['label_dh'] }}" 
                            col="{{$item['attributes']['column'] ?? ''}}" 
                            name="{{ Str::snake($item['attributes']['label_en'], '_') }}" 
                            class="file-upload-input" 
                            req="{{ $item['attributes']['required'] == true ? 'true' : '' }}"
                            mimeTypes="( {{ $types }} | {{ $item['attributes']['max_size'] }}MB Max )"
                            :filePreview=null
                            dualLanguage="true" 
                            :language=$language
                        />
                    @break

                    @case('multifilefield')
                        @php 
                            $types = implode(", ", $item['attributes']['allowed_file_types'])
                        @endphp
                        <x-elements.fields.multi-file-upload-field 
                            labelEn="{{ $item['attributes']['label_en'] }}" 
                            labelDh="{{ $item['attributes']['label_dh'] }}" 
                            col="{{$item['attributes']['column'] ?? ''}}" 
                            name="{{ Str::snake($item['attributes']['label_en'], '_') }}" 
                            class="file-upload-input" 
                            req="{{ $item['attributes']['required'] == true ? 'true' : '' }}"
                            mimeTypes="( {{ $types }} | {{ $item['attributes']['max_size'] }}MB Max )"
                            :filePreview=null
                            dualLanguage="true" 
                            :language=$language
                        />
                    @break
                
                @endswitch
                
        @endforeach
    </div>
</div><!--form-section-->