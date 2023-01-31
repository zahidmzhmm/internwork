import React, {useEffect, useState} from 'react';
import {toast} from "react-hot-toast";

const Step2 = ({step, setStep, category, country, program, setCountry, setProgram, setDigit}) => {

    const [countries, setCountries] = useState([]);
    const [programs, setPrograms] = useState([]);

    useEffect(() => {
        if (category == 'Internship') {
            setCountries([
                {name: 'Australia', digit: 'AU'},
                {name: 'Denmark', digit: 'DE'},
                {name: 'Sweden', digit: 'SW'},
                {name: 'South Africa', digit: 'SA'},
                {name: 'United States', digit: 'US'}
            ])
        }
        if (category == 'Traineeship') {
            setCountries([
                {name: 'Sweden', digit: 'SW'},
                {name: 'United States', digit: 'US'}
            ])
        }
        if (category == 'H1B') {
            setCountries([
                {name: 'United States', digit: 'US'}
            ])
        }
    }, [step])
    const onChangeCountry = (val) => {
        setCountry(val)
        if (val == "") {
            setPrograms([])
        }
        if (val == "Australia" && category == "Internship") {
            setPrograms([
                {name: "Hospitality"},
                {name: "Marketing"},
                {name: "Business/Management"},
                {name: "Computer/Information Technology"},
            ])
        }
        if (val == "Denmark" && category == "Internship") {
            setPrograms([
                {name: "Dairy Farming"},
                {name: "Pig Farming"},
                {name: "Horticulture (on-demand only)"},
                {name: "Veterinary Science"},
            ])
        }
        if (val == "Sweden" && category == "Internship") {
            setPrograms([
                {name: "Crop Production"},
                {name: "Dairy Farming"},
                {name: "Pig Farming"},
                {name: "Horticulture"},
                {name: "Veterinary Science"},
            ])
        }
        if (val == "South Africa" && category == "Internship") {
            setPrograms([
                {name: "Veterinary Science"},
            ])
        }
        if (val == "United States" && category == "Internship") {
            setPrograms([
                {name: "Agriculture"},
                {name: "Business"},
                {name: "Engineering"},
                {name: "Hospitality"},
                {name: "Information Technology"},
                {name: "Science"},
            ])
        }
        if (val == "Sweden" && category == "Traineeship") {
            setPrograms([
                {name: "Crop Production"},
                {name: "Dairy Farming"},
                {name: "Horticulture"}
            ])
        }
        if (val == "United States" && category == "Traineeship") {
            setPrograms([
                {name: "Agriculture"},
                {name: "Business"},
                {name: "Engineering"},
                {name: "Information Technology"},
                {name: "Science"},
            ])
        }
        if (val == "United States" && category == "H1B") {
            setPrograms([
                {name: "Psychology"},
                {name: "Social Work"},
                {name: "Sociology"}
            ])
        }
    }
    const stage2Submit = (e) => {
        if (program !== "" && country !== "") {
            setStep(3)
        } else {
            toast.error("All field is required")
        }
    }
    return (
        <>
            <div className="row my-2">
                <div className="col-md-6 col-xl-8 d-flex align-items-center">
                    <label htmlFor="category">Select a Program Destination</label>
                </div>
                <div className="col-md-6 col-xl-4 d-flex">
                    <select value={country} onChange={(e) => {
                        onChangeCountry(e.target.value)
                        setDigit(e.target[e.target.selectedIndex].getAttribute('data-digit'))
                    }} name="" id="" className="form-control">
                        <option value="">Select</option>
                        {countries.map((data, index) =>
                            <option value={data.name} key={index} data-digit={data.digit}>{data.name}</option>
                        )}
                    </select>
                </div>
            </div>
            <div className="row my-2">
                <div className="col-md-6 col-xl-8 d-flex align-items-center">
                    <label htmlFor="category">Select a Program Field</label>
                </div>
                <div className="col-md-6 col-xl-4 d-flex">
                    <select value={program} onChange={(e) => setProgram(e.target.value)} name="" id=""
                            className="form-control">
                        <option value="">Select</option>
                        {programs.map((data, index) =>
                            <option value={data.name} key={index}>{data.name}</option>
                        )}
                    </select>
                </div>
            </div>
            <div className="my-2 d-flex justify-content-between">
                <div className="w-50">
                    <button type="button" onClick={(e) => setStep(1)} className="btn btn-info">Previous</button>
                </div>
                <div className="w-50 text-right">
                    <button type="button" onClick={(e) => stage2Submit(e)} className="btn btn-info">Next</button>
                </div>
            </div>
        </>
    );
};

export default Step2;
