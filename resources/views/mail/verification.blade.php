Dear {{ $data['profile']->fname.' '.$data['profile']->lname }},
<br><br>
Click the link below and enter verification code to activate your account: <br>
<a href="{{ route('verification.sent') }}" target="_blank">Click here to Activate</a>
<br><br>
Verification Code: {{ $data['user']->token }}
<br><br>
Regards,<br>
{{ env('APP_NAME') }}<br>
