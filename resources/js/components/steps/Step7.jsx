import React, {useState, useEffect} from 'react';
import {toast} from "react-hot-toast";


const Step7 = ({setStep, setWorkExp, workExp, ex_name, ex_location, ex_position, ex_start, ex_end, ex_description, setex_name, setex_location, setex_position, setex_start, setex_end, setex_description}) => {

    useEffect(() => {
    }, [workExp])

    const step7Submit = (e) => {
        if (workExp == 1) {
            if (ex_name !== "" && ex_location !== "" && ex_position !== "" && ex_start !== "" && ex_end !== "" && ex_description !== "") {
                setStep(8)
            } else {
                toast.error("All field is required")
            }
        }else{
            setStep(8)
        }
    }

    return (
        <>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Do you have previous work experience</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="radio" name="exp" onClick={(e) => setWorkExp(e.target.value)} id="y"
                           value={1}/>&nbsp;&nbsp;<label
                    htmlFor="y" className="mt-2">Yes</label>&nbsp;&nbsp;
                    <input type="radio" name="exp" onClick={(e) => setWorkExp(e.target.value)} id="n"
                           value={2}/>&nbsp;&nbsp;<label
                    htmlFor="n" className="mt-2">No</label>&nbsp;&nbsp;
                </div>
            </div>
            {workExp == 1
            &&
            <>
                <div className="row my-2">
                    <div className="col-md-8 d-flex align-items-center">
                        <label htmlFor="category">Name of Employer</label>
                    </div>
                    <div className="col-md-4 d-flex">
                        <input type="text" className="form-control" value={ex_name}
                               onChange={(e) => setex_name(e.target.value)}/>
                    </div>
                </div>
                <div className="row my-2">
                    <div className="col-md-8 d-flex align-items-center">
                        <label htmlFor="category">Location</label>
                    </div>
                    <div className="col-md-4 d-flex">
                        <input type="text" className="form-control" value={ex_location}
                               onChange={(e) => setex_location(e.target.value)}/>
                    </div>
                </div>
                <div className="row my-2">
                    <div className="col-md-8 d-flex align-items-center">
                        <label htmlFor="category">Position</label>
                    </div>
                    <div className="col-md-4 d-flex">
                        <input type="text" className="form-control" value={ex_position}
                               onChange={(e) => setex_position(e.target.value)}/>
                    </div>
                </div>
                <div className="row my-2">
                    <div className="col-md-8 d-flex align-items-center">
                        <label htmlFor="category">Program Start(Arrival) Date</label>
                    </div>
                    <div className="col-md-4 d-flex">
                        <input type="date" className="form-control" value={ex_start}
                               onChange={(e) => setex_start(e.target.value)}/>
                    </div>
                </div>
                <div className="row my-2">
                    <div className="col-md-8 d-flex align-items-center">
                        <label htmlFor="category">Program End(Departure) Date</label>
                    </div>
                    <div className="col-md-4 d-flex">
                        <input type="date" className="form-control" value={ex_end}
                               onChange={(e) => setex_end(e.target.value)}/>
                    </div>
                </div>
                <div className="row my-2">
                    <div className="col-md-8 d-flex align-items-center">
                        <label htmlFor="category">Role Description</label>
                    </div>
                    <div className="col-md-4 d-flex">
                        <input type="text" className="form-control" value={ex_description}
                               onChange={(e) => setex_description(e.target.value)}/>
                    </div>
                </div>
            </>}
            <div className="my-2 d-flex justify-content-between">
                <div className="w-50">
                    <button type="button" onClick={(e) => setStep(6)} className="btn btn-info">Previous</button>
                </div>
                <div className="w-50 text-right">
                    <button type="button" onClick={(e) => step7Submit(e)} className="btn btn-info">Next</button>
                </div>
            </div>
        </>
    );
};

export default Step7;
