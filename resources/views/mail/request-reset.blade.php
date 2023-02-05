Dear {{ $data['profile']->fname.' '.$data['profile']->lname }},
<br><br>
Please click the link below and put the password reset code
<br><br>
<a href="{{ route('password.change') }}" target="_blank">Click here to go password change page</a>
<br><br>
Your forget password code is: {{ $data['user']->code }}
<br><br>
Regards,<br>
{{ env('APP_NAME') }}
