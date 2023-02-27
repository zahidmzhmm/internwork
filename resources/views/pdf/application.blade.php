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
                <img src="{{ public_path($profile->picture) }}" style="width: auto;height: 6.3rem"
                     alt="Photo">
            @endif
        </td>
        <td class="text-right">
            <img class="ml-auto" style="width: 4.7rem" src="{{ public_path('assets/images/logo/logo-dark.png') }}"
                 alt="Logo">
        </td>
    </tr>
    </thead>
</table>

<p class="my-0 pt-5 text-small">
    Profile Details
</p>
<table class="main-content table table-bordered pt-2 text-small">
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
        <th class="text-left pt-2">Internship\SIWES Letter:</th>
        <td class="text-left pt-2">{{ $profile->internship==1?"Yes":"No" }}</td>
        <th class="text-left pt-2">Program:</th>
        <td class="text-left pt-2">{{ $profile->program }}</td>
    </tr>
    <tr>
        <th class="text-left pt-2">Post-Secondary Study:</th>
        <td class="text-left pt-2">{{ $profile->pss_year }}</td>
        <th class="text-left pt-2">Social Media:</th>
        <td class="text-left pt-2">{{ $profile->social }}</td>
    </tr>
    <tr>
        <th class="text-left pt-2">{{ $profile->social }} Link</th>
        <td class="text-left pt-2">{{ $profile->social_val }}</td>
        <th class="text-left pt-2">LinkedIn</th>
        <td class="text-left pt-2">{{ $profile->linkedin }}</td>
    </tr>
    <tr>
        <th class="text-left pt-2">National Identity Number</th>
        <td class="text-left pt-2">{{ $profile->nid }}</td>
        <th class="text-left pt-2">WhatsApp Number</th>
        <td class="text-left pt-2">{{ $profile->w_number }}</td>
    </tr>
    </tbody>
</table>
<table class="main-content pt-2 text-small table table-bordered">
    <tbody>
    <tr>
        <th class="text-left pt-2">Reference</th>
        <td class="text-left pt-2">{{ $application->reference }}</td>
        <th class="text-left pt-2">Destination</th>
        <td class="text-left pt-2">{{ $application->destination }}</td>
    </tr>
    <tr>
        <th class="text-left pt-2">Program</th>
        <td class="text-left pt-2">{{ $application->program }}</td>
        <th class="text-left pt-2">Duration</th>
        <td class="text-left pt-2">{{ $application->duration }} months</td>
    </tr>
    <tr>
        <th class="text-left pt-2">US Visa</th>
        <td class="text-left pt-2">{{ $application->us_visa==1?"Yes":"No" }}</td>
        <th class="text-left pt-2">Travel Experience</th>
        <td class="text-left pt-2">{{ $application->travel_exp==1?"Yes":"No" }}</td>
    </tr>
    <tr>
        <th class="text-left pt-2">Applicable Entry</th>
        <td class="text-left pt-2">{{ $application->applicable_name }}</td>
        <th class="text-left pt-2">Applicable Start</th>
        <td class="text-left pt-2">{{ $application->applicable_start }}</td>
    </tr>
    <tr>
        <th class="text-left pt-2">Applicable End</th>
        <td class="text-left pt-2">{{ $application->applicable_end }}</td>
        <th class="text-left pt-2">Applicable Deadline</th>
        <td class="text-left pt-2">{{ $application->applicable_deadline }}</td>
    </tr>
    </tbody>
</table>

