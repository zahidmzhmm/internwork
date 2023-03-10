import React, {useEffect, useState} from 'react';
import {toast} from "react-hot-toast";
import {axiosReq, FEES} from "../config";
import {Base64} from "js-base64";
import moment from "moment";

const Step10 = ({
                    step,
                    setStep,
                    category,
                    country,
                    program,
                    duration,
                    setDuration,
                    applicable,
                    setApplicable,
                    digit,
                    travel_exp,
                    us_visa,
                    workExp,
                    studies,
                    selfPlaced,
                    experience,
                    studied,
                    placed,
                    travel,
                    visa
                }) => {

    const [allduration, setAllDuration] = useState([]);
    const [allApplicable, setAllApplicable] = useState([]);
    const [update, setUpdate] = useState(false)

    useEffect(() => {
        if (country == "Australia" && category == "Internship") {
            setAllDuration([
                {name: "6 months", value: 6},
                {name: "12 months", value: 12}
            ])
        }
        if (country == "Denmark" && category == "Internship") {
            setAllDuration([
                {name: "12 months", value: 12}
            ])
        }
        if (country == "Sweden" && category == "Internship") {
            setAllDuration([
                {name: "6 months", value: 6},
                {name: "12 months", value: 12},
            ])
        }
        if (country == "South Africa" && category == "Internship") {
            setAllDuration([
                {name: "6 months", value: 6},
            ])
        }
        if (country == "United States" && category == "Internship") {
            setAllDuration([
                {name: "6 months", value: 6},
                {name: "12 months", value: 12},
            ])
        }
        if (country == "Sweden" && category == "Traineeship") {
            setAllDuration([
                {name: "12 months", value: 12},
            ])
        }
        if (country == "United States" && category == "Traineeship") {
            setAllDuration([
                {name: "12 months", value: 12},
            ])
        }
        if (country == "United States" && category == "H1B") {
            setAllDuration([
                {name: "24 months", value: 24},
            ])
        }
    }, [step])
    const finalSubmit = (e) => {
        setUpdate(true)
        let docget = document.getElementById("appointment-root");
        let ref = docget.getAttribute('data-ref-gen') + digit;
        let user_id = docget.getAttribute('data-user-id');
        let applicableData = JSON.parse(Base64.decode(applicable));
        if (category !== "" && country !== "" && digit !== "" && program !== "" && duration !== "" && applicable !== "" && travel_exp !== "" && us_visa !== "" && workExp !== "" && studies !== "" && selfPlaced !== "" && ref !== "" && user_id !== "") {
            let formdata = new FormData();
            formdata.append('user_id', user_id)
            formdata.append('category', category)
            formdata.append('destination', country)
            formdata.append('program', program)
            formdata.append('duration', duration)
            formdata.append('reference', ref)
            formdata.append('fees', FEES)
            formdata.append('us_visa', us_visa)
            formdata.append('travel_exp', travel_exp)
            formdata.append('applicable_id', applicableData.id)
            formdata.append('applicable_name', applicableData.applicable_entry)
            formdata.append('applicable_start', moment(applicableData.start_date).format('Do MMMM YYYY'))
            formdata.append('applicable_end', moment(applicableData.start_date).add(duration, 'months').format('Do MMMM YYYY'))
            formdata.append('applicable_deadline', moment(applicableData.deadline).format('Do MMMM YYYY'))
            formdata.append('payment_method', "Paystack")

            if (workExp == 1) {
                experience.map((item, index) => {
                    let formdata1 = new FormData();
                    formdata1.append('user_id', user_id)
                    formdata1.append('name', item.name)
                    formdata1.append('location', item.location)
                    formdata1.append('position', item.position)
                    formdata1.append('start', item.start)
                    formdata1.append('end', item.end)
                    formdata1.append('description', item.description)
                    axiosReq('experiences', 'post', formdata1).then((data) => {
                    })
                })
            }
            if (studies == 1) {
                studied.map((item, index) => {
                    let formdata2 = new FormData();
                    formdata2.append('user_id', user_id)
                    formdata2.append('institute', item.institute)
                    formdata2.append('location', item.location)
                    formdata2.append('level', item.level)
                    formdata2.append('start', item.start)
                    formdata2.append('end', item.end)
                    formdata2.append('description', item.description)
                    axiosReq('studies', 'post', formdata2).then((data) => {
                    })
                })
            }
            if (selfPlaced == 1) {
                placed.map((item, index) => {
                    let formdata3 = new FormData();
                    formdata3.append('user_id', user_id)
                    formdata3.append('name', item.name)
                    formdata3.append('location', item.location)
                    formdata3.append('position', item.position)
                    formdata3.append('start', item.start)
                    formdata3.append('end', item.end)
                    axiosReq('employs', 'post', formdata3).then((data) => {
                    })
                })
            }
            if (us_visa == 1) {
                visa.map((item, index) => {
                    let formdata3 = new FormData();
                    formdata3.append('user_id', user_id)
                    formdata3.append('category', item.category)
                    formdata3.append('year', item.year)
                    formdata3.append('decision', item.decision)
                    formdata3.append('place', item.place)
                    axiosReq('visas', 'post', formdata3).then((data) => {
                    })
                })
            }
            if (travel_exp == 1) {
                travel.map((item, index) => {
                    let formdata3 = new FormData();
                    formdata3.append('user_id', user_id)
                    formdata3.append('country', item.country)
                    formdata3.append('purpose', item.purpose)
                    formdata3.append('duration', item.duration)
                    formdata3.append('year', item.year)
                    axiosReq('travels', 'post', formdata3).then((data) => {
                    })
                })
            }
            axiosReq('applications', 'post', formdata).then((data) => {
                if (parseInt(data.status) === 200) {
                    setTimeout(() => {
                        setUpdate(false)
                        window.location.href = '/user/payment/' + ref;
                        return true;
                    }, 2000)
                } else {
                    setUpdate(false)
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
                    <label htmlFor="category">Select Your Applicant Duration</label>
                </div>
                <div className="col-md-6 col-xl-4 d-flex">
                    <select value={duration} onChange={(e) => setDuration(e.target.value)} name="" id=""
                            className="form-control">
                        <option value="">Select</option>
                        {allduration.map((data, index) =>
                            <option value={data.value} key={index}>{data.name}</option>
                        )}
                    </select>
                </div>
            </div>
            <div className="row my-2">
                <div className="col-md-6 col-xl-8 d-flex align-items-center">
                    <label htmlFor="category">Applicable Entry</label>
                </div>
                <div className="col-md-6 col-xl-4 d-flex">
                    <select value={applicable}
                            onChange={(e) => setApplicable(e.target.value)} name="" id="" className="form-control">
                        <option value="">Select</option>
                        {allApplicable.map((data, index) =>
                            <option value={Base64.encode(JSON.stringify(data))}
                                    key={index}>{data.applicable_entry}</option>
                        )}
                    </select>
                </div>
            </div>
            {applicable && duration !== "" ?
                <>
                    <div className="row my-2">
                        <div className="col-md-6 col-xl-8 d-flex align-items-center">
                            <label htmlFor="category">Start Date</label>
                        </div>
                        <div className="col-md-6 col-xl-4 d-flex">
                            <input type="text" className="form-control disabled" disabled
                                   value={moment(JSON.parse(Base64.decode(applicable)).start_date).format('Do MMMM YYYY')}/>
                        </div>
                    </div>
                    <div className="row my-2">
                        <div className="col-md-6 col-xl-8 d-flex align-items-center">
                            <label htmlFor="category">End Date</label>
                        </div>
                        <div className="col-md-6 col-xl-4 d-flex">
                            <input type="text" className="form-control disabled" disabled
                                   value={moment(JSON.parse(Base64.decode(applicable)).start_date).add(duration, 'months').format('Do MMMM YYYY')}/>
                        </div>
                    </div>
                    <div className="row my-2">
                        <div className="col-md-6 col-xl-8 d-flex align-items-center">
                            <label htmlFor="category">Deadline</label>
                        </div>
                        <div className="col-md-6 col-xl-4 d-flex">
                            <input type="text" className="form-control disabled" disabled
                                   value={moment(JSON.parse(Base64.decode(applicable)).deadline).format('Do MMMM YYYY')}/>
                        </div>
                    </div>
                </>
                : ""}
            <div className="my-2 d-flex justify-content-between">
                <div className="w-50">
                    <button type="button" onClick={(e) => setStep(9)} className="btn btn-info">Previous</button>
                </div>
                <div className="w-50 text-right">
                    <button type="button" disabled={update} onClick={(e) => finalSubmit(e)}
                            className="btn btn-info">Next
                    </button>
                </div>
            </div>
        </>
    );
};

export default Step10;
