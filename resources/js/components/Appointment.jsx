import React, {useEffect, useState} from 'react';
import ReactDOM from "react-dom/client";
import {toast, Toaster} from "react-hot-toast";
import Step1 from "./steps/Step1";
import Step2 from "./steps/Step2";
import Step10 from "./steps/Step10";
import Step3 from "./steps/Step3";
import Step4 from "./steps/Step4";
import {Step5, Step6} from "./steps/Step5";
import Step7 from "./steps/Step7";
import Step8 from "./steps/Step8";
import Step9 from "./steps/Step9";

const Appointment = () => {
    const [step, setStep] = useState(1);
    const [category, setCategory] = useState("");
    const [country, setCountry] = useState("");
    const [digit, setDigit] = useState("");
    const [program, setProgram] = useState("");
    const [duration, setDuration] = useState("");
    const [applicable, setApplicable] = useState("");
    const [travel_exp, setTravelExp] = useState(2);
    const [us_visa, setUSVisa] = useState(2);
    const [workExp, setWorkExp] = useState(2);
    const [studies, setStudies] = useState(2);
    const [selfPlaced, setSelfPlaced] = useState(2);
    const [experience, setExperience] = useState([{
        id: 1,
        name: "",
        location: "",
        position: "",
        start: "",
        end: "",
        description: "",
    }])
    const [placed, setPlaced] = useState([{
        id: 1,
        name: "",
        location: "",
        position: "",
        start: "",
        end: "",
    }])
    const [studied, setStudied] = useState([{
        id: 1,
        institute: "",
        location: "",
        level: "",
        start: "",
        end: "",
        description: "",
    }])
    const [travel, setTravel] = useState([{
        id: 1,
        country: "",
        purpose: "",
        duration: "",
        year: "",
    }])
    const [visa, setVisa] = useState([{
        id: 1,
        category: "",
        year: "",
        decision: "",
        place: "",
    }])

    useEffect(() => {
    }, [step])

    return (
        <>
            <Toaster
                position="top-center"
                reverseOrder={false}
            />
            {step === 1 &&
                <Step1 setStep={setStep}
                       category={category}
                       setCategory={setCategory}
                />}
            {step === 2 &&
                <Step2 step={step}
                       setStep={setStep}
                       category={category}
                       country={country}
                       program={program}
                       setCountry={setCountry}
                       setProgram={setProgram}
                       setDigit={setDigit}
                />}
            {step === 3 &&
                <Step3 setStep={setStep}
                       category={category}
                       country={country}
                />}
            {step === 5 &&
                <Step5 setStep={setStep}
                       travel_exp={travel_exp}
                       us_visa={us_visa}
                       setTravelExp={setTravelExp}
                       setUSVisa={setUSVisa}
                       setTravel={setTravel}
                       travel={travel}
                />
            }
            {step === 6 &&
                <Step6 setStep={setStep}
                       us_visa={us_visa}
                       setUSVisa={setUSVisa}
                       visa={visa}
                       setVisa={setVisa}
                />
            }
            {step === 7 &&
                <Step7 setStep={setStep}
                       workExp={workExp}
                       setWorkExp={setWorkExp}
                       experience={experience}
                       setExperience={setExperience}
                />
            }
            {step === 8 &&
                <Step8 setStep={setStep}
                       studies={studies}
                       setStudies={setStudies}
                       studied={studied}
                       setStudied={setStudied}
                />
            }
            {step === 9 &&
                <Step9 setStep={setStep}
                       selfPlaced={selfPlaced}
                       setSelfPlaced={setSelfPlaced}
                       placed={placed}
                       setPlaced={setPlaced}
                />
            }
            {step === 10 &&
                <Step10
                    step={step}
                    setStep={setStep}
                    digit={digit}
                    category={category}
                    country={country}
                    program={program}
                    duration={duration}
                    setDuration={setDuration}
                    applicable={applicable}
                    setApplicable={setApplicable}
                    travel_exp={travel_exp}
                    us_visa={us_visa}
                    workExp={workExp}
                    studies={studies}
                    selfPlaced={selfPlaced}
                    experience={experience}
                    placed={placed}
                    studied={studied}
                    travel={travel}
                    visa={visa}
                />}
        </>
    );
};

export default Appointment;

if (document.getElementById('appointment-root')) {
    const Index = ReactDOM.createRoot(document.getElementById("appointment-root"));
    Index.render(
        <React.StrictMode>
            <Appointment/>
        </React.StrictMode>
    )
}
