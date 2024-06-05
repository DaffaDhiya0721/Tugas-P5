<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-normal">{{ __('Destinasi') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'Destinasi') class="active " @endif>
                <a href="{{ route('destinasi.index') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Destinasi') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'Kategori') class="active " @endif>
                <a href="{{ route('kategori.index') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Kategori') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'Lokasi') class="active " @endif>
                <a href="{{ route('lokasi.index') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Lokasi') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
