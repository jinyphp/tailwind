@php
    $attributes['class'] = "inline-block rounded-full";

    // 버튼 사이즈
    if(isset($attributes['size'])) {
        switch($attributes['size']) {
            case 'xs':
                $attributes['class'] .= " w-8 h-8";
                break;
            case 'small':
            case 'sm':
                $attributes['class'] .= " w-10 h-10";
                break;
            case 'large':
            case 'lg':
                $attributes['class'] .= " w-16 h-16";
                break;
            case 'xlarge':
            case 'xl':
                $attributes['class'] .= " w-20 h-20";
                break;
            default:
                $attributes['class'] .= " w-12 h-12";
        }
    } else {
        // 기본값
        $attributes['class'] .= " w-12 h-12";
    }
@endphp

<img {{$attributes}}/>

