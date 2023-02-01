import React from 'react';

export const Step5 = ({us_visa, setTravelExp, setStep}) => {
    return (
        <>
            <div className="row my-5">
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
            <div className="my-2 d-flex justify-content-between">
                <div className="w-50">
                    <button type="button" onClick={(e) => setStep(3)} className="btn btn-info">Previous</button>
                </div>
                <div className="w-50 text-right">
                    <button type="button" onClick={(e) => setStep(6)} className="btn btn-info">Next</button>
                </div>
            </div>
        </>
    );
};
export const Step6 = ({us_visa, setTravelExp, setUSVisa, setStep}) => {
    return (
        <>
            <div className="row my-5">
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
            <div className="my-2 d-flex justify-content-between">
                <div className="w-50">
                    <button type="button" onClick={(e) => setStep(5)} className="btn btn-info">Previous</button>
                </div>
                <div className="w-50 text-right">
                    <button type="button" onClick={(e) => setStep(7)} className="btn btn-info">Next</button>
                </div>
            </div>
        </>
    );
};

