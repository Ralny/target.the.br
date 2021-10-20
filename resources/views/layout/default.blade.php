<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{ Metronic::printAttrs('html') }}
    {{ Metronic::printClasses('html') }}>

<head>
    <meta charset="utf-8" />

    {{-- Title Section --}}
    <title>{{ config('app.name') }} | @yield('title', $page_title ?? '')</title>

    {{-- Meta Data --}}
    <meta name="description" content="@yield('page_description', $page_description ?? '')" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}" />

    {{-- Fonts --}}
    {{ Metronic::getGoogleFontsInclude() }}

    {{-- Global Theme Styles (used by all pages) --}}
    @foreach (config('layout.resources.css') as $style)
        <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($style)) : asset($style) }}"
            rel="stylesheet" type="text/css" />
    @endforeach

    {{-- Layout Themes (used by all pages) --}}
    @foreach (Metronic::initThemes() as $theme)
        <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($theme)) : asset($theme) }}"
            rel="stylesheet" type="text/css" />
    @endforeach

    {{-- Includable CSS --}}
    @yield('styles')

    {{-- livewire Styles CSS --}}
    @livewireStyles

</head>

<body {{ Metronic::printAttrs('body') }} {{ Metronic::printClasses('body') }}>

    @if (config('layout.page-loader.type') != '')
        @include('layout.partials._page-loader')
    @endif

    @include('layout.base._layout')

    <script>
        var HOST_URL = "{{ route('quick-search') }}";
    </script>

    {{-- Global Config (global config for global JS scripts) --}}
    <script>
        var KTAppSettings = {!! json_encode(config('layout.js'), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!};
    </script>

    {{-- Global Theme JS Bundle (used by all pages) --}}
    @foreach (config('layout.resources.js') as $script)
        <script src="{{ asset($script) }}" type="text/javascript"></script>
    @endforeach

    {{-- livewire Scripts JS --}}
    @livewireScripts

    {{-- Sweet2Alert2 - https://sweetalert2.github.io/ + https://livewire-alert.jantinnerezo.com --}}
    <x-livewire-alert::scripts />
    {{-- Pharaonic - https://pharaonic.io/package/3-livewire/27-select2 --}}
    <x:pharaonic-select2::scripts />

    <script>
        window.addEventListener('show-form', event => {
            $('#modalForm').modal('show');
        });

        window.addEventListener('hide-form', event => {
            $('#modalForm').modal('hide');
        });
    </script>

<script>
    //Se você estiver renderizando um Select2 dentro de um modal (Bootstrap 3.x) que ainda não foi renderizado ou aberto,
    //pode ser necessário vincular ao shown.bs.modal evento:

    document.addEventListener('livewire:load', function() {

        $('body').on('shown.bs.modal', '.modal', function() {
            $(this).find('select').each(function() {
                var dropdownParent = $(document.body);
                if ($(this).parents('.modal.in:first').length !== 0)
                    dropdownParent = $(this).parents('.modal.in:first');
                $(this).select2({
                    dropdownParent: dropdownParent
                });
            });
        });

    })
</script>

    {{-- Includable JS --}}
    @yield('scripts')

</body>

</html>
