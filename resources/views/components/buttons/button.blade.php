@php
    $attributes['class'] ="inline-flex justify-center items-center space-x-2 rounded border font-semibold focus:outline-none";

    // 버튼 사이즈
    if(isset($attributes['size'])) {
        switch($attributes['size']) {
            case 'sm':
                $attributes['class'] .= " px-2 py-1 leading-5 text-sm";
                break;
            case 'small':
            case 'sm':
                $attributes['class'] .= " px-3 py-2 leading-5 text-sm";
                break;
            case 'large':
            case 'lg':
                $attributes['class'] .= " px-3 py-2 leading-6";
                break;
            case 'xlarge':
            case 'xl':
                $attributes['class'] .= " px-6 py-4 leading-6";
                break;
            default:
                $attributes['class'] .= " px-3 py-2 leading-6";
        }
    } else {
        // 기본값
        $attributes['class'] .= " px-3 py-2 leading-6";
    }

    // 버튼 컬러
    if(isset($attributes['color'])) {
        $color = __ui_color_name($attributes['color']);
    } else {
        $color = "indigo";
    }

    // 기본값
    $attributes['class'] .= " border-".$color."-700 bg-".$color."-700 text-white";
    $attributes['class'] .= " hover:text-white hover:bg-".$color."-800 hover:border-".$color."-800";
    $attributes['class'] .= " focus:ring focus:ring-".$color."-500 focus:ring-opacity-50 ";
    $attributes['class'] .= " active:bg-".$color."-700 active:border-".$color."-700";

@endphp

<button type="button" {{$attributes}}>
    {{$slot}}
</button>
