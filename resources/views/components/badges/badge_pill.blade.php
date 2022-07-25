@php
    $attributes['class'] = "font-semibold inline-flex px-2 py-1 leading-4 text-xs";
    $attributes['class'] .= " rounded-full";

    // 버튼 컬러
    if(isset($attributes['color'])) {
        $color = __ui_color_name($attributes['color']);
    } else {
        $color = "indigo";
    }

    $attributes['class'] .= " text-".$color."-700 bg-".$color."-200";
@endphp
<div {{$attributes}}>
    {{$slot}}
</div>
