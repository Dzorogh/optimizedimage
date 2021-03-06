<picture class="{{ $picture_classes ?? '' }}">
    <source
            @if ($lazy)
            srcset="data:image/svg+xml;base64,{{ base64_encode("<svg xmlns='http://www.w3.org/2000/svg' width='{$width}' height='{$height}'></svg>") }} 400w"
    @endif

    {{ $lazy ? 'data-srcset' : 'srcset' }}="

                {{ \Dzorogh\OptimizedImage\Picture::makeUrl($src, [
                    'w' => $width,
                    'h' => $height,
                    'name' => $name ?? null,
                    'fit' => $fit ?? null,
                    'fm' => 'webp',
                    'dpr' => 0.7
                ]) }} 400w,

                {{ \Dzorogh\OptimizedImage\Picture::makeUrl($src, [
                    'w' => $width,
                    'h' => $height,
                    'name' => $name ?? null,
                    'fit' => $fit ?? null,
                    'fm' => 'webp',
                    'dpr' => 0.8
                ]) }} 800w,

                {{ \Dzorogh\OptimizedImage\Picture::makeUrl($src, [
                    'w' => $width,
                    'h' => $height,
                    'name' => $name ?? null,
                    'fit' => $fit ?? null,
                    'fm' => 'webp',
                    'dpr' => 0.9
                ]) }} 1400w,

                {{ \Dzorogh\OptimizedImage\Picture::makeUrl($src, [
                    'w' => $width,
                    'h' => $height,
                    'name' => $name ?? null,
                    'fit' => $fit ?? null,
                    'fm' => 'webp',
                    'dpr' => 1
                ]) }} 1800w"
    sizes="90vw"

    type="image/webp">

    <source
            @if ($lazy)
            srcset="data:image/svg+xml;base64,{{ base64_encode("<svg xmlns='http://www.w3.org/2000/svg' width='{$width}' height='{$height}'></svg>") }} 400w"
    @endif

    {{ $lazy ? 'data-srcset' : 'srcset' }}="

                {{ \Dzorogh\OptimizedImage\Picture::makeUrl($src, [
                    'w' => $width,
                    'h' => $height,
                    'name' => $name ?? null,
                    'fit' => $fit ?? null,
                    'fm' => $type ?? 'jpg',
                    'dpr' => 0.7
                ]) }} 400w,

                {{ \Dzorogh\OptimizedImage\Picture::makeUrl($src, [
                    'w' => $width,
                    'h' => $height,
                    'name' => $name ?? null,
                    'fit' => $fit ?? null,
                    'fm' => $type ?? 'jpg',
                    'dpr' => 0.8
                ]) }} 800w,

                {{ \Dzorogh\OptimizedImage\Picture::makeUrl($src, [
                    'w' => $width,
                    'h' => $height,
                    'name' => $name ?? null,
                    'fit' => $fit ?? null,
                    'fm' => $type ?? 'jpg',
                    'dpr' => 0.9
                ]) }} 1400w,

                {{ \Dzorogh\OptimizedImage\Picture::makeUrl($src, [
                    'w' => $width,
                    'h' => $height,
                    'name' => $name ?? null,
                    'fit' => $fit ?? null,
                    'fm' => $type ?? 'jpg',
                    'dpr' => 1
                ]) }} 1800w"

    sizes="90vw"

    type="image/{{ (!$type || $type === 'jpg') ? 'jpeg' : $type }}">

    <img
            @if ($lazy)
            src="data:image/svg+xml;base64,{{ base64_encode("<svg xmlns='http://www.w3.org/2000/svg' width='{$width}' height='{$height}'></svg>") }}"
    @endif

    {{ $lazy ? 'data-src' : 'src' }}="{{
                \Dzorogh\OptimizedImage\Picture::makeUrl($src, [
                    'w' => $width ?? null,
                    'h' => $height ?? null,
                    'name' => $name ?? null,
                    'fit' => $fit ?? null
                 ])
            }}"

    width="{{ $width ?? null}}"
    height="{{ $height ?? null}}"

    @if ($alt)
        alt="{{ $alt }}"
    @endif

    @if ($title)
        title="{{ $title }}"
    @endif

    class="{{ $img_classes ?? null }} {{ $lazy ? 'lazy' : '' }}">
</picture>