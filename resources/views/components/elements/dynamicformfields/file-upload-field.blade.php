<div class="form-group col-md-{{ $col }}">
    <label for={{ $name }}><span class="lang-{{ $language }} visible">{{ $language == 'dh' ? $labelDh : $labelEn }}<span class="asterisk">{{ $req == 'true' ? '*' : '' }}</span></span></label>
    <div class="input-wrap">
        <div class="file-uploader-wrapper" x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
            <input type="file" class="{{ $class }}" id={{ $name }} wire:model={{ $name }} name={{ $name }} hidden {{ $req == 'true' ? 'required' : '' }}> 
            <label class="file-upload-button" for="{{ $name }}">
            @if($dualLanguage == true)
                <h6><i class="fas fa-upload"></i><span>{{ $language == 'dh' ? 'އަޕްލޯޑް' : 'Upload' }}</span></h6>
            @else 
                <h6>Upload</h6>
            @endif
            
            <span class="mime-types">{{ $mimeTypes }}</span>
            </label>
            <!-- Progress Bar -->
            <div class="is-uploading" x-show="isUploading">
                <progress max="100" x-bind:value="progress"></progress>
            </div><!--is-uploading-->
        </div><!--file-uploader-wrapper-->
        @if ($filePreview)
            <div dir="ltr" class="attached-file">
                <div class="row">
                    <div class="col file">
                        <a>
                            <i style="" class="fas fa-file-pdf"></i>
                            <span>{{ $filePreview->getClientOriginalName() }}</span>
                        </a>
                    </div><!--file -->
                    <div class="col delete">
                        <span wire:click="$set('{{$name}}','')">
                            <i class="fas fa-times"></i>
                        </span>
                    </div><!--delete -->
                </div><!--row -->
            </div><!--attached-file -->
        @endif
    </div><!--po-input-wrap-->
    <div class="help-block with-errors color-danger">@error($name){{ $message }}@enderror</div>
</div><!--form-group col-md-4 -->