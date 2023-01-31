<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Eligible extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Application\Eligible::insert([
            [
                'country' => 'Australia',
                'eligibility' => "Eligibility: <br/>
Be enrolled as a current university student or have graduated in less than 12 months.
Your major must be related to the fields of offered positions
Be between 18 to 24 years old.
Be fluent in English.
Have sufficient funds for self-sustenance in addition to stipend and wage.
Be open-minded, willing to learn new things and meet new people.
Be willing to work in the host organizations as a team player.
 <br/> <br/>
Positions: <br/>
Business Administration  <br/>
Hospitality <br/>
Computer/Information Technology <br/>
Marketing <br/> <br/>

Remuneration: <br/>
Stipend as applicable <br/> <br/>

Deadlines to apply / Starting date: <br/>
Please, check your relevant details at the \"Duration\" stage of your application
 <br/> <br/>
Fees: <br/>
Varies with program duration and program type. Fees start from AU$5000+ <br/>
Specific fee details will be provided after complete review of application profile
 <br/> <br/>
Covered: <br/>
Guaranteed internship placement in your field of choice. <br/>
Accommodation arrangement; half or full board <br/>
Welcome package including SIM Card, Bus Card, maps and useful information. <br/>
City orientation and immigration registration at arrival. <br/>
Weekend & networking activities. <br/>
Full support during the entire internship. <br/>
Insurance for the duration of stay. <br/>
Bank accounts setup <br/>
Pre-departure orientation. <br/>
Support and arrival orientation. <br/>
Visa Application support. <br/>
Career development and professional evaluation. <br/>
 <br/> <br/>
Not Covered: <br/>
Return ticket to Australia (Full fare payments must be made within 48 hours of visa issuance).
Housing deposit, rent or incidentals <br/>
",
                'rate' => '5000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'country' => 'Denmark',
                'eligibility' => "Eligibility:<br/>
Be enrolled as a current university student and must return to continue study after the program
Your major must be in Agriculture; Animal Science, Horticulture or Veterinary Science<br/>
Be between 18 to 28 years old.<br/>
Be fluent in English; a Cambridge or IELTS Score is required<br/>
Be open-minded, willing to learn new things and meet new people.<br/>
Be willing to work as a team player and have respect for the host culture
<br/><br/>
Positions:<br/>
Dairy Farming<br/>
Pig Farming<br/>
Horticulture (on-demand only)<br/>
Veterinary Science<br/>
<br/><br/>
Remuneration:<br/>
Stipend as applicable
<br/><br/>
Deadlines to apply / Starting date:<br/>
Please, check your relevant details at the \"Duration\" stage of your application
<br/><br/>
Fees:<br/>
Duration of the program must be 12 months or more. Fees start from $2000
<br/><br/>
Covered:<br/>
Guaranteed internship placement in your field of specialization.<br/>
Accommodation arrangement<br/>
Welcome package and networking activities.<br/>
Full support during the entire internship.<br/>
Insurance for the duration of stay.<br/>
Pre-departure orientation.<br/>
Support and arrival orientation.<br/>
Visa Application support.<br/>
Career development and professional evaluation.<br/><br/>

Not Covered<br/>
Return ticket to Denmark<br/>
Housing deposit, rent or incidentals<br/>",
                'rate' => '1410.38',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'country' => 'Sweden',
                'eligibility' => "Eligibility:<br/>
INTERN (bold font): Be a university graduate within 12 months of intended program start date.<br/>
TRAINEE (bold font): Be enrolled as a current university student.<br/>
Your major must be in Agriculture; Animal Science, Horticulture or Veterinary Science<br/>
Be between 18 to 28 years old.<br/>
Be fluent in English; a Cambridge or IELTS Score is required<br/>
Be open-minded, willing to learn new things and meet new people.<br/>
Be available for program duration of 6 or 12 months<br/>
<br/>
Positions:<br/>
Crop Production<br/>
Dairy Farming<br/>
Pig Farming<br/>
Horticulture<br/>
Veterinary Science<br/>
<br/>
Remuneration:<br/>
Stipend as applicable<br/>
<br/>
Deadlines to apply / Starting date:<br/>
Please, check your relevant details at the \"Duration\" stage of your application<br/>
<br/>
Fees:<br/>
Program fees start from $2000<br/>
<br/>
Covered:<br/>
Guaranteed internship placement in your field of specialization.<br/>
Accommodation arrangement<br/>
Welcome package and networking activities.<br/>
Full support during the entire internship.<br/>
Insurance for the duration of stay.<br/>
Pre-departure orientation.<br/>
Support and arrival orientation.<br/>
Visa Application support.<br/>
Career development and professional evaluation.<br/>
<br/>
Not Covered:<br/>
Return ticket to Sweden<br/>
Housing deposit, rent or incidentals<br/>",
                'rate' => '1250',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'country' => 'USA',
                'eligibility' => "Eligibility:<br/>
INTERN (bold font): Be enrolled as a current university student or have graduated in less than 12 months.<br/>
TRAINEE (bold font): Be a university graduate with at least 12 months post-study cognate experience.<br/>
Your major and/or degree must be in the field of specialization and offered position.<br/>
Be between 18 to 28 years old.<br/>
Be fluent in English.<br/>
Have sufficient funds for self-sustenance in addition to the stipend (if applicable).<br/>
Be open-minded, willing to learn new things and meet new people.<br/>
<br/><br/>
Positions:<br/>
Agriculture<br/>
Business<br/>
Engineering<br/>
Information Technology<br/>
Science<br/>
<br/>
Remuneration:<br/>
Provision of stipend is at the discretion of host organization<br/>
Positions in Hospitality are usually paid<br/>
<br/><br/>
Deadlines to apply / Starting date:<br/>
Please, check your relevant details at the \"Duration\" stage of your application<br/>
<br/>
Fees:<br/>
Varies with program duration and program type. Fees start from $3000<br/>
Specific fee details will be provided after complete review of application profile<br/>
<br/>
Covered:<br/>
Guaranteed internship placement in your field of choice.<br/>
Accommodation arrangement<br/>
Welcome package including SIM Card, Bus Card, maps and useful information.<br/>
City orientation and immigration registration at arrival.<br/>
Weekend & networking activities.<br/>
Full support during the entire internship.<br/>
Insurance for the duration of stay.<br/>
Pre-departure orientation.<br/>
Support and arrival orientation.<br/>
Visa Application support.<br/>
Career development and professional evaluation.<br/>
Academic Credits/Report; if required by institution <br/>
Certificate of Participation <br/>
Letter of Recommendation from Employer/Host Organization <br/>

Not Covered:
Return ticket to the USA (Full fare payments must be made within 48 hours of visa issuance).
Housing deposit, rent or incidentals",
                'rate' => '3000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'country' => 'H1B',
                'eligibility' => "Eligibility:<br/>
Be a university graduate with a bachelors degree in the required field of specialization<br/>
Be between 18 to 32 years old.<br/>
Be fluent in English.<br/>
Be open-minded and willing to work with special need patients<br/>
<br/>
Fields of Specialization:<br/>
Psychology<br/>
Social Work<br/>
Sociology<br/>
<br/>
Remuneration:<br/>
Salary and Wage will be based on current salary scale in the field and industry<br/>
<br/>
Fees:<br/>
A placement fee of $2500 applies and is payable after interview with and selection by the employer.<br/>
<br/>
Covered:<br/>
Job position with full benefits and complete immigration petition.<br/>
Pre-departure orientation.<br/>
Visa Application support.<br/>
<br/>
Not Covered:<br/>
Return ticket to the USA <br/>
Criminal background check/Police clearance (if required)<br/>",
                'rate' => '1000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'country' => 'SA',
                'eligibility' => "Eligibility:<br/>
Be enrolled as a current university student or have graduated in less than 12 months.<br/>
Your major must be related Veterinary Medicine<br/>
Be between 18 to 28 years old.<br/>
Be fluent in English.<br/>
Have sufficient funds for self-sustenance in addition to stipend<br/>
Be open-minded, willing to learn new things and meet new people.<br/>
Be willing to work as a team player and a veterinary practitioner.<br/>
<br/>
<br/>
Positions:<br/>
Veterinary Medicine<br/>
<br/>
Remuneration:<br/>
Stipend as applicable<br/>
<br/>
Deadlines to apply / Starting date:<br/>
Please, check your relevant details at the \"Duration\" stage of your application<br/>
<br/>
Fees:<br/>
Varies with program duration and program type. Fees start from $1250<br/>
Specific fee details will be provided after complete review of application profile<br/>
<br/>
Covered:<br/>
Guaranteed internship placement in your field of choice.<br/>
Accommodation arrangement<br/>
Welcome package including SIM Card, Bus Card, maps and useful information.<br/>
City orientation and immigration registration at arrival.<br/>
Weekend & networking activities.<br/>
Full support during the entire internship.<br/>
Insurance for the duration of stay.<br/>
Pre-departure orientation.<br/>
Support and arrival orientation.<br/>
Visa Application support.<br/>
Career development and professional evaluation.<br/>
<br/>
Not Covered:<br/>
Return ticket to South Africa (Full fare payments must be made within 48 hours of visa issuance).<br/>
Housing deposit, rent or incidentals<br/>",
                'rate' => '1000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
