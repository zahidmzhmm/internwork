import React from 'react';
import {toast} from "react-hot-toast";

const Step4 = ({setStep, picture, setPicture}) => {
    const step4Submit = (e) => {
        if (picture !== "") {
            setStep(5)
        } else {
            toast.error("Please upload your photo")
        }
    }
    return (
        <>
            <div className="row my-5">
                <div className="col-md-6 d-flex align-items-center">
                    <label htmlFor="category">Select Your Picture</label>
                </div>
                <div className="col-md-6 d-flex">
                    <input type="file" onChange={(e) => setPicture(e.target.files[0])}/>
                </div>
            </div>
            <div className="my-2 d-flex justify-content-between">
                <div className="w-50">
                    <button type="button" onClick={(e) => setStep(3)} className="btn btn-info">Previous</button>
                </div>
                <div className="w-50 text-right">
                    <button type="button" onClick={(e) => step4Submit(e)} className="btn btn-info">Next</button>
                </div>
            </div>
        </>
    );
};

export default Step4;
