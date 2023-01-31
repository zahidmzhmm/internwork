import React, {useEffect} from 'react';
import {toast} from "react-hot-toast";

const Step9 = ({setStep, selfPlaced, setSelfPlaced, sp_name, sp_location, sp_position, sp_start, sp_end, setsp_name, setsp_location, setsp_position, setsp_start, setsp_end}) => {

    useEffect(() => {
    }, [selfPlaced])

    const step8Submit = (e) => {
        if (selfPlaced == 1) {
            if (sp_name !== "" && sp_location !== "" && sp_position !== "" && sp_start !== "" && sp_end !== "") {
                setStep(10)
            } else {
                toast.error("All field is required")
            }
        }else{
            setStep(10)
        }
    }

    return (
        <>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Do you have self-placed position already</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="radio" name="exp" onClick={(e) => setSelfPlaced(e.target.value)} id="y"
                           value={1}/>&nbsp;&nbsp;<label
                    htmlFor="y" className="mt-2">Yes</label>&nbsp;&nbsp;
                    <input type="radio" name="exp" onClick={(e) => setSelfPlaced(e.target.value)} id="n"
                           value={2}/>&nbsp;&nbsp;<label
                    htmlFor="n" className="mt-2">No</label>&nbsp;&nbsp;
                </div>
            </div>
            {selfPlaced == 1
            &&
            <>
                <div className="row my-2">
                    <div className="col-md-8 d-flex align-items-center">
                        <label htmlFor="category">Name of Employer</label>
                    </div>
                    <div className="col-md-4 d-flex">
                        <input type="text" className="form-control" value={sp_name}
                               onChange={(e) => setsp_name(e.target.value)}/>
                    </div>
                </div>
                <div className="row my-2">
                    <div className="col-md-8 d-flex align-items-center">
                        <label htmlFor="category">Location</label>
                    </div>
                    <div className="col-md-4 d-flex">
                        <input type="text" className="form-control" value={sp_location}
                               onChange={(e) => setsp_location(e.target.value)}/>
                    </div>
                </div>
                <div className="row my-2">
                    <div className="col-md-8 d-flex align-items-center">
                        <label htmlFor="category">Level of Study</label>
                    </div>
                    <div className="col-md-4 d-flex">
                        <input type="text" className="form-control" value={sp_position}
                               onChange={(e) => setsp_position(e.target.value)}/>
                    </div>
                </div>
                <div className="row my-2">
                    <div className="col-md-8 d-flex align-items-center">
                        <label htmlFor="category">Program Start(Arrival) Date</label>
                    </div>
                    <div className="col-md-4 d-flex">
                        <input type="date" className="form-control" value={sp_start}
                               onChange={(e) => setsp_start(e.target.value)}/>
                    </div>
                </div>
                <div className="row my-2">
                    <div className="col-md-8 d-flex align-items-center">
                        <label htmlFor="category">Program End(Departure) Date</label>
                    </div>
                    <div className="col-md-4 d-flex">
                        <input type="date" className="form-control" value={sp_end}
                               onChange={(e) => setsp_end(e.target.value)}/>
                    </div>
                </div>
            </>}
            <div className="my-2 d-flex justify-content-between">
                <div className="w-50">
                    <button type="button" onClick={(e) => setStep(8)} className="btn btn-info">Previous</button>
                </div>
                <div className="w-50 text-right">
                    <button type="button" onClick={(e) => step8Submit(e)} className="btn btn-info">Next</button>
                </div>
            </div>
        </>
    );
};

export default Step9;
