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

        table {
            width: 100%;
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

        .text-right {
            text-align: right;
        }

        .text-left {
            text-align: left;
        }

        .text-center {
            text-align: center;
        }

        .text-small {
            font-size: 12px;
        }
    </style>
    <style>
        .m-0 {
            margin: 0 !important
        }

        .mt-0, .my-0 {
            margin-top: 0 !important
        }

        .mr-0, .mx-0 {
            margin-right: 0 !important
        }

        .mb-0, .my-0 {
            margin-bottom: 0 !important
        }

        .ml-0, .mx-0 {
            margin-left: 0 !important
        }

        .m-1 {
            margin: .25rem !important
        }

        .mt-1, .my-1 {
            margin-top: .25rem !important
        }

        .mr-1, .mx-1 {
            margin-right: .25rem !important
        }

        .mb-1, .my-1 {
            margin-bottom: .25rem !important
        }

        .ml-1, .mx-1 {
            margin-left: .25rem !important
        }

        .m-2 {
            margin: .5rem !important
        }

        .mt-2, .my-2 {
            margin-top: .5rem !important
        }

        .mr-2, .mx-2 {
            margin-right: .5rem !important
        }

        .mb-2, .my-2 {
            margin-bottom: .5rem !important
        }

        .ml-2, .mx-2 {
            margin-left: .5rem !important
        }

        .m-3 {
            margin: 1rem !important
        }

        .mt-3, .my-3 {
            margin-top: 1rem !important
        }

        .mr-3, .mx-3 {
            margin-right: 1rem !important
        }

        .mb-3, .my-3 {
            margin-bottom: 1rem !important
        }

        .ml-3, .mx-3 {
            margin-left: 1rem !important
        }

        .m-4 {
            margin: 1.5rem !important
        }

        .mt-4, .my-4 {
            margin-top: 1.5rem !important
        }

        .mr-4, .mx-4 {
            margin-right: 1.5rem !important
        }

        .mb-4, .my-4 {
            margin-bottom: 1.5rem !important
        }

        .ml-4, .mx-4 {
            margin-left: 1.5rem !important
        }

        .m-5 {
            margin: 3rem !important
        }

        .mt-5, .my-5 {
            margin-top: 3rem !important
        }

        .mr-5, .mx-5 {
            margin-right: 3rem !important
        }

        .mb-5, .my-5 {
            margin-bottom: 3rem !important
        }

        .ml-5, .mx-5 {
            margin-left: 3rem !important
        }

        .p-0 {
            padding: 0 !important
        }

        .pt-0, .py-0 {
            padding-top: 0 !important
        }

        .pr-0, .px-0 {
            padding-right: 0 !important
        }

        .pb-0, .py-0 {
            padding-bottom: 0 !important
        }

        .pl-0, .px-0 {
            padding-left: 0 !important
        }

        .p-1 {
            padding: .25rem !important
        }

        .pt-1, .py-1 {
            padding-top: .25rem !important
        }

        .pr-1, .px-1 {
            padding-right: .25rem !important
        }

        .pb-1, .py-1 {
            padding-bottom: .25rem !important
        }

        .pl-1, .px-1 {
            padding-left: .25rem !important
        }

        .p-2 {
            padding: .5rem !important
        }

        .pt-2, .py-2 {
            padding-top: .5rem !important
        }

        .pr-2, .px-2 {
            padding-right: .5rem !important
        }

        .pb-2, .py-2 {
            padding-bottom: .5rem !important
        }

        .pl-2, .px-2 {
            padding-left: .5rem !important
        }

        .p-3 {
            padding: 1rem !important
        }

        .pt-3, .py-3 {
            padding-top: 1rem !important
        }

        .pr-3, .px-3 {
            padding-right: 1rem !important
        }

        .pb-3, .py-3 {
            padding-bottom: 1rem !important
        }

        .pl-3, .px-3 {
            padding-left: 1rem !important
        }

        .p-4 {
            padding: 1.5rem !important
        }

        .pt-4, .py-4 {
            padding-top: 1.5rem !important
        }

        .pr-4, .px-4 {
            padding-right: 1.5rem !important
        }

        .pb-4, .py-4 {
            padding-bottom: 1.5rem !important
        }

        .pl-4, .px-4 {
            padding-left: 1.5rem !important
        }

        .p-5 {
            padding: 3rem !important
        }

        .pt-5, .py-5 {
            padding-top: 3rem !important
        }

        .pr-5, .px-5 {
            padding-right: 3rem !important
        }

        .pb-5, .py-5 {
            padding-bottom: 3rem !important
        }

        .pl-5, .px-5 {
            padding-left: 3rem !important
        }
    </style>
</head>
<body>
<table class="header">
    <thead>
    <tr>
        <td>
            @if($profile->picture!==null)
                <img src="{{ public_path($profile->picture) }}"
                     alt="Photo">
            @endif
        </td>
        <td class="text-right">
            <img src="{{ public_path('assets\images\logo\logo-dark.png') }}" alt="Logo">
        </td>
    </tr>
    </thead>
</table>

<table class="main-content pt-5 text-small">
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
        <td class="text-left pt-2">{{ $profile->internship }}</td>
        <th class="text-left pt-2">Program:</th>
        <td class="text-left pt-2">{{ $profile->program }}</td>
    </tr>
    <tr>
        <th class="text-left pt-2">Post-Secondary Study:</th>
        <td class="text-left pt-2">{{ $profile->internship }}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
