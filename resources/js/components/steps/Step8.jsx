import React, {useEffect} from 'react';
import {toast} from "react-hot-toast";

const Step8 = ({setStep, studies, setStudies, sd_name, sd_location, sd_position, sd_start, sd_end, sd_description, setsd_name, setsd_location, setsd_position, setsd_start, setsd_end, setsd_description}) => {

    useEffect(() => {
    }, [studies])

    const step8Submit = (e) => {
        if (studies == 1) {
            if (sd_name !== "" && sd_location !== "" && sd_position !== "" && sd_start !== "" && sd_end !== "" && sd_description !== "") {
                setStep(9)
            } else {
                toast.error("All field is required")
            }
        }else{
            setStep(9)
        }
    }

    return (
        <>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Have you lived of studied abroad previously?</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="radio" name="exp" onClick={(e) => setStudies(e.target.value)} id="y"
                           value={1}/>&nbsp;&nbsp;<label
                    htmlFor="y" className="mt-2">Yes</label>&nbsp;&nbsp;
                    <input type="radio" name="exp" onClick={(e) => setStudies(e.target.value)} id="n"
                           value={2}/>&nbsp;&nbsp;<label
                    htmlFor="n" className="mt-2">No</label>&nbsp;&nbsp;
                </div>
            </div>
            {studies == 1
            &&
            <>
                <div className="row my-2">
                    <div className="col-md-8 d-flex align-items-center">
                        <label htmlFor="category">Name of Institution</label>
                    </div>
                    <div className="col-md-4 d-flex">
                        <input type="text" className="form-control" value={sd_name}
                               onChange={(e) => setsd_name(e.target.value)}/>
                    </div>
                </div>
                <div className="row my-2">
                    <div className="col-md-8 d-flex align-items-center">
                        <label htmlFor="category">Location</label>
                    </div>
                    <div className="col-md-4 d-flex">
                        <input type="text" className="form-control" value={sd_location}
                               onChange={(e) => setsd_location(e.target.value)}/>
                    </div>
                </div>
                <div className="row my-2">
                    <div className="col-md-8 d-flex align-items-center">
                        <label htmlFor="category">Level of Study</label>
                    </div>
                    <div className="col-md-4 d-flex">
                        <input type="text" className="form-control" value={sd_position}
                               onChange={(e) => setsd_position(e.target.value)}/>
                    </div>
                </div>
                <div className="row my-2">
                    <div className="col-md-8 d-flex align-items-center">
                        <label htmlFor="category">Program Start(Arrival) Date</label>
                    </div>
                    <div className="col-md-4 d-flex">
                        <input type="date" className="form-control" value={sd_start}
                               onChange={(e) => setsd_start(e.target.value)}/>
                    </div>
                </div>
                <div className="row my-2">
                    <div className="col-md-8 d-flex align-items-center">
                        <label htmlFor="category">Program End(Departure) Date</label>
                    </div>
                    <div className="col-md-4 d-flex">
                        <input type="date" className="form-control" value={sd_end}
                               onChange={(e) => setsd_end(e.target.value)}/>
                    </div>
                </div>
                <div className="row my-2">
                    <div className="col-md-8 d-flex align-items-center">
                        <label htmlFor="category">Course of Study</label>
                    </div>
                    <div className="col-md-4 d-flex">
                        <input type="text" className="form-control" value={sd_description}
                               onChange={(e) => setsd_description(e.target.value)}/>
                    </div>
                </div>
            </>}
            <div className="my-2 d-flex justify-content-between">
                <div className="w-50">
                    <button type="button" onClick={(e) => setStep(7)} className="btn btn-info">Previous</button>
                </div>
                <div className="w-50 text-right">
                    <button type="button" onClick={(e) => step8Submit(e)} className="btn btn-info">Next</button>
                </div>
            </div>
        </>
    );
};

export default Step8;
