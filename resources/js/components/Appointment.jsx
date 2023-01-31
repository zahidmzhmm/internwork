import React, {useEffect, useState} from 'react';
import ReactDOM from "react-dom/client";
import {toast, Toaster} from "react-hot-toast";
import Step1 from "./steps/Step1";
import Step2 from "./steps/Step2";
import Step10 from "./steps/Step10";
import Step3 from "./steps/Step3";
import Step4 from "./steps/Step4";
import {Step5, Step6} from "./steps/Step5";

const Appointment = () => {
    const [step, setStep] = useState(1);
    const [category, setCategory] = useState("");
    const [country, setCountry] = useState("");
    const [digit, setDigit] = useState("");
    const [program, setProgram] = useState("");
    const [duration, setDuration] = useState("");
    const [applicable, setApplicable] = useState("");
    const [picture, setPicture] = useState("");
    const [travel_exp, setTravelExp] = useState("");
    const [us_visa, setUSVisa] = useState("");
    const [workExp, setWorkExp] = useState(2);
    const [studies, setStudies] = useState(2);
    const [selfPlaced, setSelfPlaced] = useState(2);

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
            <Step3 step={step}
                   setStep={setStep}
                   category={category}
                   country={country}
                   program={program}
            />}
            {step === 4 &&
            <Step4 step={step}
                   setStep={setStep}
                   category={category}
                   country={country}
                   program={program}
                   picture={picture}
                   setPicture={setPicture}
            />}
            {step === 5 &&
            <Step5 setStep={setStep}
                   travel_exp={travel_exp}
                   us_visa={us_visa}
                   setTravelExp={setTravelExp}
                   setUSVisa={setUSVisa}
            />
            }
            {step === 6 &&
            <Step6 setStep={setStep}
                   travel_exp={travel_exp}
                   us_visa={us_visa}
                   setTravelExp={setTravelExp}
                   setUSVisa={setUSVisa}
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
                picture={picture}
                travel_exp={travel_exp}
                us_visa={us_visa}
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
