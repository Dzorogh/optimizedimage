<picture class="{{ $picture_classes ?? '' }}">
    <source
            @if ($lazy)
                srcset="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 3 2'%3E%3C/svg%3E"
            @endif

            {{ $lazy ? 'data-srcset' : 'srcset' }}="

                {{ \Dzorogh\OptimizedImage\Picture::makeUrl($src, [
                    'w' => $width,
                    'h' => $height,
                    'name' => $name ?? null,
                    'fit' => $fit ?? null,
                    'fm' => 'webp',
                    'dpr' => 0.25
                ]) }} 400w,

                {{ \Dzorogh\OptimizedImage\Picture::makeUrl($src, [
                    'w' => $width,
                    'h' => $height,
                    'name' => $name ?? null,
                    'fit' => $fit ?? null,
                    'fm' => 'webp',
                    'dpr' => 0.5
                ]) }} 800w,

                {{ \Dzorogh\OptimizedImage\Picture::makeUrl($src, [
                    'w' => $width,
                    'h' => $height,
                    'name' => $name ?? null,
                    'fit' => $fit ?? null,
                    'fm' => 'webp',
                    'dpr' => 0.75
                ]) }} 1400w,

                {{ \Dzorogh\OptimizedImage\Picture::makeUrl($src, [
                    'w' => $width,
                    'h' => $height,
                    'name' => $name ?? null,
                    'fit' => $fit ?? null,
                    'fm' => 'webp',
                    'dpr' => 1
                ]) }} 1800w"

            type="image/webp">

    <source
            @if ($lazy)
                srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs= 1x"
            @endif

            {{ $lazy ? 'data-srcset' : 'srcset' }}="

                {{ \Dzorogh\OptimizedImage\Picture::makeUrl($src, [
                    'w' => $width,
                    'h' => $height,
                    'name' => $name ?? null,
                    'fit' => $fit ?? null,
                    'fm' => $type ?? 'jpg',
                    'dpr' => 0.25
                ]) }} 400w,

                {{ \Dzorogh\OptimizedImage\Picture::makeUrl($src, [
                    'w' => $width,
                    'h' => $height,
                    'name' => $name ?? null,
                    'fit' => $fit ?? null,
                    'fm' => $type ?? 'jpg',
                    'dpr' => 0.5
                ]) }} 800w,

                {{ \Dzorogh\OptimizedImage\Picture::makeUrl($src, [
                    'w' => $width,
                    'h' => $height,
                    'name' => $name ?? null,
                    'fit' => $fit ?? null,
                    'fm' => $type ?? 'jpg',
                    'dpr' => 0.75
                ]) }} 1400w,

                {{ \Dzorogh\OptimizedImage\Picture::makeUrl($src, [
                    'w' => $width,
                    'h' => $height,
                    'name' => $name ?? null,
                    'fit' => $fit ?? null,
                    'fm' => $type ?? 'jpg',
                    'dpr' => 1
                ]) }} 1800w"

            type="image/{{ (!$type || $type === 'jpg') ? 'jpeg' : $type }}">

    <img
            @if ($lazy)
                src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 {{ $width }} {{ $height }}'%3E%3C/svg%3E"
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

            class="{{ $img_classes ?? null }} {{ $lazy ? 'lazy' : '' }}">
</picture>