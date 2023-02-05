import React, {useEffect, useState} from 'react';
import Travel from "../form/Travel";
import {toast} from "react-hot-toast";
import Visa from "../form/Visa";

export const Step5 = ({travel_exp, setTravelExp, setStep, travel, setTravel}) => {

    const addNew = () => {
        setTravel([...travel, {
            id: travel.length + 1,
            country: "",
            purpose: "",
            duration: "",
            year: "",
        }])
    }

    const handleRemove = (id) => {
        if (id > 1) {
            setTravel(travel.filter((item) => item.id !== id));
        } else {
            toast.error("Minimum 1 Item required")
        }
    };

    const nextStep = (page) => {
        let length = travel.length - 1;
        if (travel_exp == 1) {
            if (travel[length].country !== "" && travel[length].purpose !== "" && travel[length].duration !== "" && travel[length].year !== "") {
                setStep(page)
            } else {
                toast.error("All field is required")
            }
        } else {
            setStep(page)
        }
    }

    useEffect(() => {
    }, [travel_exp])

    return (
        <>
            <div className="row mt-5">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Do you have previous travel experience</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="radio" name="travel_exp" onClick={(e) => setTravelExp(e.target.value)} id="travely"
                           value={1}/>&nbsp;&nbsp;<label
                    htmlFor="travely" className="mt-2">Yes</label>&nbsp;&nbsp;
                    <input type="radio" name="travel_exp" onClick={(e) => setTravelExp(e.target.value)} id="traveln"
                           value={2}/>&nbsp;&nbsp;<label
                    htmlFor="traveln" className="mt-2">No</label>&nbsp;&nbsp;
                </div>
            </div>
            {travel_exp == 1 ?
                <>
                    {travel.map((item, index) =>
                        <>
                            <Travel setData={setTravel} allData={travel} key={index} data={item}/>
                            <hr/>
                        </>
                    )}
                    <div className="d-flex justify-content-between">
                        <button className="btn btn-info mb-3 btn-sm"
                                onClick={(e) => addNew()}>Add New
                        </button>
                        <button className="btn btn-danger mb-3 btn-sm"
                                onClick={(e) => handleRemove(travel.length)}>Delete
                        </button>
                    </div>
                </>
                : ""}
            <div className="my-2 d-flex justify-content-between">
                <div className="w-50">
                    <button type="button" onClick={(e) => setStep(3)} className="btn btn-info">Previous</button>
                </div>
                <div className="w-50 text-right">
                    <button type="button" onClick={(e) => nextStep(6)} className="btn btn-info">Next</button>
                </div>
            </div>
        </>
    );
};
export const Step6 = ({us_visa, setUSVisa, setStep, visa, setVisa}) => {


    const addNew = () => {
        setVisa([...visa, {
            id: visa.length + 1,
            category: "",
            year: "",
            decision: "",
            place: "",
        }])
    }

    const handleRemove = (id) => {
        if (id > 1) {
            setVisa(visa.filter((item) => item.id !== id));
        } else {
            toast.error("Minimum 1 Item required")
        }
    };

    const nextStep = (page) => {
        let length = visa.length - 1;
        if (us_visa == 1) {
            if (visa[length].country !== "" && visa[length].purpose !== "" && visa[length].duration !== "" && visa[length].year !== "") {
                setStep(page)
            } else {
                toast.error("All field is required")
            }
        } else {
            setStep(page)
        }
    }

    useEffect(() => {
    }, [us_visa])


    return (
        <>
            <div className="row mt-5">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Have you applied for US visa previously</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="radio" name="travel_exp" onClick={(e) => setUSVisa(e.target.value)} id="travely"
                           value={1}/>&nbsp;&nbsp;<label
                    htmlFor="travely" className="mt-2">Yes</label>&nbsp;&nbsp;
                    <input type="radio" name="travel_exp" onClick={(e) => setUSVisa(e.target.value)} id="traveln"
                           value={2}/>&nbsp;&nbsp;<label
                    htmlFor="traveln" className="mt-2">No</label>&nbsp;&nbsp;
                </div>
            </div>
            {us_visa == 1 ?
                <>
                    {visa.map((item, index) =>
                        <>
                            <Visa setData={setVisa} allData={visa} key={index} data={item}/>
                            <hr/>
                        </>
                    )}
                    <div className="d-flex justify-content-between">
                        <button className="btn btn-info mb-3 btn-sm"
                                onClick={(e) => addNew()}>Add New
                        </button>
                        <button className="btn btn-danger mb-3 btn-sm"
                                onClick={(e) => handleRemove(visa.length)}>Delete
                        </button>
                    </div>
                </>
                : ""}
            <div className="my-2 d-flex justify-content-between">
                <div className="w-50">
                    <button type="button" onClick={(e) => setStep(5)} className="btn btn-info">Previous</button>
                </div>
                <div className="w-50 text-right">
                    <button type="button" onClick={(e) => nextStep(7)} className="btn btn-info">Next</button>
                </div>
            </div>
        </>
    );
};

