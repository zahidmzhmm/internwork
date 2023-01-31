import React, {useEffect, useState} from 'react';
import {toast} from "react-hot-toast";
import {axiosReq, FEES} from "../config";
import {Base64} from "js-base64";

const Step10 = ({
                    step, setStep, category, country, picture, program, duration, setDuration, applicable, setApplicable, digit, travel_exp, us_visa, workExp, studies, selfPlaced,
                    ex_name, ex_location, ex_position, ex_start, ex_end, ex_description,
                    sd_name, sd_location, sd_position, sd_start, sd_end, sd_description,
                    sp_name, sp_location, sp_position, sp_start, sp_end
                }) => {

    const [allduration, setAllDuration] = useState([]);
    const [allApplicable, setAllApplicable] = useState([]);

    useEffect(() => {
        if (country == "Australia" && category == "Internship") {
            setAllDuration([
                {name: "6 months"},
                {name: "12 months"}
            ])
        }
        if (country == "Denmark" && category == "Internship") {
            setAllDuration([
                {name: "12 months"}
            ])
        }
        if (country == "Sweden" && category == "Internship") {
            setAllDuration([
                {name: "6 months"},
                {name: "12 months"},
            ])
        }
        if (country == "South Africa" && category == "Internship") {
            setAllDuration([
                {name: "6 months"},
            ])
        }
        if (country == "United States" && category == "Internship") {
            setAllDuration([
                {name: "6 months"},
                {name: "12 months"},
            ])
        }
        if (country == "Sweden" && category == "Traineeship") {
            setAllDuration([
                {name: "12 months"},
            ])
        }
        if (country == "United States" && category == "Traineeship") {
            setAllDuration([
                {name: "12 months"},
            ])
        }
        if (country == "United States" && category == "H1B") {
            setAllDuration([
                {name: "24 months"},
            ])
        }
    }, [step])
    const finalSubmit = (e) => {
        let docget = document.getElementById("appointment-root");
        let ref = docget.getAttribute('data-ref-gen') + digit;
        let user_id = docget.getAttribute('data-user-id');
        let applicableData = JSON.parse(Base64.decode(applicable));
        if (category !== "" && country !== "" && program !== "" && us_visa !== "" && travel_exp !== "" && digit !== "" && picture !== "" && duration !== "" && applicable !== "" && ref !== "" && user_id !== "") {
            let formdata = new FormData();
            formdata.append('user_id', user_id)
            formdata.append('destination', country)
            formdata.append('program', program)
            formdata.append('duration', duration)
            formdata.append('reference', ref)
            formdata.append('fees', FEES)
            formdata.append('us_visa', us_visa)
            formdata.append('travel_exp', travel_exp)
            formdata.append('picture', picture)
            formdata.append('applicable_id', applicableData.id)
            formdata.append('applicable_name', applicableData.applicable_entry)
            formdata.append('applicable_start', applicableData.start_date)
            formdata.append('applicable_end', applicableData.end_date)
            formdata.append('applicable_deadline', applicableData.deadline)
            formdata.append('payment_method', "Paypal")

            if (workExp == 1) {
                let formdata1 = new FormData();
                formdata1.append('user_id', user_id)
                formdata1.append('name', ex_name)
                formdata1.append('location', ex_location)
                formdata1.append('position', ex_position)
                formdata1.append('start', ex_start)
                formdata1.append('end', ex_end)
                formdata1.append('description', ex_description)
                axiosReq('experiences', 'post', formdata).then((data) => {
                })
            }
            if (studies == 1) {
                let formdata1 = new FormData();
                formdata1.append('user_id', user_id)
                formdata1.append('institute', sd_name)
                formdata1.append('location', sd_location)
                formdata1.append('level', sd_position)
                formdata1.append('start', sd_start)
                formdata1.append('end', sd_end)
                formdata1.append('description', sd_description)
                axiosReq('studies', 'post', formdata).then((data) => {
                })
            }
            if (selfPlaced == 1) {
                let formdata1 = new FormData();
                formdata1.append('user_id', user_id)
                formdata1.append('name', sp_name)
                formdata1.append('location', sp_location)
                formdata1.append('position', sp_position)
                formdata1.append('start', sp_start)
                formdata1.append('end', sp_end)
                axiosReq('employs', 'post', formdata).then((data) => {
                })
            }

            axiosReq('applications', 'post', formdata).then((data) => {
                if (parseInt(data.status) === 200) {
                    window.location.href = '/user/payment/' + ref;
                } else {
                    toast.error(data.message);
                }
            })
        } else {
            toast.error("All field is required")
        }
    }
    useEffect(() => {
        axiosReq('durations').then((data) => setAllApplicable(data))
    }, [step])
    return (
        <>
            <div className="row my-2">
                <div className="col-md-6 col-xl-8 d-flex align-items-center">
                    <label htmlFor="category">Select Your Applicant Category</label>
                </div>
                <div className="col-md-6 col-xl-4 d-flex">
                    <select value={duration} onChange={(e) => setDuration(e.target.value)} name="" id=""
                            className="form-control">
                        <option value="">Select</option>
                        {allduration.map((data, index) =>
                            <option value={data.name} key={index}>{data.name}</option>
                        )}
                    </select>
                </div>
            </div>
            <div className="row my-2">
                <div className="col-md-6 col-xl-8 d-flex align-items-center">
                    <label htmlFor="category">Applicable Entry</label>
                </div>
                <div className="col-md-6 col-xl-4 d-flex">
                    <select value={applicable !== "" ? JSON.parse(Base64.decode(applicable)).applicable_entry : ""}
                            onChange={(e) => setApplicable(e.target.value)} name="" id="" className="form-control">
                        <option value="">Select</option>
                        {allApplicable.map((data, index) =>
                            <option value={Base64.encode(JSON.stringify(data))}
                                    key={index}>{data.applicable_entry}</option>
                        )}
                    </select>
                </div>
            </div>
            {applicable !== "" ?
                <>
                    <div className="row my-2">
                        <div className="col-md-6 col-xl-8 d-flex align-items-center">
                            <label htmlFor="category">Start Date</label>
                        </div>
                        <div className="col-md-6 col-xl-4 d-flex">
                            <input type="text" className="form-control disabled" disabled
                                   value={JSON.parse(Base64.decode(applicable)).start_date}/>
                        </div>
                    </div>
                    <div className="row my-2">
                        <div className="col-md-6 col-xl-8 d-flex align-items-center">
                            <label htmlFor="category">End Date</label>
                        </div>
                        <div className="col-md-6 col-xl-4 d-flex">
                            <input type="text" className="form-control disabled" disabled
                                   value={JSON.parse(Base64.decode(applicable)).end_date}/>
                        </div>
                    </div>
                    <div className="row my-2">
                        <div className="col-md-6 col-xl-8 d-flex align-items-center">
                            <label htmlFor="category">Deadline</label>
                        </div>
                        <div className="col-md-6 col-xl-4 d-flex">
                            <input type="text" className="form-control disabled" disabled
                                   value={JSON.parse(Base64.decode(applicable)).deadline}/>
                        </div>
                    </div>
                </>
                : ""}
            <div className="my-2 d-flex justify-content-between">
                <div className="w-50">
                    <button type="button" onClick={(e) => setStep(9)} className="btn btn-info">Previous</button>
                </div>
                <div className="w-50 text-right">
                    <button type="button" onClick={(e) => finalSubmit(e)} className="btn btn-info">Next</button>
                </div>
            </div>
        </>
    );
};

export default Step10;