@if($father !== "" && $mother!=="")
    <hr style="height: 1px;background:#e2e3e5;border: none" class="my-2">
    <p class="my-0 text-small">
        Parental Information
    </p>
    @if($father)
        <table class="main-content table table-bordered pt-2 text-small">
            <tbody>
            <tr>
                <th class="text-left pt-2">Full names of Father</th>
                <td class="text-left pt-2">{{ $father->name }}</td>
                <th class="text-left pt-2">Home Address of Father</th>
                <td class="text-left pt-2">{{ $father->home_address }}</td>
            </tr>
            <tr>
                <th class="text-left pt-2">Work Address of Father</th>
                <td class="text-left pt-2">{{ $father->work_address }}</td>
                <th class="text-left pt-2">Email Address</th>
                <td class="text-left pt-2">{{ $father->email }}</td>
            </tr>
            <tr>
                <th class="text-left pt-2">Phone Number</th>
                <td class="text-left pt-2">{{ $father->phone }}</td>
                <th class="text-left pt-2">National Identity Number</th>
                <td class="text-left pt-2">{{ $father->nid }}</td>
            </tr>
            </tbody>
        </table>
    @endif
    @if($mother)
        <table class="main-content table table-bordered pt-2 text-small">
            <tbody>
            <tr>
                <th class="text-left pt-2">Full names of Mother</th>
                <td class="text-left pt-2">{{ $mother->name }}</td>
                <th class="text-left pt-2">Home Address of Mother</th>
                <td class="text-left pt-2">{{ $mother->home_address }}</td>
            </tr>
            <tr>
                <th class="text-left pt-2">Work Address of Mother</th>
                <td class="text-left pt-2">{{ $mother->work_address }}</td>
                <th class="text-left pt-2">Email Address</th>
                <td class="text-left pt-2">{{ $mother->email }}</td>
            </tr>
            <tr>
                <th class="text-left pt-2">Phone Number</th>
                <td class="text-left pt-2">{{ $mother->phone }}</td>
                <th class="text-left pt-2">National Identity Number</th>
                <td class="text-left pt-2">{{ $mother->nid }}</td>
            </tr>
            </tbody>
        </table>
    @endif
@endif
@if($sponsor)
    <hr style="height: 1px;background:#e2e3e5;border: none" class="my-2">
    <p class="my-0 text-small">
        Sponsor
    </p>
    <table class="main-content table table-bordered pt-2 text-small">
        <tbody>
        <tr>
            <th class="text-left pt-2">Full names of Sponsor</th>
            <td class="text-left pt-2">{{ $sponsor->name }}</td>
            <th class="text-left pt-2">Contact Address</th>
            <td class="text-left pt-2">{{ $sponsor->contact }}</td>
        </tr>
        <tr>
            <th class="text-left pt-2">Email Address</th>
            <td class="text-left pt-2">{{ $sponsor->email }}</td>
            <th class="text-left pt-2">Phone Number</th>
            <td class="text-left pt-2">{{ $sponsor->phone }}</td>
        </tr>
        <tr>
            <th class="text-left pt-2">Relationship to you</th>
            <td class="text-left pt-2">{{ $sponsor->relation }}</td>
            <th class="text-left pt-2">National Identity Number</th>
            <td class="text-left pt-2">{{ $sponsor->nid }}</td>
        </tr>
        <tr>
            <th class="text-left pt-2">How many dependents does your sponsor have</th>
            <td class="text-left pt-2">{{ $sponsor->dependents }}</td>
            <th class="text-left pt-2">Sponsor’s occupation</th>
            <td class="text-left pt-2">{{ $sponsor->occupation }}</td>
        </tr>
        </tbody>
    </table>
@endif
@if($employ!==null)
    <hr style="height: 1px;background:#e2e3e5;border: none" class="my-2">
    <p class="my-0 text-small">
        Self Employ Lived Before
    </p>
    <table class="main-content pt-2 text-small table table-bordered">
        <tbody>
        <tr>
            <th class="text-left pt-2">Name</th>
            <td class="text-left pt-2">{{ $employ->name }}</td>
            <th class="text-left pt-2">Location</th>
            <td class="text-left pt-2">{{ $employ->location }}</td>
        </tr>
        <tr>
            <th class="text-left pt-2">Position</th>
            <td class="text-left pt-2">{{ $employ->position }}</td>
            <th class="text-left pt-2"></th>
            <td class="text-left pt-2"></td>
        </tr>
        <tr>
            <th class="text-left pt-2">Start Date</th>
            <td class="text-left pt-2">{{ $employ->start }}</td>
            <th class="text-left pt-2">End Date</th>
            <td class="text-left pt-2">{{ $employ->end }}</td>
        </tr>
        </tbody>
    </table>
