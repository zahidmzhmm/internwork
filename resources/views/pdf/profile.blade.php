<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        .page-break {
            page-break-after: always;
        }

        *, p, body {
            font-family: sans-serif;
        }

        .header thead td {
            width: 50%;
        }

        .main-content tbody th {
            width: 40%;
        }

        .main-content tbody td {
            width: 60%;
        }

        .table td, .table th {
            padding: .3rem !important;
        }

        .table-sm td, .table-sm th {
            padding: .3rem !important;
        }

        .text-small {
            font-size: 12px;
        }
    </style>
    <style>
        {!! include public_path('assets/css/libraries.css') !!}
    </style>
</head>
<body>
<table class="header" style="">
    <thead>
    <tr>
        <td style="width: 39rem">
            @if($profile->picture!==null)
                <img src="{{ public_path($profile->picture) }}"
                     alt="Photo">
            @endif
        </td>
        <td class="text-right">
            <img class="ml-auto" style="width: 4.7rem" src="{{ public_path('assets\images\logo\logo-dark.png') }}"
                 alt="Logo">
        </td>
    </tr>
    </thead>
</table>

<table class="main-content table table-bordered pt-5 text-small">
    <tbody>
    <tr>
        <th class="text-left">First Name:</th>
        <td class="text-left">{{ $profile->fname }}</td>
        <th class="text-left">Last Name:</th>
        <td class="text-left">{{ $profile->lname }}</td>
    </tr>
    <tr>
        <th class="text-left">Email:</th>
        <td class="text-left">{{ $user->email }}</td>
        <th class="text-left pt-2">Mobile:</th>
        <td class="text-left pt-2">{{ $profile->mobile }}</td>
    </tr>
    <tr>
        <th class="text-left pt-2">City:</th>
        <td class="text-left pt-2">{{ $profile->city }}</td>
        <th class="text-left pt-2">State:</th>
        <td class="text-left pt-2">{{ $profile->state }}</td>
    </tr>
    <tr>
        <th class="text-left pt-2">Postcode:</th>
        <td class="text-left pt-2">{{ $profile->postcode }}</td>
        <th class="text-left pt-2">Address:</th>
        <td class="text-left pt-2">{{ $profile->address }}</td>
    </tr>
    <tr>
        <th class="text-left pt-2">Study Level:</th>
        <td class="text-left pt-2">{{ $profile->study_level }}</td>
        <th class="text-left pt-2">Course:</th>
        <td class="text-left pt-2">{{ $profile->course }}</td>
    </tr>
    <tr>
        <th class="text-left pt-2">Matriculation:</th>
        <td class="text-left pt-2">{{ $profile->matriculation }}</td>
        <th class="text-left pt-2">Institute:</th>
        <td class="text-left pt-2">{{ $profile->institute }}</td>
    </tr>
    <tr>
        <th class="text-left pt-2">Internship:</th>
        <td class="text-left pt-2">{{ $profile->internship==1?"Yes":"No" }}</td>
        <th class="text-left pt-2">Program:</th>
        <td class="text-left pt-2">{{ $profile->program }}</td>
    </tr>
    <tr>
        <th class="text-left pt-2">Post-Secondary Study:</th>
        <td class="text-left pt-2">{{ $profile->pss_year }}</td>
        <th class="text-left pt-2"></th>
        <td class="text-left pt-2"></td>
    </tr>
    </tbody>
</table>

</body>
</html>
