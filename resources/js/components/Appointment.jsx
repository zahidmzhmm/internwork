import React from 'react';
import ReactDOM from "react-dom/client";

const Appointment = () => {
    return (
        <>
            Test
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