@endif
@if($experiences!==null)
    <hr style="height: 1px;background:#e2e3e5;border: none" class="my-2">
    <p class="my-0 text-small">
        Work Experience
    </p>
    <table class="main-content pt-2 text-small table table-bordered">
        <tbody>
        <tr>
            <th class="text-left pt-2">Name</th>
            <td class="text-left pt-2">{{ $experiences->name }}</td>
            <th class="text-left pt-2">Location</th>
            <td class="text-left pt-2">{{ $experiences->location }}</td>
        </tr>
        <tr>
            <th class="text-left pt-2">Position</th>
            <td class="text-left pt-2">{{ $experiences->position }}</td>
            <th class="text-left pt-2">Description</th>
            <td class="text-left pt-2">{{ $experiences->description }}</td>
        </tr>
        <tr>
            <th class="text-left pt-2">Start Date</th>
            <td class="text-left pt-2">{{ $experiences->start }}</td>
            <th class="text-left pt-2">End Date</th>
            <td class="text-left pt-2">{{ $experiences->end }}</td>
        </tr>
        </tbody>
    </table>
@endif
@if($studies!==null)
    <hr style="height: 1px;background:#e2e3e5;border: none" class="my-2">
    <p class="my-0 text-small">
        Studied Before
    </p>
    <table class="main-content pt-2 text-small table table-bordered">
        <tbody>
        <tr>
            <th class="text-left pt-2">Institute</th>
            <td class="text-left pt-2">{{ $studies->institute }}</td>
            <th class="text-left pt-2">Location</th>
            <td class="text-left pt-2">{{ $studies->location }}</td>
        </tr>
        <tr>
            <th class="text-left pt-2">Level</th>
            <td class="text-left pt-2">{{ $studies->level }}</td>
            <th class="text-left pt-2">Description</th>
            <td class="text-left pt-2">{{ $studies->description }}</td>
        </tr>
        <tr>
            <th class="text-left pt-2">Start Date</th>
            <td class="text-left pt-2">{{ $studies->start }}</td>
            <th class="text-left pt-2">End Date</th>
            <td class="text-left pt-2">{{ $studies->end }}</td>
        </tr>
        </tbody>
    </table>
@endif
@if($travel!==null)
    <hr style="height: 1px;background:#e2e3e5;border: none" class="my-2">
    <p class="my-0 text-small">
        Previous travel experience
    </p>
    <table class="main-content pt-2 text-small table table-bordered">
        <tbody>
        <tr>
            <th class="text-left pt-2">Country</th>
            <td class="text-left pt-2">{{ $travel->country }}</td>
            <th class="text-left pt-2">Purpose</th>
            <td class="text-left pt-2">{{ $travel->purpose }}</td>
        </tr>
        <tr>
            <th class="text-left pt-2">Duration</th>
            <td class="text-left pt-2">{{ $travel->duration }}</td>
            <th class="text-left pt-2">Year</th>
            <td class="text-left pt-2">{{ $travel->year }}</td>
        </tr>
        </tbody>
    </table>
@endif
@if($visa!==null)
    <hr style="height: 1px;background:#e2e3e5;border: none" class="my-2">
    <p class="my-0 text-small">
        Previous US Visa
    </p>
    <table class="main-content pt-2 text-small table table-bordered">
        <tbody>
        <tr>
            <th class="text-left pt-2">Category</th>
            <td class="text-left pt-2">{{ $visa->category }}</td>
            <th class="text-left pt-2">Year</th>
            <td class="text-left pt-2">{{ $visa->year }}</td>
        </tr>
        <tr>
            <th class="text-left pt-2">Decision</th>
            <td class="text-left pt-2">{{ $visa->decision }}</td>
            <th class="text-left pt-2">Place</th>
            <td class="text-left pt-2">{{ $visa->place }}</td>
        </tr>
        </tbody>
    </table>
@endif
<table class="main-content pt-2 text-small table table-bordered">
    <tbody>
    <tr>
        <th class="text-left pt-2">Signature</th>
        <td class="text-left pt-2"></td>
        <th class="text-left pt-2">Parent Signature</th>
        <td class="text-left pt-2"></td>
    </tr>
    <tr>
        <th class="text-left pt-2">Date</th>
        <td class="text-left pt-2"></td>
        <th class="text-left pt-2">Date</th>
        <td class="text-left pt-2"></td>
    </tr>
    </tbody>
</table>
</body>
</html>
