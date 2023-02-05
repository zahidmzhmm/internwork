import React from 'react';

const Step3 = ({setStep, category, country}) => {

    return (
        <>
            <div className="my-3">
                {country == "Australia" && category == "Internship"
                    ?
                    <>
                        <b>Eligibility:</b> <br/>
                        Be enrolled as a current university student or have graduated in less than 12 months.
                        Your major must be related to the fields of offered positions
                        Be between 18 to 24 years old.
                        Be fluent in English.
                        Have sufficient funds for self-sustenance in addition to stipend and wage.
                        Be open-minded, willing to learn new things and meet new people.
                        Be willing to work in the host organizations as a team player.
                        <br/> <br/>
                        <b>Positions:</b> <br/>
                        Business Administration <br/>
                        Hospitality <br/>
                        Computer/Information Technology <br/>
                        Marketing <br/> <br/>

                        <b>Remuneration:</b> <br/>
                        Stipend as applicable <br/> <br/>

                        <b>Deadlines to apply / Starting date:</b> <br/>
                        Please, check your relevant details at the "Duration" stage of your application
                        <br/> <br/>
                        <b>Fees:</b> <br/>
                        Varies with program duration and program type. Fees start from AU$5000+ <br/>
                        Specific fee details will be provided after complete review of application profile
                        <br/> <br/>
                        <b>Covered:</b> <br/>
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
                        <b>Not Covered:</b> <br/>
                        Return ticket to Australia (Full fare payments must be made within 48 hours of visa issuance).
                        Housing deposit, rent or incidentals <br/>

                    </>
                    : ""}
                {country == "Denmark" && category == "Internship"
                    ?
                    <>
                        <b>Eligibility:</b><br/>
                        Be enrolled as a current university student and must return to continue study after the program
                        Your major must be in Agriculture; Animal Science, Horticulture or Veterinary Science<br/>
                        Be between 18 to 28 years old.<br/>
                        Be fluent in English; a Cambridge or IELTS Score is required<br/>
                        Be open-minded, willing to learn new things and meet new people.<br/>
                        Be willing to work as a team player and have respect for the host culture
                        <br/><br/>
                        <b>Positions:</b><br/>
                        Dairy Farming<br/>
                        Pig Farming<br/>
                        Horticulture (on-demand only)<br/>
                        Veterinary Science<br/>
                        <br/><br/>
                        <b>Remuneration:</b><br/>
                        Stipend as applicable
                        <br/><br/>
                        <b>Deadlines to apply / Starting date:</b><br/>
                        Please, check your relevant details at the \"Duration\" stage of your application
                        <br/><br/>
                        <b>Fees:</b><br/>
                        Duration of the program must be 12 months or more. Fees start from $2000
                        <br/><br/>
                        <b>Covered:</b><br/>
                        Guaranteed internship placement in your field of specialization.<br/>
                        Accommodation arrangement<br/>
                        Welcome package and networking activities.<br/>
                        Full support during the entire internship.<br/>
                        Insurance for the duration of stay.<br/>
                        Pre-departure orientation.<br/>
                        Support and arrival orientation.<br/>
                        Visa Application support.<br/>
                        Career development and professional evaluation.<br/><br/>

                        <b>Not Covered:</b><br/>
                        Return ticket to Denmark<br/>
                        Housing deposit, rent or incidentals<br/>
                    </>
                    : ""}
                {country == "Sweden" && category == "Internship"
                    ?
                    <>
                        <b>Eligibility:</b><br/>
                        <b>INTERN:</b> Be a university graduate within 12 months of intended program start
                        date.<br/>
                        <b>TRAINEE:</b> Be enrolled as a current university student.<br/>
                        Your major must be in Agriculture; Animal Science, Horticulture or Veterinary Science<br/>
                        Be between 18 to 28 years old.<br/>
                        Be fluent in English; a Cambridge or IELTS Score is required<br/>
                        Be open-minded, willing to learn new things and meet new people.<br/>
                        Be available for program duration of 6 or 12 months<br/>
                        <br/>
                        <b>Positions:</b><br/>
                        Crop Production<br/>
                        Dairy Farming<br/>
                        Pig Farming<br/>
                        Horticulture<br/>
                        Veterinary Science<br/>
                        <br/>
                        <b>Remuneration:</b><br/>
                        Stipend as applicable<br/>
                        <br/>
                        <b>Deadlines to apply / Starting date:</b><br/>
                        Please, check your relevant details at the "Duration" stage of your application<br/>
                        <br/>
                        <b>Fees:</b><br/>
                        Program fees start from $2000<br/>
                        <br/>
                        <b>Covered:</b><br/>
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
                        <b>Not Covered:</b><br/>
                        Return ticket to Sweden<br/>
                        Housing deposit, rent or incidentals<br/>
                    </>
                    : ""}
                {country == "South Africa" && category == "Internship"
                    ?
                    <>
                        <b>Eligibility:</b><br/>
                        Be enrolled as a current university student or have graduated in less than 12 months.<br/>
                        Your major must be related Veterinary Medicine<br/>
                        Be between 18 to 28 years old.<br/>
                        Be fluent in English.<br/>
                        Have sufficient funds for self-sustenance in addition to stipend<br/>
                        Be open-minded, willing to learn new things and meet new people.<br/>
                        Be willing to work as a team player and a veterinary practitioner.<br/>
                        <br/>
                        <br/>
                        <b>Positions:</b><br/>
                        Veterinary Medicine<br/>
                        <br/>
                        <b>Remuneration:</b><br/>
                        Stipend as applicable<br/>
                        <br/>
                        <b>Deadlines to apply / Starting date:</b><br/>
                        Please, check your relevant details at the "Duration" stage of your application<br/>
                        <br/>
                        <b>Fees:</b><br/>
                        Varies with program duration and program type. Fees start from $1250<br/>
                        Specific fee details will be provided after complete review of application profile<br/>
                        <br/>
                        <b>Covered:</b><br/>
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
                        <b>Not Covered:</b><br/>
                        Return ticket to South Africa (Full fare payments must be made within 48 hours of visa
                        issuance).<br/>
                        Housing deposit, rent or incidentals<br/>
                    </>
                    : ""}
                {country == "United States" && category == "Internship"
                    ?
                    <>
                        <b>Eligibility:</b><br/>
                        <b>INTERN:</b> Be enrolled as a current university student or have graduated in less than
                        12
                        months.<br/>
                        <b>TRAINEE:</b> Be a university graduate with at least 12 months post-study cognate
                        experience.<br/>
                        Your major and/or degree must be in the field of specialization and offered position.<br/>
                        Be between 18 to 28 years old.<br/>
                        Be fluent in English.<br/>
                        Have sufficient funds for self-sustenance in addition to the stipend (if applicable).<br/>
                        Be open-minded, willing to learn new things and meet new people.<br/>
                        <br/><br/>
                        <b>Positions:</b><br/>
                        Agriculture<br/>
                        Business<br/>
                        Engineering<br/>
                        Information Technology<br/>
                        Science<br/>
                        <br/>
                        <b>Remuneration:</b><br/>
                        Provision of stipend is at the discretion of host organization<br/>
                        Positions in Hospitality are usually paid<br/>
                        <br/><br/>
                        <b>Deadlines to apply / Starting date:</b><br/>
                        Please, check your relevant details at the "Duration" stage of your application<br/>
                        <br/>
                        <b>Fees:</b><br/>
                        Varies with program duration and program type. Fees start from $3000<br/>
                        Specific fee details will be provided after complete review of application profile<br/>
                        <br/>
                        <b>Covered:</b><br/>
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
                        <br/> <br/>
                        <b>Not Covered:</b> <br/>
                        Return ticket to the USA (Full fare payments must be made within 48 hours of visa
                        issuance). <br/>
                        Housing deposit, rent or incidentals <br/>
                    </>
                    : ""}
                {country == "Sweden" && category == "Traineeship"
                    ?
                    <>
                        <b>Eligibility:</b><br/>
                        <b>INTERN:</b> Be a university graduate within 12 months of intended program start
                        date.<br/>
                        <b>TRAINEE:</b> Be enrolled as a current university student.<br/>
                        Your major must be in Agriculture; Animal Science, Horticulture or Veterinary Science<br/>
                        Be between 18 to 28 years old.<br/>
                        Be fluent in English; a Cambridge or IELTS Score is required<br/>
                        Be open-minded, willing to learn new things and meet new people.<br/>
                        Be available for program duration of 6 or 12 months<br/>
                        <br/>
                        <b>Positions:</b><br/>
                        Crop Production<br/>
                        Dairy Farming<br/>
                        Pig Farming<br/>
                        Horticulture<br/>
                        Veterinary Science<br/>
                        <br/>
                        <b>Remuneration:</b><br/>
                        Stipend as applicable<br/>
                        <br/>
                        <b>Deadlines to apply / Starting date:</b><br/>
                        Please, check your relevant details at the "Duration" stage of your application<br/>
                        <br/>
                        <b>Fees:</b><br/>
                        Program fees start from $2000<br/>
                        <br/>
                        <b>Covered:</b><br/>
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
                        <b>Not Covered:</b><br/>
                        Return ticket to Sweden<br/>
                        Housing deposit, rent or incidentals<br/>
                    </>
                    : ""}
                {country == "United States" && category == "Traineeship"
                    ?
                    <>
                        <b>Eligibility:</b><br/>
                        <b>INTERN:</b> Be enrolled as a current university student or have graduated in less than
                        12
                        months.<br/>
                        <b>TRAINEE:</b> Be a university graduate with at least 12 months post-study cognate
                        experience.<br/>
                        Your major and/or degree must be in the field of specialization and offered position.<br/>
                        Be between 18 to 28 years old.<br/>
                        Be fluent in English.<br/>
                        Have sufficient funds for self-sustenance in addition to the stipend (if applicable).<br/>
                        Be open-minded, willing to learn new things and meet new people.<br/>
                        <br/><br/>
                        <b>Positions:</b><br/>
                        Agriculture<br/>
                        Business<br/>
                        Engineering<br/>
                        Information Technology<br/>
                        Science<br/>
                        <br/>
                        <b>Remuneration:</b><br/>
                        Provision of stipend is at the discretion of host organization<br/>
                        Positions in Hospitality are usually paid<br/>
                        <br/><br/>
                        Deadlines to apply / Starting date:<br/>
                        Please, check your relevant details at the "Duration" stage of your application<br/>
                        <br/>
                        <b>Fees:</b><br/>
                        Varies with program duration and program type. Fees start from $3000<br/>
                        Specific fee details will be provided after complete review of application profile<br/>
                        <br/>
                        <b>Covered:</b><br/>
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
                        <br/> <br/>
                        <b>Not Covered: </b><br/>
                        Return ticket to the USA (Full fare payments must be made within 48 hours of visa
                        issuance). <br/>
                        Housing deposit, rent or incidentals <br/>
                    </>
                    : ""}
                {country == "United States" && category == "H1B"
                    ?
                    <>
                        <b>Eligibility:</b><br/>
                        Be a university graduate with a bachelors degree in the required field of specialization<br/>
                        Be between 18 to 32 years old.<br/>
                        Be fluent in English.<br/>
                        Be open-minded and willing to work with special need patients<br/>
                        <br/><br/>
                        <b>Fields of Specialization:</b><br/>
                        Psychology<br/>
                        Social Work<br/>
                        Sociology<br/>
                        <br/><br/>
                        <b>Remuneration:</b><br/>
                        Salary and Wage will be based on current salary scale in the field and industry<br/>
                        <br/><br/>
                        <b>Fees:</b><br/>
                        A placement fee of $2500 applies and is payable after interview with and selection by the
                        employer.<br/>
                        <br/><br/>
                        <b>Covered:</b><br/>
                        Job position with full benefits and complete immigration petition.<br/>
                        Pre-departure orientation.<br/>
                        Visa Application support.<br/>
                        <br/><br/>
                        <b>Not Covered:</b><br/>
                        Return ticket to the USA <br/>
                        Criminal background check/Police clearance (if required)<br/>
                    </>
                    : ""}
            </div>
            <div className="my-2 d-flex justify-content-between">
                <div className="w-50">
                    <button type="button" onClick={(e) => setStep(2)} className="btn btn-info">Previous</button>
                </div>
                <div className="w-50 text-right">
                    <button type="button" onClick={(e) => setStep(5)} className="btn btn-info">Next</button>
                </div>
            </div>
        </>
    );
};

export default Step3;
