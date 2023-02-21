Dear Administrator,
<br><br>
{{ $profile->fname.' '.$profile->lname }} has uploaded {{ $uploaded }} files as listed below:
@foreach($uploads as $item=>$data)
    <br><br>
    @if($data->uploaded==2)
        <a href="{{ $data->uploaded==2?url($data->path):'#' }}">{{ $data->title }}</a>
    @else
        {{ $data->title }}
    @endif
@endforeach <br> <br>
Thank you ! <br>
_______________________
