import React, {useState} from 'react';
import {toast} from "react-hot-toast";

const Step1 = ({setStep, category, setCategory}) => {
    const stage1Submit = (e) => {
        if (category !== "") {
            setStep(2)
        } else {
            toast.error('All field is required')
        }
    }

    return (
        <>
            <div className="row my-2">
                <div className="col-md-6 col-xl-8 d-flex align-items-center">
                    <label htmlFor="category">Select Your Applicant Category</label>
                </div>
                <div className="col-md-6 col-xl-4 d-flex">
                    <select value={category} onChange={(e) => setCategory(e.target.value)} name="" id=""
                            className="form-control">
                        <option value="">Select</option>
                        <option value="Internship">Current Student</option>
                        <option value="Traineeship">Graduate</option>
                        <option value="H1B">H1-B</option>
                    </select>
                </div>
            </div>
            {category === 'Internship' &&
                <div className="my-4 text-center alert alert-warning">
                    <b>NOTICE!</b> <br/>
                    Current student status applies to any applicant that is a current tertiary student at the
                    undergraduate level. Recent graduates; students that just graduated and intends to start the
                    internship within 12 months of graduation should select the “Current Student” option and complete
                    the application for Internship and NOT Traineeship.
                </div>
            }
            {category === 'Traineeship' &&
                <div className="my-4 text-center alert alert-warning">
                    <b>NOTICE!</b> <br/>
                    Applicants that have graduated from their undergraduate level of study for more than 12 months are
                    reviewed as “Trainees”. This category of applicant should select the “Graduate” and complete the
                    application for Traineeship.
                </div>
            }
            {category === 'H1B' &&
                <div className="my-4 text-center alert alert-warning">
                    <b>NOTICE!</b> <br/>
                    The H-1B program applies to employers seeking to hire nonimmigrant aliens as workers in specialty
                    occupations. The H-1B allows for temporary employment. The position offered must require the skills
                    and
                    services of a professional and the worker must have the professional credentials to fill it. The
                    minimum
                    educational level acceptable for H-1B status is a bachelor's degree in the field of the proposed
                    employment. At this time, we are only placing candidates with qualifications in Psychology, Social
                    Work
                    and Sociology.
                </div>
            }
            <div className="my-2 text-right">
                <button type="button" onClick={(e) => stage1Submit(e)} className="btn btn-info">Next</button>
            </div>
        </>
    );
};

export default Step1;
