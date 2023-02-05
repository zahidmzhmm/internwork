import React, {useEffect} from 'react';
import {toast} from "react-hot-toast";
import Studied from "../form/Studied";

const Step8 = ({setStep, studies, setStudies, studied, setStudied}) => {

    useEffect(() => {
    }, [studies])

    const addNew = () => {
        setStudied([...studied, {
            id: studied.length + 1,
            category: "",
            year: "",
            decision: "",
            place: "",
        }])
    }

    const handleRemove = (id) => {
        if (id > 1) {
            setStudied(studied.filter((item) => item.id !== id));
        } else {
            toast.error("Minimum 1 Item required")
        }
    };

    const nextstep = (page) => {
        let length = studied.length - 1;
        if (studies == 1) {
            if (studied[length].institute !== "" && studied[length].location !== "" && studied[length].level !== "" && studied[length].start !== "" && studied[length].end !== "" && studied[length].description !== "") {
                setStep(page)
            } else {
                toast.error("All field is required")
            }
        } else {
            setStep(page)
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
                    {studied.map((item, index) =>
                        <>
                            <Studied setData={setStudied} allData={studied} key={index} data={item}/>
                            <hr/>
                        </>
                    )}
                    <div className="d-flex justify-content-between">
                        <button className="btn btn-info mb-3 btn-sm"
                                onClick={(e) => addNew()}>Add New
                        </button>
                        <button className="btn btn-danger mb-3 btn-sm"
                                onClick={(e) => handleRemove(studied.length)}>Delete
                        </button>
                    </div>
                </>}
            <div className="my-2 d-flex justify-content-between">
                <div className="w-50">
                    <button type="button" onClick={(e) => setStep(7)} className="btn btn-info">Previous</button>
                </div>
                <div className="w-50 text-right">
                    <button type="button" onClick={(e) => nextstep(9)} className="btn btn-info">Next</button>
                </div>
            </div>
        </>
    );
};

export default Step8;
