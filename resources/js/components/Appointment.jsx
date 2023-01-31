import React, {useEffect, useState} from 'react';
import ReactDOM from "react-dom/client";
import {toast, Toaster} from "react-hot-toast";
import Step1 from "./steps/Step1";
import Step2 from "./steps/Step2";

const Appointment = () => {
    const [step, setStep] = useState(1);
    const [category, setCategory] = useState("");
    const [country, setCountry] = useState("");
    const [program, setProgram] = useState("");

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
