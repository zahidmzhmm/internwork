import React, {useEffect} from 'react';
import {toast} from "react-hot-toast";
import Studied from "../form/Studied";
import Placed from "../form/Placed";

const Step9 = ({setStep, selfPlaced, setSelfPlaced, placed, setPlaced}) => {

    useEffect(() => {
    }, [selfPlaced])

    const addNew = () => {
        setPlaced([...placed, {
            id: placed.length + 1,
            category: "",
            year: "",
            decision: "",
            place: "",
        }])
    }

    const handleRemove = (id) => {
        if (id > 1) {
            setPlaced(placed.filter((item) => item.id !== id));
        } else {
            toast.error("Minimum 1 Item required")
        }
    };
    const step8Submit = (page) => {
        let length = placed.length - 1;
        if (selfPlaced == 1) {
            if (placed[length].name !== "" && placed[length].location !== "" && placed[length].position !== "" && placed[length].start !== "" && placed[length].end !== "") {
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
                    {placed.map((item, index) =>
                        <>
                            <Placed setData={setPlaced} allData={placed} key={index} data={item}/>
                            <hr/>
                        </>
                    )}
                    <div className="d-flex justify-content-between">
                        <button className="btn btn-info mb-3 btn-sm"
                                onClick={(e) => addNew()}>Add New
                        </button>
                        <button className="btn btn-danger mb-3 btn-sm"
                                onClick={(e) => handleRemove(placed.length)}>Delete
                        </button>
                    </div>
                </>}
            <div className="my-2 d-flex justify-content-between">
                <div className="w-50">
                    <button type="button" onClick={(e) => setStep(8)} className="btn btn-info">Previous</button>
                </div>
                <div className="w-50 text-right">
                    <button type="button" onClick={(e) => step8Submit(10)} className="btn btn-info">Next</button>
                </div>
            </div>
        </>
    );
};

export default Step9;
