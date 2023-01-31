import React, {useState, useEffect} from 'react';


const Step7 = ({setStep, setWorkExp}) => {

    return (
        <>
            <div className="row my-5">
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
            <div className="my-2 d-flex justify-content-between">
                <div className="w-50">
                    <button type="button" onClick={(e) => setStep(4)} className="btn btn-info">Previous</button>
                </div>
                <div className="w-50 text-right">
                    <button type="button" onClick={(e) => setStep(6)} className="btn btn-info">Next</button>
                </div>
            </div>
        </>
    );
};

export default Step7;
