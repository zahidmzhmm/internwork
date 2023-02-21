import React from 'react';

const Experience = ({setData, allData, key, data}) => {
    return (
        <>

            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Name of Employer</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="text" className="form-control" value={data.name}
                           onChange={(e) => setData(
                               allData.map((item) => {
                                   if (item.id === data.id) {
                                       return {...data, name: e.target.value};
                                   }
                                   return item;
                               })
                           )}/>
                </div>
            </div>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Location</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="text" className="form-control" value={data.location}
                           onChange={(e) => setData(
                               allData.map((item) => {
                                   if (item.id === data.id) {
                                       return {...data, location: e.target.value};
                                   }
                                   return item;
                               })
                           )}/>
                </div>
            </div>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Position</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="text" className="form-control" value={data.position}
                           onChange={(e) => setData(
                               allData.map((item) => {
                                   if (item.id === data.id) {
                                       return {...data, position: e.target.value};
                                   }
                                   return item;
                               })
                           )}/>
                </div>
            </div>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Job Start Date</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="date" className="form-control" value={data.start}
                           onChange={(e) => setData(
                               allData.map((item) => {
                                   if (item.id === data.id) {
                                       return {...data, start: e.target.value};
                                   }
                                   return item;
                               })
                           )}/>
                </div>
            </div>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Job End Date</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="date" className="form-control" value={data.end}
                           onChange={(e) => setData(
                               allData.map((item) => {
                                   if (item.id === data.id) {
                                       return {...data, end: e.target.value};
                                   }
                                   return item;
                               })
                           )}/>
                </div>
            </div>
            <div className="row my-2">
                <div className="col-md-8 d-flex align-items-center">
                    <label htmlFor="category">Role Description</label>
                </div>
                <div className="col-md-4 d-flex">
                    <input type="text" className="form-control" value={data.description}
                           onChange={(e) => setData(
                               allData.map((item) => {
                                   if (item.id === data.id) {
                                       return {...data, description: e.target.value};
                                   }
                                   return item;
                               })
                           )}/>
                </div>
            </div>
        </>
    );
};

export default Experience;
