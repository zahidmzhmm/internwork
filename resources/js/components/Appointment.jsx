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
    const [picture, setPicture] = useState("");
    const [travel_exp, setTravelExp] = useState("");
    const [us_visa, setUSVisa] = useState("");
    const [workExp, setWorkExp] = useState(2);
    const [studies, setStudies] = useState(2);
    const [selfPlaced, setSelfPlaced] = useState(2);
    const [ex_name, setex_name] = useState("");
    const [ex_location, setex_location] = useState("");
    const [ex_position, setex_position] = useState("");
    const [ex_start, setex_start] = useState("");
    const [ex_end, setex_end] = useState("");
    const [ex_description, setex_description] = useState("");
    const [sd_name, setsd_name] = useState("");
    const [sd_location, setsd_location] = useState("");
    const [sd_position, setsd_position] = useState("");
    const [sd_start, setsd_start] = useState("");
    const [sd_end, setsd_end] = useState("");
    const [sd_description, setsd_description] = useState("");
    const [sp_name, setsp_name] = useState("");
    const [sp_location, setsp_location] = useState("");
    const [sp_position, setsp_position] = useState("");
    const [sp_start, setsp_start] = useState("");
    const [sp_end, setsp_end] = useState("");

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
            {step === 7 &&
            <Step7 setStep={setStep}
                   workExp={workExp}
                   setWorkExp={setWorkExp}
                   ex_name={ex_name}
                   ex_location={ex_location}
                   ex_position={ex_position}
                   ex_start={ex_start}
                   ex_end={ex_end}
                   ex_description={ex_description}
                   setex_name={setex_name}
                   setex_location={setex_location}
                   setex_position={setex_position}
                   setex_start={setex_start}
                   setex_end={setex_end}
                   setex_description={setex_description}
            />
            }
            {step === 8 &&
            <Step8 setStep={setStep}
                   studies={studies}
                   setStudies={setStudies}
                   sd_name={sd_name}
                   sd_location={sd_location}
                   sd_position={sd_position}
                   sd_start={sd_start}
                   sd_end={sd_end}
                   sd_description={sd_description}
                   setsd_name={setsd_name}
                   setsd_location={setsd_location}
                   setsd_position={setsd_position}
                   setsd_start={setsd_start}
                   setsd_end={setsd_end}
                   setsd_description={setsd_description}
            />
            }
            {step === 9 &&
            <Step9 setStep={setStep}
                   selfPlaced={selfPlaced}
                   setSelfPlaced={setSelfPlaced}
                   sp_name={sp_name}
                   sp_location={sp_location}
                   sp_position={sp_position}
                   sp_start={sp_start}
                   sp_end={sp_end}
                   setsp_name={setsp_name}
                   setsp_location={setsp_location}
                   setsp_position={setsp_position}
                   setsp_start={setsp_start}
                   setsp_end={setsp_end}
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
                workExp={workExp}
                studies={studies}
                selfPlaced={selfPlaced}
                ex_name={ex_name}
                ex_location={ex_location}
                ex_position={ex_position}
                ex_start={ex_start}
                ex_end={ex_end}
                ex_description={ex_description}
                sd_name={sd_name}
                sd_location={sd_location}
                sd_position={sd_position}
                sd_start={sd_start}
                sd_end={sd_end}
                sd_description={sd_description}
                sp_name={sp_name}
                sp_location={sp_location}
                sp_position={sp_position}
                sp_start={sp_start}
                sp_end={sp_end}
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