@props(['time' => false, 'mode' => 'single', 'format' => 'Y-m-d'])
<div class="flat-picker" wire:ignore >
    <input 
    dir="ltr"
    x-data="{
        init() {
            flatpickr(this.$refs.input, {
                enableTime: {{ $time ? 'true' : 'false' }},
                dateFormat: '{{ $format }}',
                mode: '{{ $mode }}'
            });
        }
    }" x-ref="input" type="text" 
        {{ $attributes->merge(['class' => ' form-control text-english ']) }} />
    <div class="icon">
        <i class="fa-regular fa-calendar"></i>
    </div>
</div>