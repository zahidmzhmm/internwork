import React, {useState, useEffect} from 'react';
import {toast} from "react-hot-toast";
import Experience from "../form/Experience";


const Step7 = ({workExp, setWorkExp, setStep, experience, setExperience}) => {

    const addNew = () => {
        setExperience([...experience, {
            id: experience.length + 1,
            category: "",
            year: "",
            decision: "",
            place: "",
        }])
    }

    const handleRemove = (id) => {
        if (id > 1) {
            setExperience(experience.filter((item) => item.id !== id));
        } else {
            toast.error("Minimum 1 Item required")
        }
    };

    const nextstep = (page) => {
        let length = experience.length - 1;
        if (workExp == 1) {
            if (experience[length].name !== "" && experience[length].location !== "" && experience[length].position !== "" && experience[length].start !== "" && experience[length].end !== "" && experience[length].description !== "") {
                setStep(page)
            } else {
                toast.error("All field is required")
            }
        } else {
            setStep(page)
        }
    }

    useEffect(() => {
    }, [workExp])

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
                ?
                <>
                    {experience.map((item, index) =>
                        <>
                            <Experience setData={setExperience} allData={experience} key={index} data={item}/>
                            <hr/>
                        </>
                    )}
                    <div className="d-flex justify-content-between">
                        <button className="btn btn-info mb-3 btn-sm"
                                onClick={(e) => addNew()}>Add New
                        </button>
                        <button className="btn btn-danger mb-3 btn-sm"
                                onClick={(e) => handleRemove(experience.length)}>Delete
                        </button>
                    </div>
                </>
                : ""}
            <div className="my-2 d-flex justify-content-between">
                <div className="w-50">
                    <button type="button" onClick={(e) => setStep(6)} className="btn btn-info">Previous</button>
                </div>
                <div className="w-50 text-right">
                    <button type="button" onClick={(e) => nextstep(8)} className="btn btn-info">Next</button>
                </div>
            </div>
        </>
    );
};

export default Step7;
